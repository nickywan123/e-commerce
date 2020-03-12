<?php

namespace App\Models\Purchases;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    // Set table
    protected $table = 'items';

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

    // Get order of the item.
    public function order()
    {
        return $this->belongsTo('App\Models\Purchases\Order', 'order_number', 'order_number');
    }
}
