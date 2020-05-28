<?php

namespace App\Models\Globals;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // Set table
    protected $table = 'images';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'path',
        'filename',
        'default',
        'brand'
    ];

    /**
     * Get the owning imageable model.
     */
    public function imageable()
    {
        return $this->morphTo;
    }
}
