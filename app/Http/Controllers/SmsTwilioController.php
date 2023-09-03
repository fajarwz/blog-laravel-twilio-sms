<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SmsTwilioController extends Controller
{
    public function sendSms()
    {
        $receiverNumber = '+6285926095161';
        $message = 'hi testing';
        $sid = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $fromNumber = env('TWILIO_FROM');
  
        try {
            $client = new Client($sid, $token);
            $client->messages->create($receiverNumber, [
                'from' => $fromNumber, 
                'body' => $message
            ]);

            return 'SMS Sent Successfully.';
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
}
