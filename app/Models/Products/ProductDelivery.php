<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class ProductDelivery extends Model
{
    // Set table
    protected $table = 'panel_product_deliveries';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];

    /**
     * Get product.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Products\Product', 'panel_product_id', 'id');
    }

    /**
     * Get state.
     */
    public function state()
    {
        return $this->belongsTo('App\Models\Globals\State', 'state_id', 'id');
    }
}
