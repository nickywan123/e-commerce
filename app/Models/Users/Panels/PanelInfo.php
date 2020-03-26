<?php

namespace App\Models\Users\Panels;

use Illuminate\Database\Eloquent\Model;

class PanelInfo extends Model
{
    // Set table
    protected $table = 'panel_infos';

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
        return $this->hasMany('App\Models\User\UserAddress', 'account_id', 'account_id');
    }

    /**
     * Get largest panel account id.
     */
    public function scopeLargestPanelId($query)
    {
        return $query->max('account_id');
    }
}
