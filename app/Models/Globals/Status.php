<?php

namespace App\Models\Globals;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    // Set table
    protected $table = 'global_statuses';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'id',
        'name',
        'description'
    ];
}
