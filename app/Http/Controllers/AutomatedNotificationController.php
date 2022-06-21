<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Time;
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

    public function store(Request $request, \App\Models\AutomatedNotification $notification)
    {
        // $user = User::all()->where($request->userId, 'id');
        DB::update('update users set time = ' . $request->time . ' where id = ?', $request->userId);

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
            $notification->save();
        } catch (Exception $e) {
            return redirect('/addNotification');
        }
        
        // foreach ($request->time as $number => $thisTime) {
            
        //     $time->notificationId = \App\Models\AutomatedNotification::all()->where('userId', $request->userId)->first()->id;
        //     $time->userId = $request->userId;

        //     try{
        //         $time->save();
        //     } catch (Exception $e) {
        //         return pech;
        //     }
        // }        
    }
}
