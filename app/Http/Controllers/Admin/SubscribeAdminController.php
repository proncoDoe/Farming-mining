<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribe;

class SubscribeAdminController extends Controller
{
    public function sub(){



        $subscribes = Subscribe::orderBy('id', 'DESC')->get();

        return view('main.admin.subscribes', [

            'subscribes' => $subscribes

        ]);

    }
}
