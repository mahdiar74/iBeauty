<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('profileId');
            $table->string('name');
            $table->string('fullName');
            $table->string('lastName');
            $table->integer('gender')->length(1);
            $table->integer('age')->length(3);
            $table->string('phone');
            $table->string('address');
            $table->string('birthDay');
            $table->string('avatar');
            $table->integer('active')->length(1)->default(1);
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
        Schema::dropIfExists('profiles');
    }
}
