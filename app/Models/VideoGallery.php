<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    protected $primaryKey = "videoGalleryId";
    protected $fillable = ['name'];
}
