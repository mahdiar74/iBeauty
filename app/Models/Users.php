<?php

namespace App\Models;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as Auth;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Users extends Model implements Auth
{
    use AuthenticableTrait;
    protected $primaryKey = "userId";

    protected $fillable = [
        'phone' ,
        'role' ,
        'bookmarks' ,
        'password' ,
        'username' ,
        'ameil' ,
        'profileId'
    ];
}
