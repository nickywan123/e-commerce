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
        'slug',
        'parent_category_id'
    ];

    /**
     * Get the category's image.
     */
    public function image()
    {
        return $this->morphOne('App\Models\Globals\Image', 'imageable');
    }

    /**
     * Get top level category.
     */
    public function scopeTopLevelCategory($query)
    {
        return $query->where('parent_category_id', 0)->get();
    }

    /**
     * Get the category's parent if any.
     */
    public function parentCategory()
    {
        return $this->belongsTo('App\Models\Categories\Category', 'parent_category_id');
    }

    /**
     * Get all of the category's child if any.
     */
    public function childCategories()
    {
        return $this->hasMany('App\Models\Categories\Category', 'parent_category_id');
    }

    /**
     * Get all products belonging to a category.
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Globals\Products\Product', 'piv_category_product', 'category_id', 'product_id');
    }
}
