<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    //
    // public function register(Request $request){
    //     $validateData = $request->validate([
    //         'username' => 'required|string|max:255'
    //     ]);
    // }
    

    public function edit()
    {
        return view('homepage.profileEdit', ['user' => Auth::user()]);
    }

    public function updateUser(Request $request)
    {

        $user = User::find(Auth::user()->id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'avatar' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user->name = $data['name'];

        $message = 'Successfully Updated Profile!';


        if ($request->filled('old_password') && $request->filled('new_password')) {
            $request->validate([
                'old_password' => 'required|string|min:8',
                'new_password' => 'required|string|min:8|different:old_password|',
                'password_confirmation' => 'required|same:new_password',
            ]);
            
            $curr_user = User::find(Auth::user()->id);

            if (Hash::check($request->old_password, $curr_user->password)) {
                $curr_user->password = Hash::make($request->new_password);
                $curr_user->save();
                $message = 'Password successfully changed!';
            } else {
                return back()->withErrors(['old_password' => 'Old password does not match']);
            }
            
        }
        
        
        //avatar handler
        if ($request->hasFile('avatar')) {
            
            if($user->avatar && Storage::exists($user->avatar)){
                Storage::delete($user->avatar);
            }

            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $path;
          
        }
        
        $user->save();
        
        return redirect()->back()->with('message', $message);
    }
    

}
