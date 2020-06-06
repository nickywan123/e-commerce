<?php

namespace App\Models\Users\Panels;

use Illuminate\Database\Eloquent\Model;

class PanelAddress extends Model
{
      // Set table
      protected $table = 'panel_addresses';

      // Set timestamps
      public $timestamps = true;
  
      // Set primary key
      protected $primaryKey = 'id';
  
      // Set mass assignable columns
      protected $fillable = [];

      // Get global states
      public function state(){
        return $this->belongsTo('App\Models\Globals\State', 'state_id');
      }
}
