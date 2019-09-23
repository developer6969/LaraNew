<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\API\BaseController;
use App\Member;
use Illuminate\Support\Facades\Auth;

class MemberController extends BaseController
{
    public $successStatus = 200;

    public function __construct() {
        $this->middleware('auth:api');
    }

    public function index() {
        $members = Member::where('user_id', auth('api')->user()->id)->orderBy('name', 'asc')->get();
        return $this->sendResponse($members->toArray(), 'Data retrieved successfully.');
    }

    public function store(Request $request) {
        $member = new Member();
        if ($member->user->id == auth('api')->user()->id) {

            // First level validation
            $validator = Validator::make($request->all(), [ 
                'name' => 'required|string|max:50',
                'mobile' => 'nullable|numeric|digits:10',
                'email' => 'nullable|string|max:50',
                'dob' => 'nullable',
                'gender' => 'nullable',
                'blood' => 'nullable',
                'bio' => 'nullable|string',
                'photo' => 'nullable',
            ]);

            if ($validator->fails()) {
                return $this->sendError($validator->errors(), 'Validation falied', 404);           
            }

            if($request->has('photo')){
                // Extract file extension
                $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
                // Convert Base64 to image
                \Image::make($request->photo)->save(public_path('img/profile/').$name);
                // Update photo name in request
                $request->merge(['photo' => $name]);
            }

            if($request->has('dob')) {
                $member->age = $member->getAgeFromDob($request->dob);
            }
            
            $member->name = $request->name;
            $member->mobile = $request->mobile;
            $member->email = $request->email;
            $member->dob = $request->dob;
            $member->gender = $request->gender; 
            $member->blood = $request->blood;        
            $member->bio = $request->bio;
            $member->photo = $request->photo;     
            $member->save();
            
            return $this->sendResponse($member->toArray(), 'Member Added Succesfully');
        } else {
            return $this->sendError('Un-authorised Access', 'Member Creation Failed');
        }
    }

    public function show($id) {
        //
    }

    public function update(Request $request, $id) {

        $member = Member::findOrFail($id);
        if ($member->user->id == auth('api')->user()->id) {

            // First level validation
            $validator = Validator::make($request->all(), [ 
                'name' => 'required|string|max:50',
                'mobile' => 'nullable|numeric|digits:10',
                'email' => 'nullable|string|max:50',
                'dob' => 'nullable',
                'gender' => 'nullable',
                'blood' => 'nullable',
                'bio' => 'nullable|string',
                'photo' => 'nullable',
            ]);

            if ($validator->fails()) {
                return $this->sendError($validator->errors(), 'Validation falied', 404);           
            }

            // Assert whether user changed photo
            $currentPhoto = $member->photo;
            if($request->photo != $currentPhoto){
                // Extract file extension
                $name = time().'.' . explode('/', explode(':', substr($request->photo, 0, strpos($request->photo, ';')))[1])[1];
                // Convert Base64 to image
                \Image::make($request->photo)->save(public_path('img/profile/').$name);
                // Update photo name in request
                $request->merge(['photo' => $name]);
                // Delete old photo
                $userPhoto = public_path('img/profile/').$currentPhoto;
                if(file_exists($userPhoto)){
                    @unlink($userPhoto);
                }
            }

            if($request->has('dob')) {
                $member->age = $member->getAgeFromDob($request->dob);
            }
            
            $member->name = $request->name;
            $member->mobile = $request->mobile;
            $member->email = $request->email;
            $member->dob = $request->dob;
            $member->gender = $request->gender; 
            $member->blood = $request->blood;        
            $member->bio = $request->bio;
            $member->photo = $request->photo;     
            $member->save();
            
            return $this->sendResponse($member->toArray(), 'Member Updated Succesfully');
        } else {
            return $this->sendError('Un-authorised Access', 'Member Updation Failed');
        }
    }

    public function destroy($id) {
        $member = Member::findOrFail($id);
        if ($member->user->id == auth('api')->user()->id) {
            $member->delete();
            return $this->sendResponse('', 'Member Deleted Succesfully');
        } else {
            return $this->sendError('Un-authorised Access', 'Member Deletion Failed');
        }
    }

}
