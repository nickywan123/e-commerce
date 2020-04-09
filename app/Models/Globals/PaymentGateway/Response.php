<?php

namespace App\Models\Globals\PaymentGateway;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    // Set table
    protected $table = 'global_payment_response';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'response_code',
        'description'
    ];
}
