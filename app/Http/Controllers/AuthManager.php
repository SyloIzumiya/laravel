<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    // Display login form
    public function login()
    {
        if (Auth::check()) {
            return redirect(route('home')); // Redirect to home if already logged in
        }
        return view('login'); // Return login view
    }

    // Display registration form
    public function registration()
    {
        if (Auth::check()) {
            return redirect(route('home')); // Redirect to home if already logged in
        }
        return view('registration'); // Return registration view
    }

    // Process login form submission
    public function loginPost(Request $request)
    {
        // Validate login data
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        // Attempt to authenticate user
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home')); // Redirect to intended page after successful login
        }

        return redirect(route('login'))->with("error", "Login details are not valid"); // Redirect back with error message
    }

    // Process registration form submission
    public function registrationPost(Request $request)
    {
        // Validate registration data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        // Create new user
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);

        // Check if user creation was successful
        if (!$user) {
            
             // Redirect back with error message
            return redirect(route('registration'))->with("error", "Registration failed. Please try again.");
            
        }   

         // Redirect to login page with success message
        return redirect(route('login'))->with("success", "Registered successfully. Please log in to access the app.");
        
    }

    // Logout user
    public function logout()
    {
        Session::flush(); // Flush session data
        Auth::logout(); // Logout user
        return redirect(route('login')); // Redirect to login page
    }
}
