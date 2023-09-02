<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SmsTwilioController extends Controller
{
    public function sendSms()
    {
        $receiverNumber = '+6281944168570';
        // $receiverNumber = env('TWILIO_FROM');
        $message = 'yes testing';
  
        try {
            $sid = env('TWILIO_SID');
            $token = env('TWILIO_TOKEN');
            $client = new Client($sid, $token);
            $twilioNumber = env('TWILIO_FROM');
            $client->messages->create($receiverNumber, [
                'from' => $twilioNumber, 
                'body' => $message
            ]);

            return 'SMS Sent Successfully.';
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }

    public function addPhoneNumber()
    {
        $receiverNumber = '+6281944168570';
  
        try {
            $sid = env('TWILIO_SID');
            $token = env('TWILIO_TOKEN');
            $client = new Client($sid, $token);
            $validationRequest = $client->validationRequests
                ->create($receiverNumber, [
                    'friendlyName' => 'Number 2',
                ]);

            return 'Added Successfully: ' . $validationRequest->friendlyName;
        } catch (Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
}
