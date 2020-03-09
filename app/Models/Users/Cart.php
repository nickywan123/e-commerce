<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    // Set table
    protected $table = 'carts';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'product_id',
        'product_color_id',
        'product_color',
        'product_dimension_id',
        'product_dimension',
        'product_length_id',
        'product_length',
        'quantity',
        'unit_price',
        'total_price',
        'shipping_fee'
    ];

    /**
     * Get product in the cart.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Products\Product', 'product_id');
    }

    /**
     * Get product's color.
     */
    public function color()
    {
        return $this->belongsTo('App\Models\Products\ProductColor', 'product_color_id');
    }

    /**
     * Get product's dimension.
     */
    public function dimension()
    {
        return $this->belongsTo('App\Models\Products\ProductDimension', 'product_dimension_id');
    }

    /**
     * Get product's length.
     */
    public function length()
    {
        return $this->belongsTo('App\Models\Products\ProductLength', 'product_length_id');
    }

    /**
     * Get item's unit price formatted with 2 decimal points.
     */
    public function getDecimalUnitPrice()
    {
        return number_format(($this->unit_price / 100), 2);
    }

    /**
     * Get item's total price formatted with 2 decimal points.
     */
    public function getDecimalTotalPrice()
    {
        return number_format(($this->total_price / 100), 2);
    }

    /**
     * Get item's shipping fee formatted with 2 decimal points.
     */
    public function getDecimalShippingFee()
    {
        return number_format(($this->shipping_fee / 100), 2);
    }
}
