<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    public function send(Request $request)
    {


        Mail::to('b05b3f24ec-12c3ac@inbox.mailtrap.io')->send(new \App\Mail\Contact($request));
        return redirect('/')->with('message', 'Votre message a bien été envoyé.');
    }
}
