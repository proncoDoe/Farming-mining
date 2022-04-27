<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'referral_id',
        'fName',
        'lName',
        'username',
        'email',
        'phone',
        'currency',
        'wallet_address',
        'select_question1',
        'answer1',
        'select_question2',
        'answer2',
        'country',
        'state',
        'password',
        'profile_image',
        'deposit',
        'amount',
        'interest',
        'Referral_earnings',
        'add_wallet_address',
        'chose_amount',
        'selected_currency',
        'Reffered_by_name'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


      // The accessors to append to the model's array form.
      protected $appends = ['referral_link'];


       // Get the user's referral link.

  public function getReferralLinkAttribute()
  {
      return $this->referral_link = route('user.register', ['ref' => $this->username]);
  }


      // A user has a referrer.

      public function referral(){
        return $this->belongsTo(User::class, 'referral_id ', 'id');
    }


    public function referrals()
{
    return $this->hasMany(User::class, 'referral_id', 'id');
}

public function helpdesk(){


    return $this->hasMany(DeskHelp::class);
}


}