<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->bigIncrements('portfolioId');
            $table->string("category");
            $table->unsignedBigInteger("imageGalleryId");
            $table->unsignedBigInteger("portfolioableId");
            $table->string("portfolioableType");
            $table->foreign('imageGalleryId')->references('imageGalleryId')->on('image_galleries')->onDelete('cascade');
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
        Schema::dropIfExists('portfolios');
    }
}
