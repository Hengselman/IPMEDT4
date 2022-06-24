<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebNotificationController;
use App\Http\Controllers\UserController;

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

Route::get('/test', [App\Http\Controllers\WebNotificationController::class, 'testShow']);
Route::get('/checkForExercise', [App\Http\Controllers\WebNotificationController::class, 'checkForExercise']);

Route::get('/profiel', [App\Http\Controllers\UserController::class, 'profile']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/push-notificaiton', [WebNotificationController::class, 'index'])->name('push-notificaiton');
Route::post('/store-token', [WebNotificationController::class, 'storeToken'])->name('store.token');
// Route::post('/send-web-notification', [WebNotificationController::class, 'checkForExercise'])->name('send.web-notification');
Route::post('/send-web-notification', [WebNotificationController::class, 'sendWebNotification'])->name('send.web-notification');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
