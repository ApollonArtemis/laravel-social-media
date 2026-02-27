<?php

use App\Models\Post;    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;  
use App\Http\Controllers\PostController;      

Route::get('/', function () {
    // $posts = Post::all(); - Show all posts from all users
    $posts = Post::where('user_id', auth()->id())->get();
    return view('homepage', ['posts' => $posts]);
});

//Registration route
Route::post('/register', [UserController::class, 'register']);

//Logout route
Route::post('/logout', [UserController::class, 'logout']);

//Login route
Route::post('/login', [UserController::class,'login']);

//Create post route
Route::post('/create-post', [PostController::class,'createPost']);