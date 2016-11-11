<?php

Route::get('/', 'WelcomeController@index');
Route::post('register/attendee', 'RegistrationController@registerAttendee');
Route::post('register/speaker', 'RegistrationController@registerSpeaker');

