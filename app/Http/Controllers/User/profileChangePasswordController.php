<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class profileChangePasswordController extends Controller
{
    public function changePassword(){

        $user = Auth::user();
        $data['user'] = $user;
        return view('main.user.profile_change_password',$data);
}



public function updatePassword(Request $request){


    $request->validate([

        'old_password' => 'required|string|min:6',
        'new_password' => 'required|string|min:6',
        'confirm_password' => 'required|same:new_password',

    ]);


    $current_user = auth()->user();

    if(Hash::check($request->old_password, $current_user->password)){

        $current_user->update([

            'password' => Hash::make($request->new_password)

        ]);

        return redirect()->back()->with('success', 'Password updated successful');

    }else{

        return redirect()->back()->with('error', 'Old password does not match existing password');
    }

}

}