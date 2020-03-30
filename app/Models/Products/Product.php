<?php

namespace App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Set table
    protected $table = 'panel_products';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];

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

    public function parentProduct()
    {
        return $this->belongsTo('App\Models\Globals\Products\Product', 'global_product_id');
    }

    /**
     * Get all attribute of a product.
     */
    public function attributes()
    {
        return $this->hasMany('App\Models\Products\ProductAttribute', 'panel_product_id');
    }

    /**
     * Get all color attributes of a product.
     */
    public function colorAttributes()
    {
        return $this->hasMany('App\Models\Products\ProductAttribute', 'panel_product_id')
            ->where('attribute_type', 'color');
    }

    /**
     * Get all size attributes of a product.
     */
    public function sizeAttributes()
    {
        return $this->hasMany('App\Models\Products\ProductAttribute', 'panel_product_id')
            ->where('attribute_type', 'size');
    }

    /**
     * Get all light temperature of a product.
     */
    public function lightTemperatureAttributes()
    {
        return $this->hasMany('App\Models\Products\ProductAttribute', 'panel_product_id')
            ->where('attribute_type', 'light-temperature');
    }

    /**
     * Get the quality of a product.
     */
    public function quality()
    {
        return $this->belongsTo('App\Models\Globals\Quality', 'quality_id');
    }

    /**
     * Get panel info of a product.
     */
    public function panel()
    {
        return $this->belongsTo('App\Models\Users\Panels\PanelInfo', 'panel_account_id', 'account_id');
    }

    /**
     * Get the formatted product's price.
     */
    public function getDecimalPrice()
    {
        return number_format(($this->price / 100), 2);
    }
}
