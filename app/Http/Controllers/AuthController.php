<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AutomatedNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register (Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'email' => 'required|email|max:191|unique:users,email',
            'age' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required_with:password|same:password',
        ],[
            'name.required' => 'Dit veld is verplicht.',
            'email.required' => 'Dit veld is verplicht.',
            'age.required' => 'Dit veld is verplicht',
            'password.required' => 'Dit veld is verplicht.',
            'password_confirmation.same' => 'De wachtwoorden komen niet overeen.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ]);
        } else {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'age' => $request->age,
                'password' => Hash::make($request->password),
            ]);

            $token = $user->createToken($user->email.'_Token')->plainTextToken;

            return response()->json([
                'status' => 200,
                'username' => $user->name,
                'token' => $token,
                'message' => 'Registratie succes',
            ]);
        }
    }

    public function login (Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:191',
            'password' => 'required', 
        ],[
            'email.required' => 'Dit veld is verplicht.',
            'password.required' => 'Dit veld is verplicht.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'validation_errors' => $validator->messages(),
            ]);
        } else {
            $user = User::where('email', $request->email)->first();

            if(! $user || ! Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status' => 401,
                    'message' => 'Ongeldige inloggegevens',
                ]);
            } else {
                $token = $user->createToken($user->email.'_Token')->plainTextToken;

                return response()->json([
                    'status' => 200,
                    'username' => $user->name,
                    'token' => $token,
                    'message' => 'Succesvol ingelogd',
                ]);
            }
        }
    }

    public function logout (Request $request) {
        auth()->user()->tokens()->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Succesvol uitgelogd',
        ]);
    }

    public function getId(Request $request) 
    {
        $user = User::where('name', $request->name)->first();
        return response()->json([
            'status' => 200,
            'id' => $user->id
        ]);
    }

    public function profile (Request $request) {
        $user = User::where('name', $request->name)->first();

        if (AutomatedNotification::where('userId', $user->id)->first() !== null) {
            $notifications = AutomatedNotification::where('userId', $user->id)->first();
            $splitTimes = explode("/", $notifications->time);
            
            if ($user->device_key != null) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Succesvol uitgelogd',
                    'id' => $user->id,
                    'name' => $user->name,
                    'age' => $user->age,
                    'score' => $user->score,
                    'notifications' => $notifications,
                    'times' => $splitTimes,
                    'deviceKey' => 200,
                ]);
            } else {
                return response()->json([
                    'status' => 200,
                    'message' => 'Succesvol uitgelogd',
                    'id' => $user->id,
                    'name' => $user->name,
                    'age' => $user->age,
                    'score' => $user->score,
                    'notifications' => $notifications,
                    'times' => $splitTimes,
                    'deviceKey' => 401,
                ]);
            }

        } else {
            if ($user->device_key != null) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Succesvol uitgelogd',
                    'id' => $user->id,
                    'name' => $user->name,
                    'age' => $user->age,
                    'score' => $user->score,
                    'notifications' => null,
                    'times' => null,
                    'deviceKey' => 200,
                ]);
            } else {
                return response()->json([
                    'status' => 200,
                    'message' => 'Succesvol uitgelogd',
                    'id' => $user->id,
                    'name' => $user->name,
                    'age' => $user->age,
                    'score' => $user->score,
                    'notifications' => null,
                    'times' => null,
                    'deviceKey' => 401,
                ]);
            }

        }
    }
}
