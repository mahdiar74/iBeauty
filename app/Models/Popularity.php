<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Popularity extends Model
{
    protected $primaryKey = "popularityId";
    protected $fillable = ['like','view','bookmark'];
}
