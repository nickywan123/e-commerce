<?php

namespace App\Models\Purchases;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    // Set table
    protected $table = 'purchase_ratings';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];
}
