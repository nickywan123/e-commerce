<?php

namespace App\Http\Controllers\Banner;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PromotionPage\Banner;

class BannerController extends Controller
{
     public function getBanner(){

        $data = Banner::all();

        return view('shop.index')->with('data', $data);

     }
}
