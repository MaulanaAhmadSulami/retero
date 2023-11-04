<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    //

    public function register(Request $request)
    { 
        $data = $request->validate([
            'name' => 'required|min:4|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:255',
        ]);

        $data['password'] = Hash::make($data['password']);

        User::factory()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $data['password'],
        ]);
        return redirect()->route('login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->filled('remember');

        if (auth()->attempt($request->only('email', 'password'), $remember)) {
            $request->session()->regenerate();
            return redirect('/');
        } else {
            return back()->withErrors([
                'email' => 'Email was wrong or doesn\'t exist in our records!'
            ]);
        }
    }


    public function logout(){
        auth()->logout();
        return redirect()->route('homepage.dashboard');
    }

   
}
