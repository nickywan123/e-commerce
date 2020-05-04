<?php

namespace App\Models\Users\Dealers;

use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    // Set table
    protected $table = 'statements';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'account_id';

    // Set mass assignable columns
    protected $fillable = [
        'account_id',
        'month',
        'category',
        'quantity',
        'amount',
        'purchase_date',
        'invoice_no',
        'descrption',
        'unit_price',

    ];
}
