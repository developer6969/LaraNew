<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Category;
use App\Clinic;
use App\Day;
use App\Doctor;
use App\Gallery;
use App\Member;
use App\Menu;
use App\Page;
use App\Post;
use App\Review;
use App\Schedule;
use App\Service;
use App\Session;
use App\Status;
use App\UserDefault;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }

    // SPECIFIC METHODS : Public Pages

    public function menu() {
        $menus = Menu::all();
        return view('pages.menus', compact('menus'));

    }

    // PUBLIC PAGES
    public function about() {
        
        $sch = Schedule::with('clinic', 'session', 'doctor', 'day')->get()
                    ->map(function ($sch) {
                        return [
                            'id' => $sch->id,
                            'cli' => $sch->clinic->name,
                            'doc' => $sch->doctor->name,
                            'sess' => $sch->session->start,
                            'sese' => $sch->session->end,
                            'day' => $sch->day->title,
                            'status' => $sch->status
                        ];
                    });

        $data = array(
            'menus' => Menu::all(),
            'title' => 'About',
            'about' => 'Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, nohid
                        mobile-first projects on the web. Postab adipisicing elit. Exercitationem veniam magni enim
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem veniam magni enim 
                        quo delectus deleniti labore explicabo sed, molestiae temporibus aperiam optio minus ipsa 
                        modi ea quod, blanditiis est iste! Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Quidem, fugit. Enim, facilis laborum eaque explicabo impedit praesentium accusamus ipsa id 
                        est reprehenderit quae saepe quos nihil maxime accusantium quod molestiae. Lorem ipsum dolor 
                        sit amet consectetur adipisicing elit. Expedita, amet labore commodi mollitia, deleniti 
                        placeat sint repudiandae laboriosam distinctio dolorem doloribus saepe incidunt fugiat 
                        cum repellendus aliquam adipisci minus porro. Lorem ipsum dolor sit, amet consectetur 
                        adipisicing elit. Dolorem aperiam veniam corrupti quibusdam repellendus, commodi minima 
                        animi corporis ab, fugit repudiandae sed quasi eligendi a culpa provident libero nam quod!',
            'clinics' => Clinic::all(),
            'test' => $sch,
        );

        return view('pages.about')->with($data);
    }

    public function doctors() {

        $doctors = Doctor::all();
        $clinics = Clinic::all();
        $sessions = Session::all();
        $days = Day::all();

        $clinicId = 1; // default
        if (request()->has('clinic')) {
            $clinicId = request('clinic');
        }

        $clinicDoctorIds = Schedule::where('clinic_id', $clinicId)->get();
        $clinicDoctorIds = $clinicDoctorIds->pluck('doctor_id');
        $clinicDoctorIds = $clinicDoctorIds->unique();
        $clinicDoctorIds->values()->all();

        $schedules = Schedule::with(['clinic', 'session', 'day', 'doctor'])->where('clinic_id', $clinicId)->get();

        $some = array();
        foreach($doctors as $doc){
            array_push($some, array(
                $doc->id, 
                Schedule::where('doctor_id', $doc->id)->where('clinic_id', $clinicId)->pluck('session_id')->unique()->values()->all()
            ));
        }
           
        $data = array(
            'menus' => Menu::all(),
            'title' => 'Doctors',
            'activeClinicId' => $clinicId,
            'clinicDoctorIds' => $clinicDoctorIds,
            'doctors' => $doctors,
            'clinics' => $clinics,
            'schedules' => $schedules,
            'sessions' => $sessions,
            'days' => $days,
            'some' => $some,
        );
        
        return view('pages.doctors')->with($data);
    }

    public function services() {
        $data = array(
            'menus' => Menu::all(),
            'title' => 'Services',
            'services' => Service::all()
        );
        return view('pages.services')->with($data);
    }

    public function blog() {
        $data = array(
            'menus' => Menu::all(),
            'title' => 'Blog',
            'posts' => Post::all(),
            'categories' => Category::all()
        );
        return view('pages.blog')->with($data);
    }

    public function reviews() {
        $data = array(
            'menus' => Menu::all(),
            'title' => 'Reviews',
            'reviews' => Review::all()
        );
        return view('pages.reviews')->with($data);
    }

    public function gallery() {
        $data = array(
            'menus' => Menu::all(),
            'title' => 'Gallery',
            'galleries' => Gallery::all()
        );
        return view('pages.gallery')->with($data);
    }
    
    public function appointments() {
        // Authorised User
        if (Auth::check()) {

            $availableDays = Day::all();
            $availableDays = $availableDays->map(function ($day){
                return collect([
                    'dayid' => (getdate(time() + $this->addDay(($day->id)-1))['wday'])+1,
                    'month' => getdate(time() + $this->addDay(($day->id)-1))['month'],
                    'date' => getdate(time() + $this->addDay(($day->id)-1))['mday'],
                    'day' => getdate(time() + $this->addDay(($day->id)-1))['weekday'],
                    'status' => $this->isDocAvailableForThisDay((getdate(time() + $this->addDay(($day->id)-1))['wday'])+1),
                    'sessions' => $this->isDocAvailableForSessionOnThisDay( true, (getdate(time() + $this->addDay(($day->id)-1))['wday'])+1),
                    // 'appointment_count' => $this->isDocAvailableForSessionOnThisDay( false, (getdate(time() + $this->addDay(($day->id)-1))['wday'])+1)
                ]);
            });

            $userDefaults = UserDefault::where('user_id', auth()->user()->id)->take(1)->get();
            $userDefaults = $userDefaults ->map(function ($userDefault){
                return collect([
                    'clinic' => $userDefault->clinic_id,
                    'doctor' => $userDefault->doctor_id,
                    'member' => $userDefault->member_id,
                    'day' => $userDefault->day_id,
                    'session' => $userDefault->session_id
                ]);
            });
           
            $appointments = Appointment::where('user_id', auth()->user()->id)->get();
            $appointments = $appointments ->map(function ($appointment){
                return collect([
                    'id' => $appointment->id,
                    'date' => date_parse($appointment->date.$appointment->time),
                    'datelable' => date_format(date_create($appointment->date . " " . $appointment->time),"l d-m-Y H:i"),              
                    'doctor' => $appointment->schedule->doctor->name,
                    'clinic' => $appointment->schedule->clinic->street,
                    'memberId' => $appointment->member_id,
                    'purpose' => $appointment->purpose,
                    'status' => $appointment->status->title,
                    'charges' => $appointment->schedule->session->charge,
                ]);
            });
           
            $data = array(
                'menus' => Menu::all(),
                'title' => 'My Appointments',
                'days' => Day::select('id', 'title')->get(),
                'clinics' => Clinic::select('id', 'nick')->get(),
                'doctors' => Doctor::select('id', 'name')->get(),
                'members' => Member::select('id', 'name')->where('user_id', auth()->user()->id)->orderBy('name', 'asc')->get(),
                'sessions' => Session::select('id', 'title', 'start', 'end', 'charge', 'detail')->get(),
                'schedules' => json_encode($availableDays),
                'userdefaults' => $userDefaults,
                'appointments' => $appointments,
                'queriedclinicid' => request('clinic'),
                'querieddoctorid' => request('doctor')
            );
            
            return view('pages.appointments')->with($data);
        
        // Unauthorised User    
        } else {
            $data = array(
                'menus' => Menu::all(),
                'title' => 'Appointments',
            );
            return view('auth.login')->with($data);
        }
    }

    public function members() {    
        if (Auth::check()) {
            $data = array(
                'menus' => Menu::all(),
                'title' => 'Members',
                // 'members' => Member::where('user_id', auth()->user()->id)->orderBy('name', 'asc')->get(),
            );
            return view('pages.members')->with($data);
        } else {
            $data = array(
                'menus' => Menu::all(),
                'title' => 'Members',
            );
            return view('auth.login')->with($data);
        }
    }

    public function chat() {
        if (Auth::check()) {
            $data = array(
                'menus' => Menu::all(),
                'title' => 'Chat',
                // 'chats' => Chat::where('user_id', auth()->user()->id)->orderBy('added_on', 'desc')->get(),
                // 'members' => Member::where('user_id', auth()->user()->id)->get(),
            );
            return view('pages.chat')->with($data);
        } else {
            $data = array(
                'menus' => Menu::all(),
                'title' => 'Chat'
            );
            return view('auth.login')->with($data);
        }
    }

    // HELPER FUNCTIONS ---------------------------------------------

    function addDay($count) {
        return $count * 86400;
    }

    function isDocAvailableForThisDay($dayId) {
        if (request()->has('clinic') && request()->has('doctor')) {
            $schedules = Schedule::where('clinic_id', request('clinic'))
                                            ->where('doctor_id', request('doctor'))
                                            ->where('status', 'available')
                                            ->pluck('day_id')->unique()
                                            ->values()->all();
            return in_array($dayId, $schedules);
        } else {
            return false;
        }
    }

    function isDocAvailableForSessionOnThisDay($isSessionOnly, $dayId) {
        if (request()->has('clinic') && request()->has('doctor')) {
            $sessions = Schedule::where('clinic_id', request('clinic'))
                                 ->where('doctor_id', request('doctor'))
                                 ->where('day_id', $dayId)
                                 ->where('status', 'available')
                                 ->select('session_id', 'appointment_count')
                                 ->get();

            if(empty($sessions)) {
                return null;
            } else {
                if($isSessionOnly) {
                    return $sessions->pluck('session_id')->values()->all();
                } else {
                    return $sessions->pluck('appointment_count')->values()->all();                
                }
            }
        } else {
            return null;
        }
    }
}
