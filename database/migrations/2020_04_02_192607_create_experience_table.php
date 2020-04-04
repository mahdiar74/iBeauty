<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->bigIncrements('experienceId');
            $table->text("text");
            $table->string("date");
            $table->bigInteger("like");
            $table->integer("status")->length(1);
            $table->string("newName");
            $table->unsignedBigInteger("experiencableId");
            $table->string("experiencableType");
            $table->unsignedBigInteger("popularityId");
            // $table->unsignedBigInteger("commentId");
            $table->foreign("popularityId")->references("popularityId")->on("popularities")->delete("cascade");
            // $table->foreign("commentId")->references("commentId")->on("comment")->delete("cascade");
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
        Schema::dropIfExists('experiences');
    }
}
