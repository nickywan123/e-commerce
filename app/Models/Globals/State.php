<?php

namespace App\Models\Globals;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    // Set table
    protected $table = 'global_states';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];
}
