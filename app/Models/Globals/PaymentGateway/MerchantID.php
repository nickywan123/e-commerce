<?php

namespace App\Models\Globals\PaymentGateway;

use Illuminate\Database\Eloquent\Model;

class MerchantID extends Model
{
    // Set table
    protected $table = 'global_payment_merchantid';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'card_type',
        'merchant_id'
    ];
}
