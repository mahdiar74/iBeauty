<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
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


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const ADMIN_TYPE = 10;  //Admin User
    const DEFAULT_TYPE = 1; //Guest User
    const USER_TYPE = 5; //Guest User

    public function isAdmin(){
        return $this->role == self::ADMIN_TYPE;
    }
    public function isGuest(){
        return $this->role == self::DEFAULT_TYPE;
    }
    public function isUser(){
        return $this->role == self::USER_TYPE;
    }
}
