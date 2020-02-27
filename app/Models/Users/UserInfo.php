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
    protected $fillable = [];




    /**
     * Get the user info associated with the user.
     */

    public function user()
    {

        return $this->belongsTo('App\Models\Users\User', 'user_id');
    }
}
