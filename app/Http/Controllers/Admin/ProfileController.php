<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\Random;
use phpDocumentor\Reflection\DocBlock\Tags\Author;
use voku\helper\ASCII;

class ProfileController extends Controller
{
    public function profile()
    {
        $user   = User::findOrFail(auth()->user()->id);

        return view('admin.users.profile',compact('user'));
    }

    public function edit_my_Profile(Request $request)
    {
        //dd($request->all());
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

        if($request->bio != $user->bio){
            $array['bio'] =  $request->bio;
        }

        if($request->age != $user->age){
            $array['age'] =  $request->age;
        }

        if($request->job != $user->job){
            $array['job'] =  $request->job;
        }

        if($request->address != $user->address){
            $array['address'] =  $request->address;
        }

        if($request->phone != $user->phone){
            $array['phone'] =  $request->phone;
        }

        if($request->phone2 != $user->phone2){
            $array['phone2'] =  $request->phone2;
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

        if($request->linkedin != $user->linkedin){
            $array['linkedin'] =  $request->linkedin;
        }

        if($request->AskFM != $user->AskFM){
            $array['AskFM'] =  $request->AskFM;
        }

        if($request->YouTube != $user->YouTube){
            $array['YouTube'] =  $request->YouTube;
        }

        if($request->whatsApp != $user->whatsApp){
            $array['whatsApp'] =  $request->whatsApp;
        }

        if($request->city_id != $user->city_id){
            $array['city_id'] =  $request->city_id;
        }

        if($request->file('photo')) {
            $user
                ->clearMediaCollection('user')
                ->addMediaFromRequest('photo')
                ->UsingName($random = Random::generate(60))
                ->UsingFileName($random)
                ->toMediaCollection('user');
        }

        if(!empty($array)){
            $user->update($array);
        }

        return redirect()->route('profile')
            ->with(['success' => __('home.User successfully updated')]);
    }
}
