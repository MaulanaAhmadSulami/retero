<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function register(Request $request){
        $validateData = $request->validate([
            'username' => 'required|string|max:255'
        ]);
    }
}
