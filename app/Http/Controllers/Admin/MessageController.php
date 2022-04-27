<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Contact;

class MessageController extends Controller
{
    public function message(){

        $messages = Contact::orderBy('id', 'DESC')->get();

        return view('main.admin.message', [

            'messages' => $messages

        ]);

    }
}