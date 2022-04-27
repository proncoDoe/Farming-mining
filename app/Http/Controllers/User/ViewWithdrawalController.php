<?php

namespace App\Http\Controllers\User;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewWithdrawalController extends Controller
{
    public function index(){

        return view('main.user.view_withdrawal');
    }

}