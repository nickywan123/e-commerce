<?php

namespace App\Models\Dealers;

use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{
    // Set table
    protected $table = 'dealer_spouses';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];
}
