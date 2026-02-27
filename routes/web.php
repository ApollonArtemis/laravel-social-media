<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;  
use App\Http\Controllers\PostController;      

Route::get('/', function () {
    return view('homepage');
});

//Registration route
Route::post('/register', [UserController::class, 'register']);

//Logout route
Route::post('/logout', [UserController::class, 'logout']);

//Login route
Route::post('/login', [UserController::class,'login']);

//Create post route
Route::post('/create-post', [PostController::class,'createPost']);