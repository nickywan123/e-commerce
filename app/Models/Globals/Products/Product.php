<?php

namespace App\Models\Globals\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Set table
    protected $table = 'global_products';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'product_code',
        'name',
        'name_slug',
        'details',
        'description',
        'quality_id',
        'product_rating'
    ];

    /**
     * Get all images of a product.
     *
     * Example Create = $product->images()->create(['key' => 'value']);
     * Example Retrieve = $product->images;
     */
    public function images()
    {
        return $this->morphMany('App\Models\Globals\Image', 'imageable');
    }

    /**
     * Get default image of a product.
     */
    public function defaultImage()
    {
        return $this->morphOne('App\Models\Globals\Image', 'imageable')
            ->where('default', 1);
    }

    /**
     *  Get product's categories.
     */
    public function categories()
    {
        return $this->belongsToMany(
            'App\Models\Categories\Category',
            'piv_category_product',
            'product_id',
            'category_id'
        );
    }

    /**
     * Get all attribute of a product.
     */
    public function attributes()
    {
        return $this->hasMany('App\Models\Globals\Products\ProductAttribute', 'product_id');
    }

    /**
     * Get all color attributes of a product.
     */
    public function colorAttributes()
    {
        return $this->hasMany('App\Models\Globals\Products\ProductAttribute', 'product_id')
            ->where('attribute_type', 'color');
    }

    /**
     * Get all size attributes of a product.
     */
    public function sizeAttributes()
    {
        return $this->hasMany('App\Models\Globals\Products\ProductAttribute', 'product_id')
            ->where('attribute_type', 'size');
    }

    /**
     * Get all light temperature of a product.
     */
    public function lightTemperatureAttributes()
    {
        return $this->hasMany('App\Models\Globals\Products\ProductAttribute', 'product_id')
            ->where('attribute_type', 'light-temperature');
    }

    /**
     * Get all panel product of a product.
     */
    public function productSoldByPanels()
    {
        return $this->hasMany('App\Models\Products\Product', 'global_product_id');
    }

    /**
     * Get the quality of a product.
     */
    public function quality()
    {
        return $this->belongsTo('App\Models\Globals\Quality', 'quality_id');
    }
}
