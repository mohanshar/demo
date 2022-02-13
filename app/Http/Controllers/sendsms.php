<?php

namespace App\Http\Controllers;

use Exception;
use Twilio\Rest\Client;
use Illuminate\Http\Request;

class sendsms extends Controller
{
    public function sendsms() {
$sid    = "ACf8012957732fb032f39926721769a340";
$token  = "bbe167531b73051b4801a413ff7cb3bf";
$twilio_number='+18595350613';

try{
    $client = new Client($sid, $token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+977 9811236178',
    array(
        'from' => $twilio_number,
        'body' => 'Oe mula k garira xs! aayo message?'
    )
);
    // dd('done');
}catch(Exception $ex){
    dd($ex);
}
}
}

