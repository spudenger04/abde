<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show($username, Request $request)
    {
        // Fetch the user by username using raw SQL query
        $user = DB::select("SELECT * FROM users WHERE id = ? LIMIT 1", [$username]);

        // Check if the user was found
        if (!empty($user)) {
            // User found, return the view with user data
            return view('user.show', ['user' => $user[0]]);
        } else {
            // User not found, return an error message
            return view('user.show', ['error' => 'User not found']);
        }
}
}

