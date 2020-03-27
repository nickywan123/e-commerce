<?php

namespace App\Models\Users\Dealers;

use Illuminate\Database\Eloquent\Model;

class DealerContact extends Model
{
    // Set table
    protected $table = 'dealer_contacts';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'user_id';

    // Set mass assignable columns
    protected $fillable = [];
}
