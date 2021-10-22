<?php

namespace App\Http\Controllers\API\Shop;

use App\Http\Controllers\API\ResponseController;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\Categories\Category;
use App\Http\Resources\Category\Category as CategoryResource;
use App\Http\Resources\Category\CategoryCollection as CategoryResourceCollection;
use App\Http\Resources\Category\CategoryWithChild as CategoryWithChildResource;
use App\Http\Resources\Category\CategoryWithProduct as CategoryWithProductResource;
use App\Http\Resources\Category\CategoryWithProductCollection as CategoryWithProductCollectionResource;
use App\Http\Resources\Category\CategoryWithChildWithProduct as CategoryWithChildWithProductResource;
use App\Http\Resources\Category\CategoryWithChildWithProductCollection as CategoryWithChildWithProductCollectionResource;

class CategoryController extends ResponseController
{
    /**
     * @OA\Get(
     *      path="/api/categories",
     *      tags={"Categories"},
     *      summary="Get list of categories",
     *      description="Returns list of categories",
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *          ),
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource not found",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *          ),
     *      ),
     * ),
     */
    /**
     * @OA\Get(
     *      path="/api/categories?products=true",
     *      tags={"Categories"},
     *      summary="Get list of categories with products",
     *      description="Returns list of categories with products",
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *          ),
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource not found",
     *          @OA\MediaType(
     *              mediaType="application/json",
     *          ),
     *      ),
     * ),
     * 
     */
    /**
     * Return categories / categories with products.
     * /api/categories & /api/categories?products=true
     */
    public function getCategories(Request $request)
    {
        if ($request->query('products') && $request->query('products') == 'true') {
            try {
                $categories = new CategoryWithProductCollectionResource(Category::all());

                return $this->sendResponse($categories);
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
        if ($request->query('products') && $request->query('products') == 'true') {
            try {
                $category = new CategoryWithProductResource(Category::findOrFail($id));

                return $this->sendResponse($category);
            } catch (ModelNotFoundException $exception) {
                $error = 'The requested resource couldn\'t be found.';

                return $this->sendError($error, 404);
            }
        } else {
            try {
                $category = new CategoryResource(Category::findOrFail($id));

                return $this->sendResponse($category);
            } catch (ModelNotFoundException $exception) {
                $error = 'The requested resource couldn\'t be found.';

                return $this->sendError($error, 404);
            }
        }
    }

    /**
     * Return a category with other categories belonging to it.
     * api/categories/{id}/childs
     */
    public function getCategoryWithChilds(Request $request, $id)
    {
        if ($request->query('products') && $request->query('products') == 'true') {
            try {
                $category = new CategoryWithChildWithProductResource(Category::findOrFail($id));

                return $this->sendResponse($category);
            } catch (ModelNotFoundException $exception) {
                $error = 'The requested resource couldn\'t be found.';

                return $this->sendError($error, 404);
            }
        } else {
            try {
                $category = new CategoryWithChildResource(Category::findOrFail($id));

                return $this->sendResponse($category);
            } catch (ModelNotFoundException $exception) {
                $error = 'The requested resource couldn\'t be found.';

                return $this->sendError($error, 404);
            }
        }
    }
}
