<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registerAttendee(Request $request)
    {
        dd($request->all());
    }

    public function registerSpeaker(Request $request)
    {
        dd('Registering Speaker');
    }


}
