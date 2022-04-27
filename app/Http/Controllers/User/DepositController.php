<?php

namespace App\Http\Controllers\User;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class DepositController extends Controller
{
    public function deposits(){

        $users = auth()->user();
        $data['users'] = $users;
        return view('main.user.deposit');

}


public function update(Request $request)
{

    $request->validate([
        'deposit' => 'required',
    ], [

        'deposit.required' => 'filed required',

    ]);


    $users = auth()->user();

    $users->update([

        'deposit' =>$request->deposit,

    ]);

    return redirect()->route('user.payment');



}

}
