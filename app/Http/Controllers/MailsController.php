<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Mail\EmeilSent;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class MailsController extends Controller
{
//    use Queueable, SerializesModels;

    public function build()
    {
//        return $this->view('email.emeil_sent');
    }

    public function send_mail(Request $request)
    {
        $first_name = $request->input('first_name') ?? "";
        $last_name = $request->input('last_name') ?? "";
        $email = $request->input('email') ?? "";
        $number = $request->input('number') ?? "";
        $theme_text = $request->input('theme') ?? "";
        $text = $request->input('text') ?? "";
        $body = [
            "Ім’я" =>$first_name,
            "Прізвище" => $last_name,
            "Пошта" => $email,
            "Номер" => $number,
            "Тема" => $theme_text,
            "Повідомлення" => $text,

        ];

        $title = 'Нова заявка від '. $email;


        Mail::to('an.paradise.uz@gmail.com')->send(new WelcomeMail(
            $title,
            $body,

        ));

        return redirect()->back();

    }
    public function send_order(Request $request)
    {
        $first_name = $request->input('first_name') ?? "";
        $last_name = $request->input('last_name') ?? "";
        $email = $request->input('email') ?? "";
        $number = $request->input('number') ?? "";
        $type = $request->input('type');
        $body = [
            "Ім’я" =>$first_name,
            "Прізвище" => $last_name,
            "Пошта" => $email,
            "Номер" => $number,
        ];

        $title = 'Нова заявка від '. $email;


        Mail::to('an.paradise.uz@gmail.com')->send(new WelcomeMail(
            $title,
            $body,

        ));

        return redirect()->back();

    }

}
