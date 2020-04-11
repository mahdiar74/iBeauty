<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $primaryKey = 'profileId';
    protected $fillable = [
        'name',
        'fullName',
        'lastName',
        'enName',
        'gender',
        'age',
        'phone',
        'address',
        'birthDay',
        'avatar',
        'active'
    ];
}
