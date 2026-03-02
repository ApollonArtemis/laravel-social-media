<?php

use App\Models\Post;    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;  
use App\Http\Controllers\PostController;      

Route::get('/', function () {
    // $posts = Post::all(); - Show all posts from all users
    //$posts = Post::where('user_id', auth()->id())->get();
    $posts = [];
    if(auth()->check()) {
        $posts = auth()->user()->usersPosts()->latest()->get(); // Show only posts from the logged-in user
    }
    return view('homepage', ['posts' => $posts]);
});

//Registration route    
Route::post('/register', [UserController::class, 'register']);

//Logout route
Route::post('/logout', [UserController::class, 'logout']);

//Login route
Route::post('/login', [UserController::class,'login']);

//Create post route
Route::post('/create-post', [PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class, 'editPost']);
Route::put('/edit-post/{post}', [PostController::class, 'updatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);