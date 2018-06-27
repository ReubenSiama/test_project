<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AboutAgency;
use App\ClientType;
use App\Language;
use Auth;

class AgencyGetController extends Controller
{
    public function getAgencyDashboard()
    {
        $aboutAgency = AboutAgency::where('agency_id',Auth::user()->id)->first();
        $clientType = ClientType::where('agency_id',Auth::user()->id)->first();
        if($aboutAgency == null){
            return redirect('/agency-sign-up-step-2');
        }
        if($clientType == null){
            return redirect('/agency-sign-up-step-3');
        }
        return view('agency.agencyIndex');
        // return view('agency.agencyDashboard');
    }
    public function getAgencySignUp()
    {
        return view('agency.agencySignUp');
    }
    public function getAgencySignUp2()
    {
        return view('agency.agencySignUp2');
    }
    public function getAgencySignUp3()
    {
        $languages = Language::all();
        return view('agency.agencySignUp3',['languages'=>$languages]);
    }
}
