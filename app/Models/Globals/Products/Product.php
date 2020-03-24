<?php

namespace App\Models\Globals\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Set table
    protected $table = 'global_products';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];
}
