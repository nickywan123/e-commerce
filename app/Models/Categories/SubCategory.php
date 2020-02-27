<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    // Set table
    protected $table = 'subcategories';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'name',
        'slug',
        'parent_category_id'
    ];

    /**
     * Get the sub category's image.
     */
    public function image()
    {
        return $this->morphOne('App\Models\Globals\Image', 'imageable');
    }

    /**
     * Get the sub category's parent.
     */
    public function parentCategory()
    {
        return $this->belongsTo('App\Models\Categories\Category', 'parent_category_id');
    }

    /**
     * Get all products belonging to a sub category.
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Products\Product', 'piv_product_subcategory', 'subcategory_id', 'product_id');
    }
}
