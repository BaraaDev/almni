<?php

namespace App\Http\Controllers;

use App\Http\Requests\Web\ProfileRequest;
use App\Http\Requests\Web\UpdatePasswordRequest;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = User::findOrFail(auth()->user()->id);
        if (auth()->user()->userType == 'student'){
            return view('web.students.profile', compact('user'));
        } elseif (auth()->user()->userType == 'instructor')
        {
            return view('web.instructors.dashboard',compact('user'));
        } else {
            return redirect(route('dashboard'));
        }
    }

    public function courses ()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('web.instructors.courses',compact('user'));
    }

    public function settings()
    {
        $user = User::findOrFail(auth()->user()->id);
        return view('web.instructors.setting',compact('user'));
    }

    public function updateSetting(ProfileRequest $request)
    {
        $user = User::findOrFail(auth()->user()->id);

        $array = [];
        if($request->name != $user->name){
            $array['name'] =  $request->name;
        }
        if($request->email != $user->email){
            $email = User::where('email' , $request->email)->first();
            if($email == null){
                $array['email'] =  $request->email;
            }
        }
        if($request->phone != $user->phone){
            $array['phone'] =  $request->phone;
        }
        if($request->bio != $user->bio){
            $array['bio'] =  $request->bio;
        }

        if($request->age != $user->age){
            $array['age'] =  $request->age;
        }
        if($request->address != $user->address){
            $array['address'] =  $request->address;
        }
        if($request->postal_code != $user->postal_code){
            $array['postal_code'] =  $request->postal_code;
        }
        if($request->city_id != $user->city_id){
            $array['city_id'] =  $request->city_id;
        }
        if($request->facebook != $user->facebook){
            $array['facebook'] =  $request->facebook;
        }
        if($request->twitter != $user->twitter){
            $array['twitter'] =  $request->twitter;
        }
        if($request->instagram != $user->instagram){
            $array['instagram'] =  $request->instagram;
        }
        if($request->whatsApp != $user->whatsApp){
            $array['whatsApp'] =  $request->whatsApp;
        }
        if($request->linkedin != $user->linkedin){
            $array['linkedin'] =  $request->linkedin;
        }
        if($request->telegram != $user->telegram){
            $array['telegram'] =  $request->telegram;
        }


        if(!empty($array)){
            $user->update($array);
        }
        return redirect(route('web.profile'));
    }

    public function profileUpdatePassword(UpdatePasswordRequest $request)
    {
        $user = $request->user();
        if($request->password != ''){
            if (Hash::check($request->input('current_password'), $user->password)) {
                // The passwords match...
                $user->password = bcrypt($request->input('password'));
                $user->save();
            }else {
                return redirect()->route('web.profile')
                    ->with(['message' => 'The current password is incorrect, try again']);
            }
        }
        return redirect()->route('web.profile')
            ->with(['message' => 'Password successfully changed']);
    }
}
