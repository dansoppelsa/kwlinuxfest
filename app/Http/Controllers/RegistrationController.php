<?php namespace App\Http\Controllers;

use App\Speaker;
use App\Attendee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
   public function registerAttendee(Request $request)
    {
        sleep(1);
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|max:255',
            'email' =>  'required|email|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        } 

        Attendee::create($request->all());

        return response()->json('Created', 201);
    }

   public function registerSpeaker(Request $request)
   {
       sleep(1);
       $validator = Validator::make($request->all(), [
           'full_name' => 'required|max:255',
           'email' =>  'required|email|max:255',
           'talk_name' =>  'required|max:255',
           'job_title' =>  'required|max:255',
           'description' =>  'required|max:255',
       ]);

       if ($validator->fails()) {
           return response()->json($validator->errors(), 400);
       }

       Speaker::create($request->all());

       return response()->json('Created', 201);
   }
}
