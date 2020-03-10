<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    // Set table
    protected $table = 'favorites';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];

    // Cast column to another datatype.
    protected $casts = [];

    /**
     * Get user.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Users\User', 'user_id');
    }

    /**
     * Get product.
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Products\Product', 'product_id');
    }
}
