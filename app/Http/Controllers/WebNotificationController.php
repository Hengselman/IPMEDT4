<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AutomatedNotification;
use App\Models\PersonalAccessToken;
use Auth;
use Carbon\Carbon;

class WebNotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }

  
    public function storeToken(Request $request)
    {
        auth()->user()->update(['device_key'=>$request->token]);
        return response()->json(['Token successfully stored.']);
    }

    public function sendWebNotification($title, $body, $click_action)
    {   
        $url = 'https://fcm.googleapis.com/fcm/send';
        $FcmToken = User::whereNotNull('device_key')->pluck('device_key')->all();
          
        $serverKey = 'AAAAT-8hCPM:APA91bEMPYj32xOwixISbHDb-VU_6WBkSur8GrbJLyPZ8ywskCRiNFX8eu8YdxhOtz-mzTcBJAzhEiHEUOFQmYQu824AV0DwbG5dKQ2Mq7KeHNpJRmWNtvW0yhhOv4j85KsuzKB_aHgB';
        
        $data = [
            "registration_ids" => $FcmToken,
            "notification" => [
                "title" => $title,
                "body" => $body,
                "click_action" => $click_action,  
            ],
        ];
        $encodedData = json_encode($data);
    
        $headers = [
            'Authorization:key=' . $serverKey,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        // Disabling SSL Certificate support temporarly
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
        // Execute post
        
        $result = curl_exec($ch);
        
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }        
        // Close connection
        curl_close($ch);
        // FCM response
        // dd($result);        
    }
    public function testShow () {
        return view('test');
    }

    public function checkForExercise(){
        $time = Carbon::now();
        $currentTime = $time->hour . ":" . $time->minute;

        $personalAccessToken = PersonalAccessToken::first();
        $personalAccessTokenEmail = str_replace("_Token", "", $personalAccessToken->name);

        $user = User::where("email", $personalAccessTokenEmail)->first();
        $userId = $user->id;

        $notifications = AutomatedNotification::where("userId", $userId)->first();
        $splitTimes = explode("/", $notifications->time);

        foreach ($splitTimes as $t) {
            if ($currentTime == $t) {
                $title = "Tijd voor een oefening!";
                $body = "http://localhost:3000/";
                $click_action = "http://localhost:3000/";
                return $this->sendWebNotification($title, $body, $click_action);
            }
        };
    }
}