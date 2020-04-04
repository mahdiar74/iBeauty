<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('commentId');
            $table->string('text');
            $table->integer('status');
            $table->string('date');
            $table->bigInteger('like');
            $table->string('phone');
            $table->string('name');
            $table->unsignedBigInteger('replyId');
            $table->unsignedBigInteger('commentableId');
            $table->string('commentableType');
            $table->foreign("replyId")->references("commentId")->on("comments")->delete("cascade");
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
        Schema::dropIfExists('comments');
    }
}
