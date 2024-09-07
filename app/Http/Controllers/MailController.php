<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    function sendMail()
    {
        // return "email send";
        $to = "kk01@mailinator.com";
        $msg = "dummy mail by mr. kumar - coding";
        $subject = "Mr. Kumar - Coding";
        Mail::to($to)->send(new WelcomeEmail($msg, $subject));
    }
}
