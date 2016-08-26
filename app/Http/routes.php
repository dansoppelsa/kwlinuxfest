<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;


Route::post('register/attendee', 'RegistrationController@registerAttendee');
Route::post('register/speaker', 'RegistrationController@registerSpeaker');

Route::get('register/speaker/registered', function() {
    return view('registered', ['speaker' => true]);
});

Route::get('register/attendee/registered', function() {
    return view('registered', ['speaker' => false]);
});


Route::get('/', function (Request $request) {
    return view('welcome');
});

