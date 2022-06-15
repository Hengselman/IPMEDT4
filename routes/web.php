<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebNotificationController;
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

Auth::routes();
Route::get('/push-notificaiton', [WebNotificationController::class, 'index'])->name('push-notificaiton');
Route::post('/store-token', [WebNotificationController::class, 'storeToken'])->name('store.token');
Route::post('/send-web-notification', [WebNotificationController::class, 'sendWebNotification'])->name('send.web-notification');

Route::get('/registernew', [\App\Http\Controllers\UserController::class,'registerPage']);
Route::post('/registernew', [\App\Http\Controllers\UserController::class,'register']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('addNotification', [\App\Http\Controllers\AutomatedNotificationController::class, 'add']);
Route::post('notification', [\App\Http\Controllers\AutomatedNotificationController::class, 'store']);
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/notification', [\App\Http\Controllers\NotificationController::class,'notification']);
Route::patch('/fcm-token', [\App\Http\Controllers\HomeController::class, 'updateToken'])->name('fcmToken');
Route::post('/send-notification',[\App\Http\Controllers\HomeController::class,'notification'])->name('notification');

