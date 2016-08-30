<?php namespace App\Http\Controllers;

use App\Attendee;
use App\Speaker;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;



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

        \Mail::raw(sprintf('Someone new registered: name: %s, email: %s', $request->input('full_name'), $request->input('email')), function($msg) {
            $msg->from('kwlinuxfest@gmail.com')
                ->to('colin.j.mills96@gmail.com')
                ->subject('New Registration');
        });


        return redirect('/register/attendee/registered');
    }




   private function generateSpeakerMessage (Request $request)
   {
       $msg = sprintf("Name: %s\n Email: %s\n Talk Name: %s\n Job Title: %s\n Description: %s\n", $request->input('full_name'), $request->input('email'), $request->input('talk_name'), 
                                                                                                $request->input('job_title'), $request->input('description'));

       \Mail::raw($msg, function($email) {

           $email
               ->from('kwlinuxfest@gmail.com')
               ->to('colin.j.mills96@gmail.com')
               ->subject('New Speaker');
       });
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

       $this->generateSpeakerMessage($request);

       return redirect('/register/speaker/registered');
   }
}
