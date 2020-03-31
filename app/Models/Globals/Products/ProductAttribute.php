<?php

namespace App\Models\Globals\Products;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    // Set table
    protected $table = 'global_product_attributes';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];

    /**
     * Get an attribute's product.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Globals\Products\Product', 'product_id');
    }
}
