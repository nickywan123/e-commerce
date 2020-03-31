<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    // Set table
    protected $table = 'panel_product_attributes';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'panel_product_id',
        'attribute_type',
        'attribute_name',
        'color_hex'
    ];

    /**
     * Get an attribute's product.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Products\Product', 'product_id');
    }
}
