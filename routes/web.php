<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\ProfileController;

require __DIR__.'/auth.php';

Route::get('/', function(){
    return view('welcome');
});

//users
Route::resource('users', UserController::class);

//profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
});