<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ViewDepositController extends Controller
{



    public function index(){


        $view_deposits = User::offset(0)->limit(1)->get();
        // $users = auth()->user();
        // $data['users'] = $users;

        return view('main.user.view_deposit', [

            'view_deposits' => $view_deposits,

        ]);
    }

    // public function index(){


    //     return View('main.user.view_deposit');
    // }
}
