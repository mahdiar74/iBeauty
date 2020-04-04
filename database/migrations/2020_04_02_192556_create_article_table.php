<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('articleId');
            $table->text("text");
            $table->text("lead");
            $table->string("title");
            $table->string("tag");
            $table->string("date");
            $table->string("seoTag");
            $table->string("heading");
            $table->unsignedBigInteger("imageGalleryId");
            $table->unsignedBigInteger("popularityId");
            // $table->unsignedBigInteger("commentId");
            $table->unsignedBigInteger("videoGalleryId");
            $table->foreign("imageGalleryId")->references("imageGalleryId")->on("image_galleries")->delete("cascade");
            $table->foreign("videoGalleryId")->references("videoGalleryId")->on("video_galleries")->delete("cascade");
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
        Schema::dropIfExists('articles');
    }
}
