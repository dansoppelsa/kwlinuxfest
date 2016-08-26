<?php namespace App\Http\Controllers;

use App\Attendee;
use App\Speaker;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RegistrationController extends Controller
{

    public function registerAttendee(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|max:255',
            'email' =>  'required|email|max:255'
        ]);


        if ($validator->fails()) {
            return redirect('/#register')->withErrors($validator)->withInput();
        } 

        Attendee::create($request->all());
        return redirect('/register/attendee/registered');
    }




    public function registerSpeaker(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|max:255',
            'email' =>  'required|email|max:255',
            'talk_name' =>  'required|max:255',
            'job_title' =>  'required|max:255',
            'description' =>  'required|max:255',
        ]);


        if ($validator->fails()) {
            return redirect('/#register')->withErrors($validator)->withInput();
        }
        Speaker::create($request->all());
        return redirect('/register/speaker/registered');

    }


}
