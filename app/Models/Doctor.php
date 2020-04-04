<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;
use App\Models\ImageGallery;
use App\Models\VideoGalleryGallery;
use App\Models\Popularity;
use App\Models\Contact;
use App\Models\Resume;
use App\Models\Comment;
use App\Models\Portfolio;

class Doctor extends Model
{
    protected $fillable = [
        'medicalNumber' ,
        'activeDays' ,
        'field' ,
        'imageGalleryId' ,
        'videoGalleryId' ,
        'contactId' ,
        'profileId' ,
        'popularityId' ,
        'resumeId' ,
        'commentId' ,
        'portfolioId' ,
    ];

    public function profile(){
        return $this->hasOne(Profile::class,"profileId","profileId");
    }
    public function imageGalleries(){
        return $this->hasMAny(ImageGallery::class,"imageGalleryId","imageGalleryId");
    }
    public function videoGalleries(){
        return $this->hasMAny(VideoGallery::class,"videoGalleryId","videoGalleryId");
    }
    public function contact(){
        return $this->hasOne(Contact::class,"contactId","contactId");
    }
    public function popularity(){
        return $this->hasOne(Popularity::class,"popularityId","popularityId");
    }
    public function resume(){
        return $this->hasOne(Resume::class,'resumeId',"resumeId");
    }
    public function portfolio(){
        return $this->morphMany('App\Models\Portfolio',"portfolioable","portfolioableType","portfolioableId");
    }
    public function comments(){
        return $this->morphMany('App\Models\Comment','commentable',"commentableType","commentableId");
    }
}
