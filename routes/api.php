<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WebNotificationController;
use App\Http\Controllers\UserController;

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

Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);

Route::post('/scoreboard', [App\Http\Controllers\ScoreboardController::class, 'scoreboard']);

Route::post('/oefening', [App\Http\Controllers\ExerciseController::class, 'exercise']);
Route::post('/oefeningAf', [App\Http\Controllers\ExerciseController::class, 'exerciseFinished']);


Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout']);
});

// Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('profiel', [App\Http\Controllers\AuthController::class, 'profile']);
// });

// Route::post('/getUser', [App\Http\Controllers\AuthController::class, return $request->user()]);

Route::post('/setnotifications', [\App\Http\Controllers\AutomatedNotificationController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
