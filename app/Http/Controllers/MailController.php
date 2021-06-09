<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Mail;
use App\Mail\TestMail;


class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Test Mail',
            'body' => 'test'
        ];
        
        Mail::to("tanadol.t@ztrus.com")->send(new TestMail($details)); 
        return "Email sent";
    }
}
