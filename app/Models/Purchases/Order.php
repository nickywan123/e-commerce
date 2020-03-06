<?php

namespace App\Models\Purchases;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Set table
    protected $table = 'orders';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];
}
