<?php

namespace App\Models\Users;

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
    protected $fillable = [
        'email', 'password',
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

    /**
     * Get the user info associated with the user.
     * each user has one user info
     */
    public function userInfo()
    {
        return $this->hasOne('App\Models\Users\UserInfo', 'id');
    }

    /**
     * Get the user address associated with the user.
     */

    public function userAddresses()
    {
        return $this->hasMany('App\Models\Users\UserAddress', 'id');
    }


    /**
     * Get the user contact associated with the user.
     */


    public function userContacts()
    {

        return $this->hasMany('App\Models\Users\UserContact', 'id');
    }


    public function orders()
    {

        return $this->hasMany('App\Models\Orders\Orders', 'id');
    }
}
