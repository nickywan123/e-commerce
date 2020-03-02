<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class ProductColor extends Model
{
    // Set table
    protected $table = 'product_colors';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'color_name',
        'name_slug',
        'color_hex',
        'is_default'
    ];

    public function image()
    {
        return $this->morphOne('App\Models\Globals\Image', 'imageable');
    }
}
