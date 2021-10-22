<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    // Set table
    protected $table = 'user_addresses';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'address_1',
        'address_2',
        'address_3',
        'postcode',
        'city',
        'state_id',
        'is_shipping_address',
        'is_residential_address',
        'is_mailing_address'
    ];

    /**
     * Get the user address associated with the user.
     */

    public function user()
    {
        return $this->belongsTo('App\Models\Users\User', 'user_id');
    }

    /**
     * Get state.
     */
    public function state()
    {
        return $this->belongsTo('App\Models\Globals\State', 'state_id');
    }
}
