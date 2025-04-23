<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RegisterAccountController;

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

Route::get('/register/step1', [RegisterAccountController::class, 'showStep1'])->name('register.step1');
Route::post('/register/step1', [RegisterAccountController::class, 'postStep1'])->name('register.step1.post');

Route::get('/register/step2', [RegisterAccountController::class, 'showStep2'])->name('register.step2');
Route::post('/register/step2', [RegisterAccountController::class, 'postStep2'])->name('register.step2.post');


Route::get('/login',[ContactController::class,'login']);