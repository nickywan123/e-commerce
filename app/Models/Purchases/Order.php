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
    protected $primaryKey = 'order_number';

    // Set mass assignable columns
    protected $fillable = [];

    /**
     * Get all items belongin to the order.
     */
    public function items()
    {
        return $this->hasMany('App\Models\Purchases\Item', 'order_number', 'order_number');
    }

    /**
     * Get purchase of the order.
     */
    public function purchase()
    {
        return $this->belongsTo('App\Models\Purchases\Purchase', 'purchase_id');
    }
}
