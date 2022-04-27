<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subscribe;
use App\Models\Contact;
use App\Models\DeskHelp;
use Illuminate\Support\Facades\DB;

use App\Charts\UserChart;

use App\Charts\RoundChart;



class HomeController extends Controller
{
    public function home(){

        $users = User::get();

        $counts = User::count();

        $countsSubscribers = Subscribe::count();

        $countsCounts = Contact::count();

        $countsDeskHelp = DeskHelp::count();


        $dp = User::orderBy('created_at')->pluck('id','created_at');

        $rf = User::orderBy('created_at')->pluck('Referral_earnings','created_at');

// Subscribers
        $sb = Subscribe::orderBy('created_at')->pluck('id','created_at');


        $chart = new UserChart;

        // Subscribers
        $round = new RoundChart;


        $borderColorsChart = [
            "rgba(255, 99, 132, 1.0)",
            "rgba(22,160,133, 1.0)",
            "rgba(255, 205, 86, 1.0)",
            "rgba(51,105,232, 1.0)",
            "rgba(244,67,54, 1.0)",
            "rgba(34,198,246, 1.0)",
            "rgba(153, 102, 255, 1.0)",
            "rgba(255, 159, 64, 1.0)",
            "rgba(233,30,99, 1.0)",
            "rgba(205,220,57, 1.0)"
        ];
        $fillColorsChart = [
            "rgba(0, 0, 0, .4)",
            "rgba(0, 0, 0, .4)",
            "rgba(0, 0, 0, .4)",
            "rgba(51,105,232, 0.2)",
            "rgba(244,67,54, 0.2)",
            "rgba(34,198,246, 0.2)",
            "rgba(153, 102, 255, 0.2)",
            "rgba(255, 159, 64, 0.2)",
            "rgba(233,30,99, 0.2)",
            "rgba(205,220,57, 0.2)"

        ];

        $chart = new UserChart;
        $chart->labels($dp->keys());
        $chart->dataset('Users', 'bar', $dp->values())
        ->color($borderColorsChart)
        ->backgroundcolor($fillColorsChart);
        $chart->dataset('Refferal', 'line', $rf->values())
        ->backgroundcolor('rgba(255,0,255, 0.4)')
           ->fill(true)
            ->linetension(0.1)
            ->dashed([5]);



// round chart
            $borderColors = [
                "rgba(255, 99, 132, 1.0)",
                "rgba(22,160,133, 1.0)",
                "rgba(255, 205, 86, 1.0)",
                "rgba(51,105,232, 1.0)",
                "rgba(244,67,54, 1.0)",
                "rgba(34,198,246, 1.0)",
                "rgba(153, 102, 255, 1.0)",
                "rgba(255, 159, 64, 1.0)",
                "rgba(233,30,99, 1.0)",
                "rgba(205,220,57, 1.0)"
            ];
            $fillColors = [
                "rgba(255, 99, 132, 0.2)",
                "rgba(22,160,133, 0.2)",
                "rgba(255, 205, 86, 0.2)",
                "rgba(51,105,232, 0.2)",
                "rgba(244,67,54, 0.2)",
                "rgba(34,198,246, 0.2)",
                "rgba(153, 102, 255, 0.2)",
                "rgba(255, 159, 64, 0.2)",
                "rgba(233,30,99, 0.2)",
                "rgba(205,220,57, 0.2)"

            ];

            $round = new RoundChart;
            $round->labels($sb->keys());
            $round->minimalist(true);
            $round->dataset('Subscribers', 'doughnut', $sb->values())
                ->color($borderColors)
                ->backgroundcolor($fillColors);

                // end round chart


        return view('main.admin.home', [

            'users' => $users,

            'chart' => $chart,

            'round' => $round,

            'counts' => $counts,

            'countsSubscribers' => $countsSubscribers,

            'countsCounts' => $countsCounts,

            'countsDeskHelp' => $countsDeskHelp

        ]);

    }


      // edit
      public function edit($id)
      {


          $users = User::find($id);

          return view('main.admin.edit',[

              'users' => $users,
          ]);
      }



      // update
      public function update(Request $request, $id)
      {

        $users = User::find($id);

        $users->fName = $request->fName;
        $users->lName = $request->lName;
        $users->username = $request->username;
        $users->email = $request->email;
        $users->Reffered_by_name = $request->Reffered_by_name;
        $users->phone = $request->phone;
        $users->currency = $request->currency;
        $users->wallet_address = $request->wallet_address;
        $users->select_question1 = $request->select_question1;
        $users->answer1 = $request->answer1;
        $users->select_question2 = $request->select_question2;
        $users->answer2 = $request->answer2;
        $users->country = $request->country;
        $users->state = $request->state;
        $users->deposit = $request->deposit;
        $users->amount = $request->amount;
        $users->interest = $request->interest;
        $users->Referral_earnings = $request->Referral_earnings;

           $users->save();

           return redirect()->route('admin.home')->with('info', 'User Successfully Updated');

      }



    //   drag and drop sortable
      public function updateSortale(Request $request)
      {
          $users = User::all();

          foreach ($users as $user) {
              foreach ($request->User as $client) {
                  if ($client['id'] == $user->id) {
                      $user->update(['client' => $client['position']]);
                  }
              }
          }

          return response('Update Successfully.', 200);
      }



      public function destroy($id)
      {

          $users = User::find($id);

          $users->delete();

          return redirect()->route('admin.home')->with('info', 'User details removed');
      }


}