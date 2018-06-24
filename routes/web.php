<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@getIndex');
Route::get('/login','HomeController@getLogin')->name('login');
Route::post('/login','HomeController@login');

// Agency
Route::get('/agency-sign-up','AgencyGetController@getAgencySignUp');
Route::post('/agency-sign-up','AgencyPostController@postAgencySignUp');
// Client
Route::get('/client-sign-up','ClientGetController@getClientSignUp');
Route::post('/clientSignUp','ClientPostController@postClientSignUp');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/logout','HomeController@logout');
    
    // agency
    Route::get('/agency-sign-up-step-2','AgencyGetController@getAgencySignUp2');
    Route::get('/agency-sign-up-step-3','AgencyGetController@getAgencySignUp3');
    Route::get('/agencyDashboard','AgencyGetController@getAgencyDashboard');
    Route::post('/aboutAgency','AgencyPostController@postAboutAgency');
    Route::post('/client_types','AgencyPostController@postClientTypes');

    // client
    Route::get('/client-set-up','ClientGetController@getClientSetUp');
    Route::post('/client-set-up','ClientPostController@postClientSetUp');
    Route::get('/clientDashboard','ClientGetController@getClientDashboard');
    Route::get('/createBrief','ClientGetController@getCreateBrief');
    Route::get('/questionBank','ClientGetController@getQuestionBank');
});
