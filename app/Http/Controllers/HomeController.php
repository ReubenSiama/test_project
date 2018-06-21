<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\UserType;

class HomeController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }
    public function getClientSignUp()
    {
        return view('client.clientSignUp');
    }
    public function getClientSetUp()
    {
        return view('client.clientSetUp');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function getLogin()
    {
        return view('login');
    }
    public function login(Request $request){
        $type = UserType::where('type',$request->type)->pluck('id')->first();
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            if(Auth::user()->user_type == $type){
                switch($type){
                    case 1:
                        return redirect('/agencyDashboard');
                        break;
                    case 2:
                        return "Client";
                        break;
                    default:
                        return back();
                }
            }else{
                Auth::logout();
                return back()->with('error','Incorrect Username or Password');
            }
        }else{
            return back()->with('error','Incorrect Username or Password');
        }
    }
}
