<?php

namespace App\Http\Controllers;
use App\Models\Subscribe;
use Illuminate\Http\Request;
 use Newsletter;

class SubscribeController extends Controller
{


    public function index(){


        return view('layouts.footer');

    }


    function store(Request $request){
        //Validate Inputs
        $request->validate([
            'email' => 'required|unique:subscribes|max:255',

        ]);

        try {
            if(!Newsletter::isSubscribed($request->email)){

                Newsletter::subscribe($request->email);

                Subscribe::create([
                    'email'=> $request->email,
                 ]);

                return redirect()->back()->with('success', 'Subscription is successful');
            }else{

                return redirect()->back()->with('error','Email already subscribed');

            }

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }


    }
}