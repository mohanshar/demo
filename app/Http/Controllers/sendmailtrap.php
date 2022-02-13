<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\testmail;
use Illuminate\Support\Facades\Mail;

class sendmailtrap extends Controller
{
    public function sendmail() {
        Mail::to('example@gmail.com')->send(new testmail);
    }  
}
