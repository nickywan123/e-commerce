<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class ProductDimension extends Model
{
    // Set table
    protected $table = 'product_dimensions';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'width',
        'height',
        'depth',
        'measurement_unit'
    ];
}
