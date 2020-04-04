<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClinicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->bigIncrements('clinicId');
            $table->string("services");
            $table->string("activeDays");
            $table->unsignedBigInteger("imageGalleryId");
            $table->unsignedBigInteger("contactId");
            $table->unsignedBigInteger("popularityId");
            // $table->unsignedBigInteger("portfolioId");
            $table->unsignedBigInteger("resumeId");
            // $table->unsignedBigInteger("commentId");
            $table->unsignedBigInteger("profileId");
            $table->unsignedBigInteger("videoGalleryId");
            $table->foreign("imageGalleryId")->references("imageGalleryId")->on("image_galleries")->delete("cascade");
            $table->foreign("videoGalleryId")->references("videoGalleryId")->on("video_galleries")->delete("cascade");
            $table->foreign("contactId")->references("contactId")->on("contacts")->delete("cascade");
            $table->foreign("popularityId")->references("popularityId")->on("popularities")->delete("cascade");
            // $table->foreign("portfolioId")->references("portfolioId")->on("portfolio")->delete("cascade");
            $table->foreign("resumeId")->references("resumeId")->on("resumes")->delete("cascade");
            // $table->foreign("commentId")->references("commentId")->on("comment")->delete("cascade");
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
        Schema::dropIfExists('clinics');
    }
}
