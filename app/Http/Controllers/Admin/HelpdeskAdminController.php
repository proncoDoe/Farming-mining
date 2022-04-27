<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DeskHelp;

class HelpdeskAdminController extends Controller
{
    public function desk(){

        $helpdesks = DeskHelp::orderBy('id', 'DESC')->get();

        return view('main.admin.helpdesk', [

            'helpdesks' => $helpdesks

        ]);

    }
}