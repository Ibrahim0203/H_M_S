<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    
    public function sendEmail(Request $request)
    {
        $details=[
            'name'=>$request->name,
            'email'=>$request->email,
            'program'=>$request->program,
            'semester'=>$request->semester,
            'subject'=>$request->subject,
            'phone'=>$request->phone,
            'msg'=>$request->msg
        ];
        Mail::to('ayeshasiddika199818@gmail.com')->send(new ContactMail($details));

        return back()->with('message_sent','Your Message has been sent successfully!');
    }
}
