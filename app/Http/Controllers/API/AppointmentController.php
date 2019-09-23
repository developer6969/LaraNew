<?php

namespace App\Http\Controllers\API;

use App\Day;
use App\Schedule;
use App\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends BaseController
{
    public $successStatus = 200;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $days = Day::all();
        return $this->sendResponse($days->toArray(), 'Data retrieved successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // First level validation
        $validator = Validator::make($request->all(), [ 
            'clinic' => 'required',
            'doctor' => 'required',
            'day' => 'required',
            'session' => 'required',
            'member' => 'required',
            'purpose' => 'nullable|string|max:255',
            'date_db' => 'required',
            'time_db' => 'required',
        ]);

        if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }

        $scheduleId = $this->getScheduleId($request);
        $date = $request->input('date_db');
        $time = $request->input('time_db');
        $purpose = $request->input('purpose');
        $member = $request->input('member');
        $statusId = 2; // Default status : Confirmed
        $queueNumber = $this->getAppointmentQueueNo($scheduleId);
     
        // Second Level Validation
        if ($this->validateNewData($statusId, $scheduleId)) {
            // All data validated
            $appointment = new Appointment;
            $appointment->date = $date;
            $appointment->time = $time;
            $appointment->purpose = $purpose;
            $appointment->queue = 0;
            if($statusId > 1/* Status ID : Pending */) {
                // Queue no is alloted only after appointment status is confirmed
                $appointment->queue = $queueNumber;
            }
            $appointment->schedule_id = $scheduleId;
            $appointment->status_id = $statusId;
            $appointment->member_id = $member;
            $appointment->user_id = Auth::id();
            $appointment->save();

            $updated_appointment_count = Appointment::where('schedule_id', $scheduleId)
                                                   ->where('status_id', '<>', 1) // Pending
                                                   ->where('status_id', '<>', 6) // Completed
                                                   ->where('status_id', '<>', 7) // Cancelled
                                                   ->pluck('queue')->values()->all();

            $schedule = Schedule::find($scheduleId);
            $schedule->update(['appointments_count' => count($updated_appointment_count)]);

            return $this->sendResponse($appointment->toArray(), 'Appointment Booked');
        } else {
            return 'Somethong went wrong, please try again later';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // HELPER METHODS
    protected function validateNewData($statusId, $scheduleId) {
        return (is_int($statusId) && is_int($scheduleId) &&  $statusId > 0 && $scheduleId > 0);
    }

    protected function getScheduleId($request) {
        $scheduleId = Schedule::where('clinic_id', $request->input('clinic'))
                              ->where('doctor_id', $request->input('doctor'))
                              ->where('day_id', $request->input('day'))
                              ->where('session_id', $request->input('session'))
                              ->where('status', 'available')
                              ->pluck('id')->values()->all();
        return $scheduleId[0];
    }

    protected function getAppointmentQueueNo($scheduleId) {
        $queueNumber = Schedule::where('id', $scheduleId)
                               ->pluck('appointments_count')->values()->all();
        return $queueNumber[0] + 1;
    }
}
