<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminLogin;
use App\Http\Controllers\Admin\AdminLogout;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HelpdeskAdminController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\SubscribeAdminController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\MainController;

use App\Http\Controllers\PrivacyController;


use App\Http\Controllers\User\DepositController;
use App\Http\Controllers\User\WithdrawalController;
use App\Http\Controllers\User\CashController;
use App\Http\Controllers\User\PaymentController;
use App\Http\Controllers\User\ViewDepositController;
use App\Http\Controllers\User\ViewWithdrawalController;
use App\Http\Controllers\User\Reset_password_without_token;
use App\Http\Controllers\User\RefferalController;
use App\Http\Controllers\User\HelpDeskController;
use App\Http\Controllers\SubscribeController;

use App\Http\Controllers\ContactController;

use App\Http\Controllers\User\EarningController;

use App\Http\Controllers\User\ProfileController;

use App\Http\Controllers\User\profileChangePasswordController;








/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [MainController::class, 'getData'])->name('home');

Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/price', [MainController::class, 'pricing'])->name('price');

Route::get('/faq', [MainController::class, 'faq'])->name('faq');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/subscribe',[SubscribeController::class,'index'])->name('subscribe');
Route::post('/subscribe',[SubscribeController::class,'store']);

Route::get('/privacy',[PrivacyController::class,'index'])->name('privacy');



Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:web'])->group(function(){

          Route::get('/register',[UserController::class, 'register'])->name('register');
          Route::post('/register',[UserController::class,'store']);

          Route::view('/login','main.user.login')->name('login');
          Route::post('/check',[UserController::class,'check'])->name('check');

          Route::view('/passwordemail','main.user.password.email')->name('passwordemail');
        //   Route::get('/email',[Reset_password_without_token::class, 'reset'])->name('email');
          Route::post('/email',[Reset_password_without_token::class,'update'])->name('email');


        //   Route::view('/resetPassword/{token}','main.user.password.reset')->name('resetPassword');

          //   Route::post('/resetPassword',[Reset_password_without_token::class,'submitResetPasswordForm']);
          Route::get('/reset/{reset_code}', [Reset_password_without_token::class,'showResetPasswordForm'])->name('reset');

          Route::put('/reset/{reset_code}',[Reset_password_without_token::class,'postResetPassword'])->name('resetPassword');

    });

    Route::middleware(['auth:web'])->group(function(){
          Route::view('/home','main.user.home')->name('home');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
    });


    Route::middleware(['auth:web'])->group(function(){


        Route::get('/profile',[ProfileController::class, 'profile'])->name('profile');
        Route::patch('/profile', [ProfileController::class, 'update']);

        Route::get('/passprofile',[profileChangePasswordController::class, 'changePassword'])->name('passprofile');
        Route::put('/passprofile', [profileChangePasswordController::class, 'updatePassword']);



    Route::get('/deposit', [DepositController::class, 'deposits'])->name('deposit');
    Route::patch('/deposit', [DepositController::class, 'update']);

    Route::get('/view_deposit',[ViewDepositController::class, 'index'])->name('view_deposit');


    Route::get('/payment', [PaymentController::class, 'payments'])->name('payment');
    Route::patch('/payment', [PaymentController::class, 'update']);


    Route::get('/withdraw', [WithdrawalController::class, 'withdraw'])->name('withdraw');
    Route::patch('/withdraw', [WithdrawalController::class, 'update']);

    Route::get('/cash', [CashController::class, 'cash'])->name('cash');
    Route::patch('/cash', [CashController::class, 'update']);

    Route::get('/view_withdraw',[ViewWithdrawalController::class, 'index'])->name('view_withdraw');

    Route::get('/referal',[RefferalController::class, 'index'])->name('referal');

    Route::get('/helpdesk',[HelpDeskController::class, 'index'])->name('helpdesk');

    Route::post('/helpdesk',[HelpDeskController::class, 'store']);

    Route::get('/earning',[EarningController::class, 'index'])->name('earning');

});


});


Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin'])->group(function(){
          Route::get('/login',[AdminLogin::class, 'index'])->name('login');
          Route::post('/login',[AdminLogin::class,'store']);
    });

    Route::middleware(['auth:admin'])->group(function(){
        Route::get('/home',[HomeController::class,'home'])->name('home');

        Route::get('/helpdesk',[HelpdeskAdminController::class,'desk'])->name('helpdesk');

        Route::get('/contact',[MessageController::class,'message'])->name('contact');

        Route::get('/subscribe',[SubscribeAdminController::class,'sub'])->name('subscribe');

        Route::get('/member',[MemberController::class,'index'])->name('member');

        Route::post('/member',[MemberController::class,'store']);

        Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('edit');
        Route::patch('/edit/{id}', [HomeController::class, 'update']);

        // sortable
        Route::post('/home',[HomeController::class, 'updateSortale']);

        Route::delete('/destroy/{id}', [HomeController::class, 'destroy'])->name('destroy');

        Route::post('/logout',[AdminLogout::class,'logout'])->name('logout');
    });

});