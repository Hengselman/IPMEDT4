<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Exercise;
use App\Models\AutomatedNotification;

class ExerciseController extends Controller
{
    public function exercise (Request $request) {
        $user = User::where('name', $request->name)->first();

        if (AutomatedNotification::where('userId', $user->id)->first() !== null) {
            $exercise = Exercise::where('intensity', 2)->get()->random();
            return response()->json([
                'status' => 200,
                'userInfo' => $user,
                'exercises' => $exercise,
            ]);
        } else if (AutomatedNotification::where('userId', $user->id)->first() === null) {
            $exercise = Exercise::get()->random();
            return response()->json([
                'status' => 200,
                'userInfo' => $user,
                'exercises' => $exercise,
            ]);
        } else {
            return response()->json([
                'status' => 401,
            ]);
        }

    }

    public function exerciseFinished (Request $request) {
        $user = User::where('name', $request->name)->first();
        $user->score = $user->score + $request->exerciseCalories;
        $user->save();
        return response()->json([
            'status' => 200,
        ]);
    }
}
