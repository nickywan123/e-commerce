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
    protected $fillable = [];

    // Cast column to another datatype.
    protected $casts = [
        'product_information' => 'array'
    ];

    /**
     * Get product in the cart.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Products\Product', 'product_id');
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
