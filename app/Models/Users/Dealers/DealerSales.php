<?php

namespace App\Models\Users\Dealers;

use Illuminate\Database\Eloquent\Model;

class DealerSales extends Model
{
    // Set table
    protected $table = 'dealer_sales';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'order_number';

    // Set mass assignable columns
    protected $fillable = [
        'order_number',
        'purchase_id',
        'dealer_id',
        'order_amount'
    ];


    //Get the order associated with the dealer
    public function orders()
    {
        return $this->belongsTo('App\Models\Purchases\Order', 'order_number', 'order_number');
    }
}
