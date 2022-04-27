<?php

namespace App\Http\Controllers;

use App\Mail\visitorContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(){

        return view('contact');

    }

    public function store(Request $request){

        $this->validate($request, [

         'name' => 'required',
         'email' => 'required',
         'message' => 'required'
        ]);

       $data = [
            'name'=> $request->name,
            'email'=> $request->email,
            'message'=> $request->message

         ];


         $contact = new Contact();

      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->message = $request->message;

      $save = $contact->save();


        Mail::to('proncodoe@gmail.com')->send(new visitorContact($data));



        if( $save ){
            return redirect()->back()->with('info', 'We will get back to you soon');
        }else{
            return redirect()->back();
        }

    }


}