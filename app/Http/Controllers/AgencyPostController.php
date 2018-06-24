<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserType;
use App\AboutAgency;
use App\ClientType;
use Validator;
use Hash;
use Auth;

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
            Auth::loginUsingId($agency->id);
            return redirect('/agencyDashboard');
        }else{
            return back()->with('Error','Something went wrong!!!');
        }
    }
    public function postAboutAgency(Request $request)
    {
        $industry = implode(", ",$request->industry);
        $about = new AboutAgency;
        $about->agency_id = Auth::user()->id;
        $about->contatct_name = $request->contactName;
        $about->job_title = $request->contactJob;
        $about->website = $request->website;
        $about->base = $request->matchLocation ? implode(", ", $request->matchLocation) : "";
        $about->industries_specialize = $industry;
        $about->services_offer = $request->services ? implode(", ", $request->services) : "";
        if($about->save()){
            return redirect('/agencyDashboard');
        }else{
            return back()->with('Error','Something went wrong!!!');
        }
    }
    public function postClientTypes(Request $request)
    {
        $languages = "";
        if($request->services){
            $languages = implode(", ", $request->services);
        }
        $types = new ClientType;
        $types->agency_id = Auth::user()->id;
        $types->budget = str_replace(';', '-', $request->budget);;
        $types->clients_range = str_replace(';', '-', $request->kmRange);
        $types->languages = $languages;
        if($types->save()){
            return redirect('/agencyDashboard');
        }
    }
}
