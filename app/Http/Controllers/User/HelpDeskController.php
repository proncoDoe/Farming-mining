<?php

namespace App\Http\Controllers\User;
use App\Models\DeskHelp;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HelpDeskController extends Controller
{
    public function index(){

        return view('main.user.helpdesk');

        }

        public function store(Request $request){

            $this->validate($request, [

             'name' => 'required',
             'email' => 'required',
             'title' => 'required',
             'content' => 'required'
            ]);

            $request->user()->helpdesk()->create($request->only('name','email','title','content'));

            Mail::send('main.user.messagehelpdesk',  $request->toArray(),
          function ($message)  {
                $message->to('proncodoe@gmail.com','Farm mining')->subject('Help desk');

            });

            return redirect()->back();

        }
}
