<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $primaryKey = "contactId";
    protected $fillable = [
        'city',
        'province',
        'phone',
        'telegram',
        'site',
        'instagram',
        'email',
        'address',
        'region'
    ];
}
