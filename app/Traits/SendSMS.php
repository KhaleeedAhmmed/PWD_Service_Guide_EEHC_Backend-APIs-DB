<?php

namespace App\Traits;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\App;

trait SendSMS
{
    public function sendSMS($message, $mobile)
    {
        $result = array();
        if (App::environment('local')) {
            $result["sms"] = true;
            $result["smsapi"] = true;
        } else {
            $guzzelClient = new Client();
            $response = $guzzelClient->request('GET', '', [
                'query' => [
                    'username' => '',
                    'password' =>  '',
                    'customerId' =>  0,
                    'senderText' => env('APP_NAME'),
                    'messageBody' => $message,
                    'recipientNumbers' => '971' . $mobile,
                    'defdate' => '',
                    'isBlink' => 'false',
                    'isFlash' => 'true',
                ],
                ['connect_timeout' => 30]
            ]);
            if ($response->getStatusCode() === 200) {
                $data =  (string) $response->getBody();
                $xml = simplexml_load_string($data);
                $json = json_encode($xml);
                $data = json_decode($json, true);
                $sms = filter_var($data['Result'], FILTER_VALIDATE_BOOLEAN);
                $smsAPI = true;
            } else {
                $sms = false;
                $smsAPI = false;
            }
            $result["sms"] = $sms;
            $result["smsapi"] = $smsAPI;
        }
        return $result;
    }
}
