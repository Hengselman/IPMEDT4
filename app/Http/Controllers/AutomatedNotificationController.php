<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Day;
use App\Models\User;
use App\Models\Exercise;
use App\Models\AutomatedNotification;

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
        // dd($request->input("Maandag"));

        $notification->userId = 1;
        $notification->exercise_amount = $request->input('amount');
        $notification->intensity = $request->input('intensity');
        $notification->monday = $request->input('Maandag');
        $notification->tuesday = $request->input('Dinsdag');
        $notification->wednesday = $request->input('Woensdag');
        $notification->thursday = $request->input('Donderdag');
        $notification->friday = $request->input('Vrijdag');
        $notification->saturday = $request->input('Zaterdag');
        $notification->sunday = $request->input('Zondag');

        try{
            $notification->save();
        } catch (Exception $e) {
            return redirect('/addNotification');
        }
        
    }
}
