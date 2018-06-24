<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use Validator;
use App\User;
use App\UserType;
use App\CompanyInfo;
use App\ServiceNeeded;
use App\MoreInfo;

class ClientPostController extends Controller
{
    public function postClientSignUp(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $type = UserType::where('type',"Client")->pluck('id')->first();
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_type = $type;
        if($user->save()){
            Auth::loginUsingId($user->id);
            return redirect('/clientDashboard');
        }else{
            return back()->with('Error','Something went wrong!!!');
        }
    }
    public function postClientSetUp(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'contactName' => 'required',
            'jobTitle' => 'required',
            'website' => 'required',
            'bases' => 'required',
            'industry' => 'required'
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }
        $companyInfo = new CompanyInfo;
        $companyInfo->client_id = Auth::user()->id;
        $companyInfo->contact_name = $request->contactName;
        $companyInfo->job_title = $request->jobTitle;
        $companyInfo->website = $request->website;
        $companyInfo->base = $request->bases ? implode(", ",$request->bases) : "";
        $companyInfo->industry = $request->industry;
        $companyInfo->save();
        $services = new ServiceNeeded;
        $services->client_id = Auth::user()->id;
        $services->budget = str_replace(';', '-', $request->budget);
        $services->location = $request->locations ? implode(", ", $request->locations) : "";
        $services->services = $request->services ? implode(", ", $request->services) : "";
        $services->languages = $request->languages ? implode(", ", $request->languages) : "";
        $services->save();
        $moreInfo = new MoreInfo;
        $moreInfo->client_id = Auth::user()->id;
        $moreInfo->growth_strategy = $request->growth_strategy;
        $moreInfo->market = $request->market;
        $moreInfo->competition_level = $request->level;
        $moreInfo->save();
        return redirect('/clientDashboard');
    }
}