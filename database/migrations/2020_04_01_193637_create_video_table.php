<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('videoId');
            $table->string('src');
            $table->string('alt')->nullable();
            $table->string('title')->nullable();
            $table->string('position')->nullable();
            $table->unsignedBigInteger('videoGalleryId');
            $table->foreign('videoGalleryId')->references("videoGalleryId")->on("video_galleries")->delete("cascade");
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
        Schema::dropIfExists('videos');
    }
}
