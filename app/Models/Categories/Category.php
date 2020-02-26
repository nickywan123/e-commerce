<?php

namespace App\Models\Categories;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Set table
    protected $table = 'categories';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'name',
        'slug'
    ];

    /**
     * Get the category's image.
     */
    public function image()
    {
        return $this->morphOne('App\Models\Globals\Image', 'imageable');
    }

    /**
     * Get all of the category's childs.
     */
    public function childCategory()
    {
        return $this->hasMany('App\Models\Categories\SubCategory', 'parent_category_id');
    }

    /**
     * Get all products belonging to a category.
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Products\Product', 'category_product', 'category_id', 'product_id');
    }
}
