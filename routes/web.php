<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

//authorization/login/signup/logout
route::prefix('/validate')->name('validation.')->group(function(){

    route::get('signUp', function(){
        return view('auth.sign_up_form');
    })->name('signup.form');

    route::get('logIn', function(){
        return view('auth.log_in_form');
    })->name('login.form');
});