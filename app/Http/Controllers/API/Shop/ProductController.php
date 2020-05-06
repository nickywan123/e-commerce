<?php

namespace App\Http\Controllers\API\Shop;

use App\Http\Controllers\API\ResponseController;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\Globals\Products\Product;
use App\Http\Resources\Product\Product as ProductResource;
use App\Http\Resources\Product\ProductCollection as ProductCollectionResource;


class ProductController extends ResponseController
{
    public function getProducts()
    {
        try {
            $products = Product::all();

            return $this->sendResponse(new ProductCollectionResource($products));
        } catch (ModelNotFoundException $exception) {
            $error = 'The requested resource couldn\'t be found.';

            return $this->sendError($error, 404);
        }
    }

    public function getProduct($id)
    {
        return $product = Product::findOrFail($id)->productSoldByPanels;
        try {
            $product = Product::findOrFail($id);

            return $this->sendResponse(new ProductResource($product));
        } catch (ModelNotFoundException $exception) {
            $error = 'The requested resource couldn\'t be found.';

            return $this->sendError($error, 404);
        }
    }
}
