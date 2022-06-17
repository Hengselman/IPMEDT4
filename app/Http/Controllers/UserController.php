<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function profile () {
        if (Auth::user()) {
            $user = Auth::user();
            return $user;
        } else {
            // return redirect("");
        }
    }
}
