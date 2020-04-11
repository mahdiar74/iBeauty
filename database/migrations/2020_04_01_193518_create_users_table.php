<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('userId');
            $table->string("phone")->unique();
            $table->string("role");
            $table->string('name')->nullable();
            $table->string("username")->nullable();
            $table->string('email')->nullable();
            $table->unsignedBigInteger("profileId");
            $table->foreign("profileId")->references("profileId")->on("profiles")->delete("cascade");
            $table->integer('active')->length(1)->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
