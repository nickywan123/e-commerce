<?php

namespace App\Models\Dealers;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    // Set table
    protected $table = 'dealer_employments';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];
}
