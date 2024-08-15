<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $attributes = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name'  => ['required', 'string', 'max:255'],
            'email'      => ['required', 'email', 'max:255', 'unique:users,email'],
            'password'   => ['required', 'string', Password::min(6), 'confirmed']
        ]);

        // Ensure is_admin is explicitly set to false
        $attributes['is_admin'] = false;

        // Create a new user with the provided attributes
        $user = User::create($attributes);

        // Log the user in automatically after registration
        Auth::login($user);

        // Redirect to the homepage or wherever you want to send the user
        return redirect('/')->with('success', 'Your account has been created!');
    }
}



