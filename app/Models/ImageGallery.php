<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class ImageGallery extends Model
{
    protected $primaryKey = "imageGalleryId";
    protected $fillable = ['name'];

    public function images(){
        return $this->hasMany(Image::class,"imageGalleryId","imageGalleryId");
    }
}
