<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentCallbackController;

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

Route::get('/',[OrderController::class, 'index'])->name('index'); 
Route::get('/{id}',[OrderController::class, 'show'])->name('show'); 
Route::post('payments/midtrans-notification', [PaymentCallbackController::class, 'receive']);
