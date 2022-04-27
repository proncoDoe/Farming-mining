<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('referral_id')->nullable();
            $table->string('fName');
            $table->string('lName');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('currency');
            $table->string('wallet_address');
            $table->string('select_question1');
            $table->string('answer1');
            $table->string('select_question2');
            $table->string('answer2');
            $table->string('country');
            $table->string('state');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('profile_image')->nullable();
            $table->text('deposit')->nullable();
            $table->decimal('amount')->nullable();
            $table->decimal('interest')->nullable();
            $table->decimal('Referral_earnings')->nullable();
            $table->text('add_wallet_address')->nullable();
            $table->decimal('chose_amount')->nullable();
            $table->string('selected_currency')->nullable();
            $table->string('Reffered_by_name')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}