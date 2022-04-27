<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CashController extends Controller
{
    public function cash(){

        $users = auth()->user();
        $data['users'] = $users;
        return view('main.user.cashout');

    }




    public function update(Request $request)
{

    $request->validate([
        'chose_amount' => 'required|numeric|min:150',
        'selected_currency' => 'required',
    ], [

        'chose_amount.required' => 'amount required',

        'selected_currency.required' => 'currency required',

    ]);

    $users = auth()->user();

    $users->update([

        'chose_amount' =>$request->chose_amount,
        'selected_currency' =>$request->selected_currency,

    ]);

     return redirect()->back()->with('success', 'Transition completed successfully');

}


}