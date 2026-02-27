<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;    

Route::get('/', function () {
    return view('homepage');
});


Route::post('/register', [UserController::class, 'register']);