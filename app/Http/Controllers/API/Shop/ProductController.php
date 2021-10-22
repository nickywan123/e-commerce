<?php

namespace App\Http\Controllers\API\Shop;

use App\Http\Controllers\API\ResponseController;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\Globals\Products\Product;
use App\Models\Products\Product as PanelProduct;
use App\Http\Resources\Product\Product as ProductResource;
use App\Http\Resources\Product\ProductByPanel;
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
        try {
            $product = Product::findOrFail($id);

            return $this->sendResponse(new ProductResource($product));
        } catch (ModelNotFoundException $exception) {
            $error = 'The requested resource couldn\'t be found.';

            return $this->sendError($error, 404);
        }
    }

    public function getPanelProduct($id, $panel)
    {
        try {
            $product = PanelProduct::where('global_product_id', $id)
                ->where('panel_account_id', $panel)
                ->firstOrFail();

            return $this->sendResponse(new ProductByPanel($product));
        } catch (ModelNotFoundException $exception) {
            $error = 'The requested resource couldn\'t be found.';

            return $this->sendError($error, 404);
        }
    }
}
