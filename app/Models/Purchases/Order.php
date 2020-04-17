<?php

namespace App\Models\Purchases;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Set table
    protected $table = 'orders';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'order_number';

    // Set incremeneting to false.
    public $incrementing = false;

    // Set mass assignable columns
    protected $fillable = [];

    /**
     * Get all items belongin to the order.
     */
    public function items()
    {
        return $this->hasMany('App\Models\Purchases\Item', 'order_number', 'order_number');
    }

    /**
     * Get purchase of the order.
     */
    public function purchase()
    {
        return $this->belongsTo('App\Models\Purchases\Purchase', 'purchase_id');
    }

    /* Get panel of the order */
    public function panel()
    {
        return $this->belongsTo('App\Models\Users\Panels\PanelInfo', 'panel_id', 'account_id');
    }

    /**
     * Get order status.
     */
    public function status()
    {
        return $this->belongsTo('App\Models\Globals\Status', 'order_status', 'id');
    }

    /***Get pending days of the order ***/
    public function getPendingAttribute()
    {

        if ($this->delivery_date != 'Pending') {
            $date = Carbon::parse($this->created_at);
            $updated_date = Carbon::parse($this->updated_at);
            return $diff = $date->diffInDays($updated_date);
        }
        $date = Carbon::parse($this->created_at);
        $now = Carbon::now();
        return $diff = $date->diffInDays($now);
    }

    /**Get Order Date */
    public function getFormattedDate()
    {
        return $this->created_at->format('d/m/Y');
    }

    /****Get order number of purchase*** */
    public function getOrderNumberFormatted()
    {
        return substr($this->order_number, 0);
    }
}
