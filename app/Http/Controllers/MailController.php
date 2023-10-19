<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {

        $mailData = [
            'name'=> $request['name'] ?? '',
            'email'=> $request['email'] ?? '',
            'subject'=> $request['subject'] ?? '',
            'message' => $request['message'] ?? ''
        ];

        Mail::to('H2O@mcmteam.com')->send(new ContactMail($mailData));

        return back();

    }
}

