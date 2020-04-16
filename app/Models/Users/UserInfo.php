<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

// Model to handle User Info

class UserInfo extends Model
{
    // Set table
    protected $table = 'user_infos';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'user_id';

    // Set mass assignable columns
    protected $fillable = [
        'account_id',
        'full_name',
        'nric',
        'referrer_id'
    ];

    /**
     * Get the user info associated with the user.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Users\User', 'user_id');
    }

    /**
     * Get the user contact associated with the user.
     */
    public function contacts()
    {
        return $this->hasMany('App\Models\Users\UserContact', 'account_id', 'account_id');
    }

    /**
     * Get all of the user's addresses.
     */
    public function addresses()
    {
        return $this->hasMany('App\Models\Users\UserAddress', 'account_id', 'account_id');
    }

    /**
     * Get the customer's payment info.
     */
    public function paymentInfo()
    {
        return $this->hasOne('App\Models\Users\Customers\PaymentInfo', 'account_id', 'account_id');
    }

    /**
     * Get largest customer account id.
     */
    public function scopeLargestCustomerId($query)
    {
        return $query->max('account_id');
    }

    public function shippingAddress()
    {
        return $this->hasOne('App\Models\Users\UserAddress', 'account_id', 'account_id')
            ->where('is_shipping_address', 1);
    }

    public function mobileContact()
    {
        return $this->hasOne('App\Models\Users\UserContact', 'account_id', 'account_id')
            ->where('is_mobile', 1);
    }

    public function homeContact()
    {
        return $this->hasOne('App\Models\Users\UserContact', 'account_id', 'account_id')
            ->where('is_home', 1);
    }

    public function officeContact()
    {
        return $this->hasOne('App\Models\Users\UserContact', 'account_id', 'account_id')
            ->where('is_office', 1);
    }
}
