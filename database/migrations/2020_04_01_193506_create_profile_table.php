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
            $table->string('name')->nullable();
            $table->string('fullName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('enName')->nullable();
            $table->integer('gender')->length(1)->nullable();
            $table->integer('age')->length(3)->nullable();
            $table->string('phone');
            $table->string('address')->nullable();
            $table->string('birthDay')->nullable();
            $table->string('avatar')->nullable();
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
