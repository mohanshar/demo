<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\sendsms;
use Illuminate\Support\Facades\Mail;

class smsController extends Controller
{
    public function sms() {
        Mail::to('example@example.com')->send(new sendsms);
    }
}
