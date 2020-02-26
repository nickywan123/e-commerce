<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class ProductLength extends Model
{
    // Set table
    protected $table = 'product_lengths';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'length',
        'measurement_unit'
    ];
}
