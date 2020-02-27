<?php

namespace App\Models\Orders;

use Illuminate\Database\Eloquent\Model;

// Model to handle Orders table

class Orders extends Model
{

    // Set table
    protected $table = 'orders';

    // Set timestamps
    public $timestamps = false;

    // Set primary key
    protected $primaryKey = 'order_id';

    // Set mass assignable columns
    protected $fillable = [];

    // Manys orders can belong to one customer

    public function users()
    {
        return $this->belongsTo('App\Models\Users\User', 'user_id');
    }
}
