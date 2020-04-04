<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('imageId');
            $table->string('src');
            $table->string('alt');
            $table->string('description');
            $table->string('title');
            $table->unsignedBigInteger('imageGalleryId');
            $table->foreign("imageGalleryId")->references("imageGalleryId")->on("image_galleries")->delete("cascade");
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
        Schema::dropIfExists('images');
    }
}
