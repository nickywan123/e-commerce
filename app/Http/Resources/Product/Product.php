<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Image\ImageCollection as ImageCollectionResource;
use App\Http\Resources\Product\ProductByPanelCollection as ProductByPanelCollectionResource;

class Product extends JsonResource
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
            'code' => $this->product_code,
            'name' => $this->name,
            'details' => $this->details,
            'description' => $this->description,
            'quality' => $this->quality->name,
            'rating' => $this->product_rating,
            'images' => new ImageCollectionResource($this->images),
            'soldBy' => new ProductByPanelCollectionResource($this->productSoldByPanels),
        ];
    }
}
