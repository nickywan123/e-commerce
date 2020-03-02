<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class UserContact extends Model
{
    // Set table
    protected $table = 'user_contacts';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [

        'mobile_num',
        'emergency_num'

    ];




    /**
     * Get the user contact associated with the user.
     */

    public function user()
    {

        return $this->belongsTo('App\Models\Users\User', 'user_id');
    }
}
