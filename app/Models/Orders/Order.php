<?php

namespace App\Models\Orders;

use Illuminate\Database\Eloquent\Model;

// Model to handle Orders table

class Order extends Model
{

    // Set table
    protected $table = 'orders';

    // Set timestamps
    public $timestamps = false;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];

    // Cast column to another datatype.
    protected $casts = [
        'product_information' => 'array'
    ];

    // Get order's user.
    public function user()
    {
        return $this->belongsTo('App\Models\Users\User', 'user_id');
    }

    // Get order's panel.
    public function panel()
    {
        return $this->belongsTo('App\Models\Users\User', 'panel_id');
    }

    // Get order's product.
    public function product()
    {
        return $this->belongsTo('App\Models\Products\Product', 'product_id');
    }

    // Get order's status.
    public function status()
    {
        return $this->belongsTo('App\Models\Globals\Status', 'status_id');
    }
}
