<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index(){

        return view('main.admin.member');

        }


        function store(Request $request){
            //Validate Inputs
            $request->validate([
                'number' => 'required',

            ]);


            Member::create([
                'number'=> $request->number,
            ]);


            return redirect()->back()->with('info','Member update successful!');
      }




}
