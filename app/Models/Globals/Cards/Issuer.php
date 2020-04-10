<?php

namespace App\Models\Globals\Cards;

use Illuminate\Database\Eloquent\Model;

class Issuer extends Model
{
    // Set table
    protected $table = 'global_card_issuers';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'issuer_name',
        'description'
    ];
}
