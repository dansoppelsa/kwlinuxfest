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

use App\RSVP;

Route::post('/rsvp', function() {
    $req = Request::all();

    $rsvp = new RSVP();
    $rsvp->full_name = $req['full_name'];
    $rsvp->email = $req['email'];

    $rsvp->save();


});

Route::post('register/attendee', 'RegistrationController@registerAttendee');
Route::post('register/speaker', 'RegistrationController@registerSpeaker');

Route::get('/', function () {
    return view('welcome');
});
