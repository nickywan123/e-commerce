<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductByPanel extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'panelAccountId' => $this->panel_account_id,
            'description' => $this->product_description,
            'material' => $this->product_material,
            'consistency' => 
        ]
    }
}
