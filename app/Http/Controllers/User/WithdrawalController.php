<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class WithdrawalController extends Controller
{


    public function withdraw(){

        $users = auth()->user();
        $data['users'] = $users;

        return view('main.user.withdraw_key');

    }


    public function update(Request $request)
    {

        $request->validate([
            'add_wallet_address' => 'required',
        ], [

            'add_wallet_address.required' => 'wallet address required',

        ]);


        $users = auth()->user();

        $users->update([

            'add_wallet_address' => $request->add_wallet_address,

        ]);

        return redirect()->route('user.cash');

    }


}