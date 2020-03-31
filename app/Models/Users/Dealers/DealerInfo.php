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
     * Get the user contact associated with the user.
     */
    public function contacts()
    {
        return $this->hasMany('App\Models\Users\Dealers\DealerContact', 'account_id', 'account_id');
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
