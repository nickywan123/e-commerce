<?php

namespace App\Http\Controllers\API\Shop;

use App\Http\Controllers\API\ResponseController;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\Categories\Category;
use App\Http\Resources\Category\Category as CategoryResource;
use App\Http\Resources\Category\CategoryCollection as CategoryResourceCollection;
use App\Http\Resources\Category\CategoryWithChild as CategoryWithChildResource;

class CategoryController extends ResponseController
{
    /**
     * Return all categories.
     * api/categories/
     */
    public function getCategories(Request $request)
    {
        if ($request->query('products') && $request->query('products') == 'true') {
            try {
                $categories = new CategoryResourceCollection(Category::all());
            } catch (ModelNotFoundException $exception) {
                $error = 'The requested resource couldn\'t be found.';

                return $this->sendError($error, 404);
            }
        } else {
            try {
                $categories = new CategoryResourceCollection(Category::all());

                return $this->sendResponse($categories);
            } catch (ModelNotFoundException $exception) {
                $error = 'The requested resource couldn\'t be found.';

                return $this->sendError($error, 404);
            }
        }
    }

    /**
     * Return a category based on passed id.
     * api/categories/{id}
     */
    public function getCategory(Request $request, $id)
    {
        try {
            $category = new CategoryResource(Category::findOrFail($id));

            return $this->sendResponse($category);
        } catch (ModelNotFoundException $exception) {
            $error = 'The requested resource couldn\'t be found.';

            return $this->sendError($error, 404);
        }
    }

    /**
     * Return a category with other categories belonging to it.
     * api/categories/{id}/childs
     */
    public function getCategoryWithChilds(Request $request, $id)
    {
        try {
            $category = new CategoryWithChildResource(Category::findOrFail($id));

            return $this->sendResponse($category);
        } catch (ModelNotFoundException $exception) {
            $error = 'The requested resource couldn\'t be found.';

            return $this->sendError($error, 404);
        }
    }
}
