<?php

namespace App\Http\Controllers;
use Exception;
use Twilio\Rest\Client;
use Illuminate\Http\Request;
use Twilio\TwiML\VoiceResponse;

class makeCall extends Controller
{
public function makecall() {
    // Find your Account SID and Auth Token at twilio.com/console
// and set the environment variables. See http://twil.io/secure

try{
$sid = 'ACf8012957732fb032f39926721769a340';
$token = 'bbe167531b73051b4801a413ff7cb3bf';
$twilio_number='+18595350613';
$twilio = new Client($sid, $token);

$call = $twilio->calls
               ->create("+977 9811236178", // to
                        "$twilio_number", // from
                        [
                            "twiml" => "<Response><Say>Hi! there.</Say></Response>"
                        ]
               );


// print($call->sid);  
    // dd('done');
}catch(Exception $ex){
    dd($ex);
}
}
}
