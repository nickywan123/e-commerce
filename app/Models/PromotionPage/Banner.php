<?php

namespace App\Models\PromotionPage;


use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
     // Set table
     protected $table = 'banners';

     // Set timestamps
     public $timestamps = true;
 
     // Set primary key
     protected $primaryKey = 'id';
 
     // Set mass assignable columns
     protected $fillable = [
         'text_banner',
         'text_description',
         'photo'
     ];

    
}
