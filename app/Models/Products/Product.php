<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Set table
    protected $table = 'products';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [
        'unique_id',
        'name',
        'price',
        'slug',
        'summary',
        'description',
        'quality',
        'panel_id',
        'amount_sold'
    ];

    /**
     * Get all of the product's images.
     *
     * Example Create = $product->images()->create(['key' => 'value']);
     * Example Retrieve = $product->images;
     */
    // TODO: Add default_image column.
    public function images()
    {
        return $this->morphMany('App\Models\Globals\Image', 'imageable');
    }

    /**
     * Get product's seller/panel.
     */
    public function panel()
    {
        return $this->belongsTo('App\User', 'panel_id'); // TODO: Change to hasOne.
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
     * Get product's sub categories.
     */
    public function subCategories()
    {
        return $this->belongsToMany(
            'App\Models\Categories\SubCategory',
            'piv_product_subcategory',
            'product_id',
            'subcategory_id'
        );
    }

    /**
     * get product's product type.
     */
    public function productTypes()
    {
        return $this->belongsToMany(
            'App\Models\Categories\ProductType',
            'piv_product_type',
            'product_id',
            'product_type_id'
        );
    }

    /**
     * Get all of the product's colors.
     */
    public function colors()
    {
        return $this->hasMany('App\Models\Products\ProductColor', 'product_id', 'id');
    }

    /**
     * Get all of the product's dimensions.
     */
    public function dimensions()
    {
        return $this->hasMany('App\Models\Products\ProductDimension', 'product_id', 'id');
    }

    /**
     * Get all of the product's lengths.
     */
    public function lengths()
    {
        return $this->hasMany('App\Models\Products\ProductLength', 'product_id', 'id');
    }

    public function getDefaultColor()
    {
        return $this->colors->where('is_default', 1)->first();
    }
}
