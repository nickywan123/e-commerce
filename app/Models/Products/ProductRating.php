<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class ProductRating extends Model
{
    // Set table
    protected $table = 'product_ratings';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'product_id',
        'user_id',
        'rating',
        'comments'
    ];
}
