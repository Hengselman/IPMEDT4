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
}
