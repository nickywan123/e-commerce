<?php

namespace App\Models\Purchases;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    // Set table
    protected $table = 'payments';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];

    public function response()
    {
        return $this->belongsTo('App\Models\Globals\PaymentGateway\Response', 'response_code', 'gateway_response_code');
    }
}
