<?php

namespace App\Http\Controllers\Administrator\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories\Category;

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
}
