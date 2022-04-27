<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

use App\Models\Member;

class MainController extends Controller
{


    public function getData(){

        // $response =   Http::get("https://api.nomics.com/v1/currencies/ticker?key=m_ab5112c1aa9e85bb06f1aba25322bf950f91f334&per-page=20&page=1");

        $response =   Http::get("https://api.nomics.com/v1/currencies/ticker?key=30ba8f84cf23acdc5bf0562e0bb90cd5d2a87ae5&per-page=20&page=1");

        $members = Member::orderBy('id', 'DESC')->take(1)->get();

            return view('index',[
                'response' => $response->json(),

                'members' => $members
            ]);


        }


        public function about(){

            return view('about');


        }


        public function pricing(){

            return view('price');


        }

        public function faq(){

            return view('faq');


        }


        // https://api.nomics.com/v1/currencies/ticker?key=m_ab5112c1aa9e85bb06f1aba25322bf950f91f334&ids=BTC,ETH,XRP&interval=1d,30d&convert=USD&per-page=100&page=1

}
