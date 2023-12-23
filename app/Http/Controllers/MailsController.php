<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Mail\EmeilSent;
use Illuminate\Support\Facades\Mail;

class MailsController extends Controller
{
//    use Queueable, SerializesModels;

    public function build()
    {
//        return $this->view('email.emeil_sent');
    }
    public function send_mail(){
        Mail::to('take.olesja@gmail.com')->send(new EmeilSent());
    }

}
