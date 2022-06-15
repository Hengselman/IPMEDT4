<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function registerPage() {
        return view('register.register',[
            'users' => \App\Models\User::all(),
        ]);
    }

    public function register(Request $request, \App\Models\User $user) {
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->age = $request->input('age');

        if ($user->save()) {
            return redirect('register');
        }
        return redirect('register');

    }

    public function index()
    {
        return User::all();;
    }
}
