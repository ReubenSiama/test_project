<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgencyGetController extends Controller
{
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
        return view('agency.agencySignUp3');
    }
}
