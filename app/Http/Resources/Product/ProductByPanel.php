<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Http\Resources\Product\VariationCollection as VariationCollectionResource;
use App\Http\Resources\Image\ImageCollection as ImageCollectionResource;

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
            'id' => $this->parentProduct->id,
            'code' => $this->parentProduct->product_code,
            'name' => $this->parentProduct->name,
            'detauls' => $this->parentProduct->details,
            'description' => $this->parentProduct->description,
            'quality' => $this->parentProduct->quality->name,
            'rating' => $this->parentProduct->product_rating,
            'panelAccountId' => $this->panel_account_id,
            'description' => $this->product_description,
            'material' => $this->product_material,
            'consistency' => $this->product_consistency,
            'package' => $this->product_package,
            'price' => $this->price,
            'memberPrice' => $this->member_price,
            'deliveryFee' => $this->delivery_fee,
            'installationFee' => $this->installation_fee,
            'rating' => $this->product_rating,
            'images' => new ImageCollectionResource($this->parentProduct->images),
            'variations' => new VariationCollectionResource($this->attributes),
        ];
    }
}
