<?php

namespace App\Http\Resources\Category;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Image\Image as ImageResource;
use App\Http\Resources\Product\ProductCollection as ProductCollectionResource;

class CategoryWithProduct extends JsonResource
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
            'name' => $this->name,
            'parentCategoryId' => $this->parent_category_id,
            'image' => new ImageResource($this->image),
            'products' => new ProductCollectionResource($this->products),
        ];
    }
}
