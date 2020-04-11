<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\VideoGallery;

class Video extends Model
{
    protected $primaryKey = "videoId" ;
    protected $fillable = [
        'src',
        'alt',
        'position',
        'title',
        'videoGalleryId',
        'avtive'
    ];

    public function videoGallery()
    {
        return $this->belongsTo(VideoGallery::class,"videoGalleryId","videoGalleryId");
    }
}
