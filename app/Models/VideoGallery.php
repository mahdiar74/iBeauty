<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Video;

class VideoGallery extends Model
{
    protected $primaryKey = "videoGalleryId";
    protected $fillable = ['name'];

    public function videos(){
        return $this->hasMany(Video::class,"videoGalleryId","videoGalleryId");
    }
}
