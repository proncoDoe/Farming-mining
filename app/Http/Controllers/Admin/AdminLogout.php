<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminLogout extends Controller
{

    function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}