<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function register(Request $request) {
        $incomingFields = $request->validate([
            'fullname' => ['required', 'max:30'],
            'email' => ['required', 'email'],
            'password' => ['required', 'max:16', 'min:8']
        ]);
        return 'Hello from our controller';
    }
}
