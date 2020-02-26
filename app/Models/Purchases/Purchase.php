<?php

namespace App\Models\Purchases;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    // Set table
    protected $table = 'purchases';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];
}
