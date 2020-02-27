<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    // Set table
    protected $table = 'product_types';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'name',
        'slug',
        'parent_subcategory_id'
    ];

    /**
     * Get the product type's image.
     */
    public function image()
    {
        return $this->morphOne('App\Models\Globals\Image', 'imageable');
    }

    /**
     * Get the product type's parent.
     */
    public function subcategory()
    {
        return $this->belongsTo('App\Models\Categories\SubCategory', 'parent_subcategory_id');
    }

    /**
     * Get all products that belongs to the product type.
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Products\Product', 'piv_product_type', 'product_type_id', 'product_id');
    }
}
