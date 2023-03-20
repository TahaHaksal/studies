<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __construct(){
        //
    }

    public function sendEmail(){
        $deets = [
            'title' => 'Mail from Laravel proj',
            'body' => 'This is for testing mail using gmail.'
        ];
        Mail::to("m.haksal@gmail.com")->send(new TestMail($deets));
        return "Check your mail";
    }

    public function __destruct(){
        //
    }
}
