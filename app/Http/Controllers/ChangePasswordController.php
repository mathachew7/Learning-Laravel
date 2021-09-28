<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function changePassword(Request $request){
        $user = Auth::user();
        $userPassword = $user->password;
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|same:confirm_password|min:6',
            'confirm_password' => 'required',
        ]);

        if(!Hash:: check($request->current_password, $userPassword)){
            return back()->withErrors(['current_password' => 'Password does not match']);
        }
        $user -> password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('success', 'Password Changed Successfully!');
    }
}
