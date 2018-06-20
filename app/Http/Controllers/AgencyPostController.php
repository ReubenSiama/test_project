<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserType;
use Validator;
use Hash;

class AgencyPostController extends Controller
{
    public function postAgencySignUp(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $type = UserType::where('type',"Agency")->pluck('id')->first();
        $agency = new User;
        $agency->name = $request->name;
        $agency->email = $request->email;
        $agency->password = Hash::make($request->password);
        $agency->user_type = $type;
        if($agency->save()){
            return redirect('/agency-sign-up-step-2');
        }else{
            return "Something Went Wrong";
        }
    }
}
