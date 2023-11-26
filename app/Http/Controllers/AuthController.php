<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    //

    
    public function register(Request $request)
    { 
    

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:4|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8|max:255',
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        }

        $data = $validator->validated();
        $data['password'] = Hash::make($data['password']);

        
        $user = User::create($data);
      

        auth()->login($user);


        return response()->json([
            'success' => true,
        ]);
    }


    public function login(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8|max:255',
        ]);

        if($validator->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ]);
        }

        $remember = $request->filled('remember');

        if(Auth::attempt($validator->validated(), $remember)){
            $request->session()->regenerate();

            return response()->json([
                'success' => true,
                'isAdmin' => Auth::user()->isAdmin,
                'adminHomeUrl' => Auth::user()->isAdmin ? route('auth.adminHome') : route('homepage.dashboard'),
            ]);
        }else{
            return response()->json([
                'success' => false,
                'errors' => ['email' => ['Email or password was wrong or doesn\'t exist in our records!']],
            ]);
        }

    }


    public function logout(){
        auth()->logout();
        return redirect()->route('homepage.dashboard');
    }

   
}
