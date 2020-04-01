<?php

namespace App\Models\Purchases;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    // Set table
    protected $table = 'purchases';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];

    /**
     * Get all the orders belonging to the purchase.
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Purchases\Order', 'purchase_id');
    }

    /**
     * Get user of the purchase.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Users\User', 'user_id');
    }

    // /*
    // *Get carts items
    //  */
    // public function carts(){
    //     return $this->hasMany('App\Models\Users\Customers\Cart', 'user_id');
    // }
}
