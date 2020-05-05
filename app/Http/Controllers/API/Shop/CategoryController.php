<?php

namespace App\Http\Controllers\API\Shop;

use App\Http\Controllers\API\ResponseController;
use App\Models\Categories\Category;
use App\Http\Resources\Category as CategoryResource;
use App\Http\Resources\CategoryCollection as CategoryResourceCollection;
use App\Http\Resources\Image as ImageResource;
use App\Models\Globals\Image;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CategoryController extends ResponseController
{
    /**
     * Return all categories.
     * api/categories/
     */
    public function getCategories()
    {
        $categories = new CategoryResourceCollection(Category::all());

        return $this->sendResponse($categories);
    }

    /**
     * Return a category based on passed id.
     * api/categories/{id}
     */
    public function getCategory($id)
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

        $category = new CategoryResource(Category::find($id));

        return $this->sendResponse($category);
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
