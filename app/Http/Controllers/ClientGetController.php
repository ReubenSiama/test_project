<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\CompanyInfo;
use App\ServiceNeeded;
use App\MoreInfo;

class ClientGetController extends Controller
{
    public function getClientSignUp()
    {
        return view('client.clientSignUp');
    }
    public function getClientSetUp()
    {
        return view('client.clientSetUp');
    }
    public function getClientDashboard()
    {
        $companyInfo = CompanyInfo::where('client_id',Auth::user()->id)->first();
        $services = ServiceNeeded::where('client_id',Auth::user()->id)->first();
        $moreInfo = MoreInfo::where('client_id',Auth::user()->id)->first();
        if($companyInfo == null || $services == null || $moreInfo == null){
            return redirect('/client-set-up');
        }else{
            return view('client.clientDashboard');
        }
    }
    public function getCreateBrief()
    {
        return view('client.createBriefs');
    }
    public function getQuestionBank()
    {
        return view('client.questionBank');
    }
}
