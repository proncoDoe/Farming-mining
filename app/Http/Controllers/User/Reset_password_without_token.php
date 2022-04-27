<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Mail;
use App\Notifications\ResetPasswordNotification;

use App\Mail\ForgetPasswordMail;

use Validator;

class Reset_password_without_token extends Controller
{
    // public function reset(){


    //     return view('main.user.password.email');
    // }



public function update(Request $request){

    $request->validate([
        'email' => 'required|email|exists:users'
    ]);

    $user = User::where(['email' => $request->email])->first();

    if(!$user){

        return redirect()->back()->with('error','User not provided');

    }else{


        $reset_code = Str::random(200);
        PasswordReset::create([
            'user_id' => $user->id,
            'reset_code' => $reset_code,
          //   'created_at' => Carbon::now()
          ]);


              Mail::to($user->email)->send(new ForgetPasswordMail($user->username,$reset_code));

               return back()->with('info', 'We have e-mailed your password reset link!');

    }

    }


     public function showResetPasswordForm($reset_code)
     {

        $password_reset_data = PasswordReset::where('reset_code', $reset_code)->first();

        if(!$password_reset_data || Carbon::now()->subMinutes(10) < $password_reset_data->created_at){

            return view('main.user.password.reset', compact('reset_code'));


        }else{


            return redirect()->route('user.passwordemail')->with('error', 'Invalid password reset link or link expired');

        }


     }


     public function postResetPassword($reset_code, Request $request){

        $password_reset_data = PasswordReset::where('reset_code', $reset_code)->first();


        if(!$password_reset_data || Carbon::now()->subMinutes(50) < $password_reset_data->created_at){


      $request->validate([
             'email' => 'required|email',
             'password' => 'required|min:6|max:100',
             'confirm_password' => 'required|same:password'
         ]);


         $user = User::find($password_reset_data->user_id);

            if($user->email != $request->email){

                return redirect()->back()->with('error', 'Enter correct email address.');

            }else{

                $password_reset_data->delete();

                $user->update([
                  'password' => Hash::make($request->password)

                ]);
                return redirect()->route('user.login')->with('info', 'Password reset successful');

            }


        }else{


            return redirect()->route('user.passwordemail')->with('error', 'Invalid password reset link or link expired');

        }


     }


}