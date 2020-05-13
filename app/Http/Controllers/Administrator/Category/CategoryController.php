<?php

namespace App\Http\Controllers\Administrator\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('administrator.categories.index')
            ->with('categories', $categories);
    }

    public function create()
    {
        return view('administrator.categories.create');
    }

    public function store(Request $request)
    {
        // 
    }

    /**
     * Assume that the request is made using Ajax.
     * Return a view that will be loaded into a modal using JQuery.
     */
    public function edit($id)
    {
        try {
            $category = Category::findOrFail($id);
            $categories = Category::where('id', '!=', $id)
                ->get();

            return view('administrator.categories.partials.edit-category')
                ->with('category', $category)
                ->with('categories', $categories);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['message' => 'Model not found.'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->name = $request->input('category_name');
            $category->slug = Str::slug($request->input('category_name'), '-');
            $category->parent_category_id = $request->input('parent_category_id');
            if ($request->input('featured_category')) {
                $category->featured = 1;
            } else {
                $category->featured = 0;
            }
            $category->save();

            if ($category->save() && $request->file('category_icon')) {
                $image = $request->file('category_icon');
                $imageDestination = public_path('/storage/uploads/images/categories/' . $category->id . '/');
                $imageName = Str::slug($image->getClientOriginalName(), '-');
                $image->move($imageDestination, $imageName);

                $categoryImage = $category->image;

                if ($categoryImage) {
                    $categoryImage->path = 'uploads/images/categories/' . $category->id . '/';
                    $categoryImage->filename = $imageName;
                    $categoryImage->save();
                } else {
                    $category->image()->create([
                        'path' => '/storage/uploads/images/categories/' . $category->id . '/',
                        'filename' => $imageName,
                        'default' => 0
                    ]);
                }
            }

            $response['status'] = 'OK';
            $response['message'] = 'Category successfully updated.';
            $response['item'] = $category;

            return response()->json($response);
        } catch (ModelNotFoundException $exception) {
            return response()->json(['message' => 'Model not found.'], 404);
        }
    }
}
