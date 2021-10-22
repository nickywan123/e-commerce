<?php

namespace App\Models\Users\Panels;

use Illuminate\Database\Eloquent\Model;

class PanelCategories extends Model
{
    // Set table
    protected $table = 'panel_categories';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'user_id';

    // Set mass assignable columns
    protected $fillable = [];

    /**
     * Get panel information.
     */
    public function panelInfo()
    {
        return $this->belongsTo('App\Models\Users\Panels\PanelInfo', 'account_id');
    }

    /**
     * Get category information.
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Categories\Category', 'category_id');
    }
}
