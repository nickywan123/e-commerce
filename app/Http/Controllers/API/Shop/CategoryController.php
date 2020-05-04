<?php

namespace App\Http\Controllers\API\Shop;

use App\Http\Controllers\API\ResponseController;
use App\Models\Categories\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CategoryController extends ResponseController
{
    /**
     * Return all category.
     */
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
    public function getChildCategory(Request $request, $categoryId)
    {
        try {
            $category = Category::where('id', $categoryId)
                ->firstOrFail();
        }
        // catch(Exception $e) catch any exception
        catch (ModelNotFoundException $e) {
            $error = 'The requested resource is not available.';
            return $this->sendError($error, 404);
        }

        $childCategories = $category->childCategories->load('products');


        return $this->sendResponse($childCategories);
    }


    /***Return category with items**/
    public function test(Request $request, $categoryId)
    {
        try {
            $category = Category::where('id', $categoryId)
                ->firstOrFail();
        }
        // catch(Exception $e) catch any exception
        catch (ModelNotFoundException $e) {
            $error = 'The requested resource is not available.';
            return $this->sendError($error, 404);
        }

        $childCategories = $category->childCategories;

        return $this->fakeResponse($childCategories);
    }
}
