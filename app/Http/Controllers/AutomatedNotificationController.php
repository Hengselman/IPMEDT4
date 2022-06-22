<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Time;
use App\models\User;
use App\Models\AutomatedNotification;
use DB;

class AutomatedNotificationController extends Controller
{
    public function show()
    {
        $user = User::find(1);
        $intensity = AutomatedNotification::all()->where('userId', $user->id)->first()->intensity;
        $exercises = Exercise::all()->where('intensity', $intensity);

        return $exercises->random();
    }

    public function add()
    {   
        return view('addNotification', [
            'days' => Day::all(),
        ]);
    }

    public function store(Request $request, \App\Models\User $user, \App\Models\AutomatedNotification $notification)
    {
     
        $notification->time = $request->time;
        $notification->userId = $request->userId;
        $notification->exercise_amount = $request->exercise_amount;
        $notification->intensity = $request->intensity;
        $notification->monday = $request->monday;
        $notification->tuesday = $request->tuesday;
        $notification->wednesday = $request->wednesday;
        $notification->thursday = $request->thursday;
        $notification->friday = $request->friday;
        $notification->saturday = $request->saturday;
        $notification->sunday = $request->sunday;

        try{
            $not = AutomatedNotification::all()->where("userId", $request->userId)->first();
            if($not != null){
                $not->update([
                    'time' => $request->time,
                    'userId' => $request->userId,
                    'exercise_amount' => $request->exercise_amount,
                    'intensity' => $request->intensity,
                    'monday' => $request->monday,
                    'tuesday' => $request->tuesday,
                    'wednesday' => $request->wednesday,
                    'thursday' => $request->thursday,
                    'friday' => $request->friday,
                    'saturday' => $request->saturday,
                    'sunday' => $request->sunday,
                ]);
            } else {
                $notification->save();
            }
        } catch (Exception $e) {
            return redirect('/addNotification');
        }
        
    }
}
