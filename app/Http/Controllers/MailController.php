<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    function sendEmail(Request $request)
    {
        $to = $request->to;
        $msg = $request->message;
        $subject = $request->subject;
        Mail::to($to)->send(new WelcomeEmail($msg, $subject));
        return "Email Send";
    }
}
