<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $primaryKey = "resumeId";
    protected $fillable = [
        "degree" ,
        "startWork" ,
        "prizes" ,
        "services" ,
        "hospitals"
    ];
}
