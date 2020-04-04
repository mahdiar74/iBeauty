<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageGallery extends Model
{
    protected $primaryKey = "imageGalleryId";
    protected $fillable = ['name'];
}
