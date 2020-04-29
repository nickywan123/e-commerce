<?php

namespace App\Http\Controllers\API\Shop;

use App\Http\Controllers\API\ResponseController;
use App\Models\Categories\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CategoryController extends ResponseController
{
    public function getCategories(Request $request)
    {
        try {
            $category = Category::all();
        } catch (ModelNotFoundException $e) {
            $error = 'The requested resource is not available.';
            return $this->sendError($error, 404);
        }

        return $this->sendResponse($category);
    }

    /**
     * Return category with products, product images, product sold by panels.
     */
    public function getCategoryWithChildAndProduct(Request $request, $categoryId)
    {
        try {
            $category = Category::where('id', $categoryId)
                ->with('childCategories')
                ->with('products.images')
                ->with('products.productSoldByPanels')
                ->firstOrFail();
        }
        // catch(Exception $e) catch any exception
        catch (ModelNotFoundException $e) {
            $error = 'The requested resource is not available.';
            return $this->sendError($error, 404);
        }

        return $this->sendResponse($category);
    }
}
