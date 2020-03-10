<?php

namespace App\Models\Users;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id', 'email', 'password'
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
    protected $primaryKey = 'id';

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

    /**
     * Get user's image/
     */
    public function image()
    {
        return $this->morphOne('App\Models\Globals\Image', 'imageable');
    }


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
     * Get the user's shipping address.
     */
    public function shippingAddress()
    {
        return $this->hasOne('App\Models\Users\UserAddress', 'user_id')->where('is_shipping_address', 1);
    }


    /**
     * Get the user contact associated with the user.
     */
    public function userContacts()
    {
        return $this->hasMany('App\Models\Users\UserContact', 'user_id');
    }

    /**
     * Get the user's emergency contact.
     */
    public function emergencyContact()
    {
        return $this->hasOne('App\Models\Users\Usercontact', 'user_id')->where('is_emergency', 1);
    }

    // TODO: Replace with new relationship. Cart, Purchase, Orders & Items.
    // public function orders()
    // {

    //     return $this->hasMany('App\Models\Orders\Order', 'user_id');
    // }

    /**
     * Get all items in customer's cart.
     */
    public function carts()
    {
        return $this->hasMany('App\Models\Users\Cart', 'user_id', 'id');
    }

    /**
     * Get all items in customer's favorite.
     */
    public function favorites()
    {
        return $this->hasMany('App\Models\Users\Favorite', 'user_id', 'id');
    }

    // Eloquent Scopes

    /**
     * Get largest customer account id.
     */
    public function scopeLargestCustomerId($query)
    {
        return $query->where('account_id', 'LIKE', '1913%')->max('account_id');
    }

    /**
     * Get largest dealer account id.
     */
    public function scopeLargestDealerId($query)
    {
        // return $this->where('account_id', 'LIKE', '1911%')->max('account_id');
        return $query->where('account_id', 'LIKE', '1911%')->max('account_id');
    }

    /**
     * Get largest panel account id.
     */
    public function scopeLargestPanelId($query)
    {
        return $query->where('account_id', 'LIKE', '1918%')->max('account_id');
    }

    /**
     * Get largest administrator account id.
     */
    public function scopeLargestAdministratorId($query)
    {
        $query->where('account_id', 'LIKE', '1919%')->max('account_id');
    }

    // --
}
