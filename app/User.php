<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','status','companyName','nameCEO','businessCategory','address','mobile','transferDate','moneyReceipt',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function hasRole($role)
    {
        return $this->role == $role;
    }

    public function isAdmin()
    {
        return $this->role == 'admin';
    }
    public function checkStatus()
    {
        return $this->status== $status;
    }

    public function news()
    {
        return $this->hasMany('App\News');
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
