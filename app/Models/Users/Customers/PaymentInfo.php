<?php

namespace App\Models\Users\Customers;

use Illuminate\Database\Eloquent\Model;

class PaymentInfo extends Model
{
    // Set table
    protected $table = 'user_payment_info';

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

    public function issuer()
    {
        return $this->belongsTo('App\Models\Globals\Cards\Issuer', 'issuer_id');
    }
}
