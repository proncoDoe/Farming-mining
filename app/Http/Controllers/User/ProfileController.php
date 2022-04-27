<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function profile(){

        $user = Auth::user();
        $data['user'] = $user;
        return view('main.user.profile',$data);

}


public function update(Request $request)
{

    $request->validate([
        'fName' => 'required',
        'lName' => 'required',
        'username' => 'required',
        'email' => 'required',
        'profile_image'=> 'nullable|image:mimes,png,jpg,gif,svg|max:2048',
    ], [

        'fName.required' => 'first name required',
        'lName.required' => 'last name required',
        'username.required' => 'username required',
        'email.required' => 'email required',

    ]);


     $user_id = Auth::user()->id;
     $user = User::findOrFail($user_id);

    $user->fName = $request->input('fName');
    $user->lName = $request->input('lName');
    $user->username = $request->input('username');
    $user->email = $request->input('email');


    if($request->hasFile('profile_image')){

      $destination_path = 'uploads/profile/'.$user->profile_image;

      if(File::exists($destination_path)){

        File::delete($destination_path);

      }

      $file = $request->file('profile_image');
      $extenstion = $file->getClientOriginalExtension();
      $filename = time() . '.' . $extenstion;
      $file->move('uploads/profile/', $filename);
      $user->profile_image = $filename;

    }else{


        $user->profile_image = 'default.gif';

    }



    try
        {
                if ($user['base64image'] || $user['base64image'] != '0') {

                    $destination_path = 'uploads/profile/'.$user->profile_image;;
                    $image_parts = explode(";base64,", $user['base64image']);
                    $image_type_aux = explode("uploads/profile/", $image_parts[0]);
                    // $image_type = $image_type_aux[1];
                    // $image_base64 = base64_decode($image_parts[1]);
                    // $file = $folderPath . uniqid() . '.png';
                    // $filename = time() . '.'. $image_type;
                    $file =$destination_path.$filename;
                    // file_put_contents($file, $image_base64);





            }

        }catch(\Illuminate\Database\QueryException $ex){

            $msg = $ex->getMessage();
        }




    $user->update();
    return redirect()->back()->with('success', 'Profile updated successfully');

}


}