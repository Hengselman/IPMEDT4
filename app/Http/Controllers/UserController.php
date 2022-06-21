<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function profile () {

        if (Auth::check()) {
            $user = Auth::User();
            return $user;
        } else {
            // return redirect("");
        }
    }

    public function index()
    {
        return User::all();;
    }

    public function addCalories($exerciseId)
    {
        $exercise = Exercise::find($exerciseId);
        $user = User::find(1);
        

        $user->score = $user->score + $exercise->calories;

        try{
            $user->save();
        } catch (Exception $e) {
            return redirect('/addNotification');
        }
    }
}
