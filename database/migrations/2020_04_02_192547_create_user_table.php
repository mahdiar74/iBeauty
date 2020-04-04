<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('userId');
            $table->string("phone");
            $table->string("role");
            $table->string("bookmarks");
            $table->text("password");
            $table->string("username");
            $table->unsignedBigInteger("commentId");
            $table->unsignedBigInteger("profileId");
            $table->foreign("commentId")->references("commentId")->on("comments")->delete("cascade");
            $table->foreign("profileId")->references("profileId")->on("profiles")->delete("cascade");
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
        Schema::dropIfExists('user');
    }
}
