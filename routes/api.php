<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/scoreboard', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('/register', [\App\Http\Controllers\UserController::class,'registerPage']);

Route::get('/exercise', [\App\Http\Controllers\AutomatedNotificationController::class, 'show']);
Route::get('/finishedexercise/{exerciseId}', [\App\Http\Controllers\UserController::class, 'addCalories']);
