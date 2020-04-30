<?php

namespace App\Models\Users\Dealers;

use Illuminate\Database\Eloquent\Model;

class DealerInfo extends Model
{
    // Set table
    protected $table = 'dealer_infos';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'user_id';

    // Set mass assignable columns
    protected $fillable = [
        'account_id',
        'full_name',
        'nric'
    ];

    /**
     * Get the user info associated with the user.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Users\User', 'user_id');
    }

    /**
     * Get all of the user's addresses.
     */
    public function addresses()
    {
        return $this->hasMany('App\Models\Users\UserAddress', 'account_id', 'account_id');
    }

    /**
     * Get dealer billing address.
     */
    public function billingAddress(){
        return $this->hasOne('App\Models\Users\Dealers\DealerAddress','account_id','account_id')->where('is_mailing_address', 1);
    }

      /**
     * Get dealer shipping address.
     */
    public function shippingAddress(){
        return $this->hasOne('App\Models\Users\Dealers\DealerAddress','account_id','account_id')->where('is_shipping_address', 1);
    }

    /**
     * Get the user contact associated with the user.
     */
    public function contacts()
    {
        return $this->hasMany('App\Models\Users\Dealers\DealerContact', 'account_id', 'account_id');
    }


    /*****
     * Get mobile contact number of dealer
     ***/
 public function dealerMobileContact(){
    return $this->hasOne('App\Models\Users\Dealers\DealerContact','account_id','account_id')->where('is_mobile', 1);
    
 }

    /**
     * Get largest dealer account id.
     */
    public function scopeLargestDealerId($query)
    {
        // return $this->where('account_id', 'LIKE', '1911%')->max('account_id');
        return $query->max('account_id');
    }
}
