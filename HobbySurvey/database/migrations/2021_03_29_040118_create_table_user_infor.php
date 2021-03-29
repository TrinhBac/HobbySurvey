<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserInfor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userInfor', function (Blueprint $table) {
            $table->Increments('user_id');
            $table->string('user_name');
            $table->string('user_gender');
            $table->string('user_phoneNumber');
            $table->string('user_email');
            $table->string('user_age');
            $table->string('user_address');
            $table->string('user_petHobby');
            $table->string('user_foodHobby');
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
        Schema::dropIfExists('userInfor');
    }
}
