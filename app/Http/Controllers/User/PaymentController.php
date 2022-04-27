<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
class PaymentController extends Controller
{
    public function payments(){

        $users = auth()->user();
        $data['users'] = $users;
        return view('main.user.payment');

}

public function update(Request $request)
{

    $request->validate([
        'amount' => 'required|numeric|min:100'
    ], [

        'amount.required' => 'Amount required',

    ]);


    $users = auth()->user();

    $users->update([

        'amount' =>$request->amount,

    ]);


    if( $users ){
        return redirect()->to('https://commerce.coinbase.com/checkout/726603d2-d655-4f87-b41f-0077b147ec89');
    }else{
        return redirect()->back()->with('error','Something went wrong, please try again.');
    }




}



}
