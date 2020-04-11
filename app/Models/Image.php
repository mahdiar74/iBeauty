<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ImageGallery;

class Image extends Model
{
    protected $primaryKey = "imageId" ;
    protected $fillable = [
        'src',
        'alt',
        'description',
        'position',
        'title',
        'imageGalleryId',
        'avtive'
    ];

    public function imageGallery()
    {
        return $this->belongsTo(ImageGallery::class,"imageGalleryId","imageGalleryId");
    }

}
