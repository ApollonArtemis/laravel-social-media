<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //Delete post function
    public function deletePost(Post $post)
    {
        if ((int) $post->user_id === (int) auth()->id()) {
            $post->delete();
        }
        
        return redirect('/');
    }

    //Update post function
    public function updatePost(Post $post, Request $request)
    {
        if ((int) $post->user_id !== (int) auth()->id()) {
            return redirect('/');
        }
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

        $post->update($incomingFields);
        return redirect('/');
    }

    //Edit post function
    public function editPost(Post $post)
    {
        // dd(auth()->check(), auth()->id(), $post->user_id);
        if ((int) $post->user_id !== (int) auth()->id()) {
            return redirect('/');
        }
        return view('edit-post', ['post' => $post]);

    }
    //Create post function
    public function createPost(Request $request)
    {
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id();

        Post::create($incomingFields);
        return redirect('/');
    }
}
