<?php

namespace App\Models\Orders;

use Illuminate\Database\Eloquent\Model;

// Model to handle Orders table

class Order extends Model
{

    // Set table
    protected $table = 'orders';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'order_id';

    // Set mass assignable columns
    protected $fillable = [];

    // Manys orders can belong to one user

    public function user()
    {
        return $this->belongsTo('App\Models\Users\User', 'user_id');
    }
}
