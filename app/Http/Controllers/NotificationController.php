<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Notification;
use App\Notifications\SendPushNotification;
use Auth;
use User;

class NotificationController extends Controller
{
    public function notificationPage() {
        return view('default');
    }
    public function notification() {
        auth()->user()->notify(new SendPushNotification($title,$message,$fcmTokens));
    }
}
