<?php

namespace App\Models\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class User extends Authenticatable
{
    use Notifiable, HasRoles;


    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'track_id', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /* Attribute to set primary user */
    protected $primaryKey = 'user_id';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

    /**
     * Get the user info associated with the user.
     * each user has one user info
     */
    public function userInfo()
    {
        return $this->hasOne('App\Models\Users\UserInfo', 'user_id');
    }

    /**
     * Get the user address associated with the user.
     */

    public function userAddresses()
    {
        return $this->hasMany('App\Models\Users\UserAddress', 'user_id');
    }


    /**
     * Get the user contact associated with the user.
     */


    public function userContacts()
    {

        return $this->hasMany('App\Models\Users\UserContact', 'user_id');
    }


    public function orders()
    {

        return $this->hasMany('App\Models\Orders\Order', 'user_id');
    }

    /**
     * Get all items in customer's cart.
     */
    public function cartItems()
    {
        return $this->hasMany('App\Models\Users\Cart', 'user_id', 'user_id');
    }
}
