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
Route::get('/agency-sign-up','AgencyGetController@getAgencySignUp');
Route::get('/agency-sign-up-step-2','AgencyGetController@getAgencySignUp2');
Route::get('/agency-sign-up-step-3','AgencyGetController@getAgencySignUp3');
Route::post('/agency-sign-up','AgencyPostController@postAgencySignUp');

Route::get('/client-sign-up','HomeController@getClientSignUp');
Route::get('/client-set-up','HomeController@getClientSetUp');