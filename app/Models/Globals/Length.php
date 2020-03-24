<?php

namespace App\Models\Globals;

use Illuminate\Database\Eloquent\Model;

class Length extends Model
{
    // Set table
    protected $table = 'global_lengths';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];
}
