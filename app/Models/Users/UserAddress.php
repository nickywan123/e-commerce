<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

// model to handle user addresses
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
        'zipcode',
        'state',
        'shipping_address'


    ];

    /**
     * Get the user address associated with the user.
     */

    public function user()
    {

        return $this->belongsTo('App\Models\Users\User', 'user_id');
    }
}
