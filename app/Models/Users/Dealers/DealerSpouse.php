<?php

namespace App\Models\Users\Dealers;

use Illuminate\Database\Eloquent\Model;

class DealerSpouse extends Model
{
    // Set table
    protected $table = 'dealer_spouses';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'user_id';

    // Set mass assignable columns
    protected $fillable = [];
}
