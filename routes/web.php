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
Route::get('/', [\App\Http\Controllers\FrondEnd\post\ClientPostController::class , 'home'])->name("home");
Route::get('/login', [\App\Http\Controllers\AuthController::class , 'getLoginForm'])->name("login");
Route::get('/logout', [\App\Http\Controllers\AuthController::class , 'logout'])->name("logout");
Route::get('/createPost', [\App\Http\Controllers\FrondEnd\post\ClientPostController::class , 'createPost'])->name("user.createPost");

Route::post('/postLogin', [\App\Http\Controllers\AuthController::class , 'login'])->name("postLogin");

Route::get('/post/{id}', [\App\Http\Controllers\FrondEnd\post\ClientPostController::class , 'detail'])->name("frontend.detail");

Route::post('payment/createPayment', [\App\Http\Controllers\FrondEnd\transaction\TransactionController::class , 'createPaymentUrl'])->name('createPayment');
Route::get('payment/addCredit', [\App\Http\Controllers\FrondEnd\transaction\TransactionController::class , 'AddCredit'])->name('addCredit');
Route::get('payment/return', [\App\Http\Controllers\FrondEnd\transaction\TransactionController::class , 'return'])->name('return_payment');
