<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsTwilioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('sms/send', [SmsTwilioController::class, 'sendSms']);
Route::get('phone-numbers/create', [SmsTwilioController::class, 'addPhoneNumber']);