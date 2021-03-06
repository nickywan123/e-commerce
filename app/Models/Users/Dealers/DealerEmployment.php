<?php

namespace App\Models\Users\Dealers;

use Illuminate\Database\Eloquent\Model;

class DealerEmployment extends Model
{
    // Set table
    protected $table = 'dealer_employments';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];

    /**
     * Get state.
     */
    public function state()
    {
        return $this->belongsTo('App\Models\Globals\State', 'company_state_id');
    }
}
