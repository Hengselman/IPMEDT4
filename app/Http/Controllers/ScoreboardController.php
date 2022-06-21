<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ScoreboardController extends Controller
{
    public function scoreboard (Request $request) {

        $user = User::all();
        $user = User::orderBy('score', 'desc')->get();
        return $user;

    }
}
