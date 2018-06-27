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
use App\UserLanguage;
use App\Http\Requests\ClientSignupRequest;
use App\Http\Requests\ClientSetupRequest;

class ClientPostController extends Controller
{
    public function postClientSignUp(ClientSignupRequest $request)
    {
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
    public function postClientSetUp(ClientSetupRequest $request)
    {
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
        $services->save();

        foreach($request->languages as $language){
            $userLanguage = new UserLanguage;
            $userLanguage->user_id = Auth::user()->id;
            $userLanguage->language_id = $language;
            $userLanguage->save();
        }
            
        $moreInfo = new MoreInfo;
        $moreInfo->client_id = Auth::user()->id;
        $moreInfo->growth_strategy = $request->growth_strategy;
        $moreInfo->market = $request->market;
        $moreInfo->competition_level = $request->level;
        $moreInfo->save();

        return redirect('/clientDashboard');
    }
}