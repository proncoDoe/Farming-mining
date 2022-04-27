<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use WisdomDiala\Countrypkg\Models\Country;
use WisdomDiala\Countrypkg\Models\State;



class UserController extends Controller
{


    public function register(Request $request){


        if ($request->has('ref')) {
            session(['referral' => $request->query('ref')]);
        }

        // $countries = CountryState::getCountries();
        $countries = Country::all();

        $states = State::all();
        return view('main.user.register',compact('countries', 'states'));
    }


    function store(Request $request){
        //Validate Inputs
        $request->validate([
            'fName' => 'required|max:255',
            'lName' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|max:255',
            'Reffered_by_name' => 'nullable',
            'phone' => 'required',
            'currency' => 'required',
            'wallet_address' => 'required',
            'select_question1' => 'required',
            'answer1' => 'required',
            'select_question2' => 'required',
            'answer2' => 'required',
            'country' => 'required',
            'state' => 'required',
            'profile_image' => 'mimes:jpg,png,jpeg,gif,svg nullable',
            'deposit' => 'nullable',
            'amount' => 'nullable',
            'interest' => 'nullable',
            'Referral_earnings' => 'nullable',
            'password' => 'required|confirmed',
            'add_wallet_address' => 'nullable',
            'chose_amount' => 'nullable',
            'selected_currency' => 'nullable',
            //  google recaptcha
         'g-recaptcha-response' => 'required|captcha',


        ],[
            'required' => 'Please verify that you are not a robot.',
            'captcha' => 'Captcha error! try again later or contact site admin.',
        ]);

        $referral = User::whereUsername(session()->pull('referral'))->first();
        $user = new User();
        $user->fName = $request->fName;
        $user->lName = $request->lName;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->Reffered_by_name = $request->Reffered_by_name;
        $user->referral_id = $referral ? $referral->id : null;
        $user->phone = $request->phone;
        $user->currency = $request->currency;
        $user->wallet_address = $request->wallet_address;
        $user->select_question1 = $request->select_question1;
        $user->answer1 = $request->answer1;
        $user->select_question2 = $request->select_question2;
        $user->answer2 = $request->answer2;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->profile_image = $request->profile_image;
        $user->deposit = $request->deposit;
        $user->amount = $request->amount;
        $user->interest = $request->interest;
        $user->Referral_earnings = $request->Referral_earnings;
        $user->password = Hash::make($request->password);
        $save = $user->save();

        $save.= auth()->attempt($request->only('email', 'password'));

        if( $save ){
            return redirect()->route('user.home')->with('success', 'Welcome to Farm minning');
        }else{
            return redirect()->back()->with('error','Something went wrong, failed to register');
        }
  }

  function check(Request $request){
      //Validate inputs
      $request->validate([
         'email'=>'required|email|exists:users,email',
         'password'=>'required|min:6|max:30',
        //  google recaptcha
         'g-recaptcha-response' => 'required|captcha',

      ],[
          'email.exists'=>'This email those not exists',
          'required' => 'Please verify that you are not a robot.',
          'captcha' => 'Captcha error! try again later or contact site admin.',
      ]);

      $creds = $request->only('email','password');
      if( Auth::guard('web')->attempt($creds,  $request->remember) ){
          return redirect()->route('user.home')->with('success', 'Sign in successful');
      }else{

        return redirect()->back()->with('error', 'Double check your credentials and try again');

      }
  }

  function logout(){
      Auth::guard('web')->logout();
      return redirect('/');
  }
}