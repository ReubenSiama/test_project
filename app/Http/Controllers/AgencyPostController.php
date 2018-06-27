<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserType;
use App\AboutAgency;
use App\ClientType;
use App\UserLanguage;
use Validator;
use Hash;
use Auth;
use App\Http\Requests\AgencySignupRequest;

class AgencyPostController extends Controller
{
    public function postAgencySignUp(AgencySignupRequest $request)
    {
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
        foreach($request->services as $language)
        {
            $userLanguage = new UserLanguage;
            $userLanguage->user_id = Auth::user()->id;
            $userLanguage->language_id = $language;
            $userLanguage->save();
        }
        $types = new ClientType;
        $types->agency_id = Auth::user()->id;
        $types->budget = str_replace(';', '-', $request->budget);;
        $types->clients_range = str_replace(';', '-', $request->kmRange);
        if($types->save()){
            return redirect('/agencyDashboard');
        }
    }
}
