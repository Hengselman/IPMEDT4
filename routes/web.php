<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [\App\Http\Controllers\UserController::class,'registerPage']);
Route::post('/register', [\App\Http\Controllers\UserController::class,'register']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('addNotification', [\App\Http\Controllers\AutomatedNotificationController::class, 'add']);
Route::post('notification', [\App\Http\Controllers\AutomatedNotificationController::class, 'store']);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/notification', [\App\Http\Controllers\NotificationController::class,'notification']);
Route::patch('/fcm-token', [HomeController::class, 'updateToken'])->name('fcmToken');
Route::post('/send-notification',[HomeController::class,'notification'])->name('notification');

