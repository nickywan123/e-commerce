<?php

namespace App\Models\Purchases;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    // Set table
    protected $table = 'purchases';

    // Set timestamps
    public $timestamps = true;

    // Set primary key
    protected $primaryKey = 'id';

    // Set mass assignable columns
    protected $fillable = [];

    /**
     * Get all the orders belonging to the purchase.
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Purchases\Order', 'purchase_id');
    }

    /**
     * Get user of the purchase.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Users\User', 'user_id');
    }

    public function payments()
    {
        return $this->hasMany('App\Models\Purchases\Payment', 'purchase_number', 'purchase_number');
    }

    public function successfulPayment()
    {
        return $this->hasOne('App\Models\Purchases\Payment', 'purchase_number', 'purchase_number')
            ->where('gateway_response_code', '00');
    }

    public function getFormattedNumber()
    {
        return substr($this->purchase_number, 6);
    }

    public function getFormattedDate()
    {
        return $this->created_at->format('d/m/Y');
    }

    /**
     * Get purchase status.
     */
    public function status()
    {
        return $this->belongsTo('App\Models\Globals\Status', 'purchase_status');
    }

    /**
     * Get dealer info 
     */
    public function dealerInfo()
    {
        return $this->hasOne('App\Models\Users\Dealers\DealerInfo', 'dealer_id');
    }

    /**
     * Get largest purchase number.
     */
    public function scopeLargestPurchaseNumber($query)
    {
        return $query->max('purchase_number');
    }

    /**
     * Get largest receipt number.
     */
    public function scopeLargestReceiptNumber($query)
    {
        return $query->max('receipt_number');
    }

    /**
     * Get state.
     */
    public function state()
    {
        return $this->belongsTo('App\Models\Globals\State', 'state_id');
    }
}
