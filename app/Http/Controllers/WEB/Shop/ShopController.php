<?php

namespace App\Http\Controllers\WEB\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories\Category;
use App\Models\Globals\Products\Product;
use App\Models\Products\Product as PanelProduct;

class ShopController extends Controller
{
    public function category(Request $request, $categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->first();

        $products = $category->products;

        return view('shop.catalog.partials.catalog-products')
            ->with('products', $products);
    }

    public function categoryFilter(Request $request, $categorySlug)
    {

        $category = Category::where('slug', $categorySlug)->first();

        $quality = $request->input('quality');

        $products = new Product;

        $products = $products->whereHas('categories', function ($query) use ($categorySlug) {
            $query->where('slug', $categorySlug);
        });

        if ($quality == null) {
            $products->whereHas('quality', function ($query) {
                $query->whereIn('name', ['standard', 'moderate', 'premium']);
            });
        } else {
            $products->whereHas('quality', function ($query) use ($quality) {
                $query->where('name', $quality);
            });
        }

        $products = $products->get();

        return view('shop.catalog.partials.catalog-products')
            ->with('products', $products);
    }

    public function product(Request $request, $productSlug)
    {
        $productSoldByPanels = Product::where('name_slug', $productSlug)->first()->productSoldByPanels;

        return view('shop.partials.product-panels')
            ->with('productSoldByPanels', $productSoldByPanels);
    }

    public function productFilter(Request $request, $productSlug)
    {
        $product = Product::where('name_slug', $productSlug)->first();

        $productColors = $product->colorAttributes;
        $productSizes = $product->sizeAttributes;
        $productTemperatures = $product->lightTemperatureAttributes;

        if ($productColors->count() > 0) {
            $productColorNames = array();

            foreach ($productColors as $productColor) {
                array_push($productColorNames, $productColor->attribute_name);
            }
        }

        if ($productSizes->count() > 0) {
            $productSizeNames = array();

            foreach ($productSizes as $productSize) {
                array_push($productSizeNames, $productSize->attribute_name);
            }
        }

        if ($productTemperatures->count() > 0) {
            $productTemperatureNames = array();

            foreach ($productTemperatures as $productTemperature) {
                array_push($productTemperatureNames, $productTemperature->attribute_name);
            }
        }

        $quality = $request->input('quality');
        $color = $request->input('color');
        $size = $request->input('size');
        $temperature = $request->input('temperature');


        $productSoldByPanels = new PanelProduct;

        $productSoldByPanels = $productSoldByPanels->where('global_product_id', $product->id);

        if ($quality == null) {
            $productSoldByPanels->whereHas('quality', function ($query) {
                $query->whereIn('name', ['standard', 'moderate', 'premium']);
            });
        } else {
            $productSoldByPanels->whereHas('quality', function ($query) use ($quality) {
                $query->where('name', $quality);
            });
        }

        if ($productColors->count() > 0) {
            if ($color == null) {
                $productSoldByPanels->whereHas('colorAttributes', function ($query) use ($productColorNames) {
                    $query->whereIn('attribute_name', $productColorNames);
                });
            } else {
                $productSoldByPanels->whereHas('colorAttributes', function ($query) use ($color) {
                    $query->where('attribute_name', $color);
                });
            }
        }

        if ($productSizes->count() > 0) {
            if ($size == null) {
                $productSoldByPanels->whereHas('sizeAttributes', function ($query) use ($productSizeNames) {
                    $query->whereIn('attribute_name', $productSizeNames);
                });
            } else {
                $productSoldByPanels->whereHas('sizeAttributes', function ($query) use ($size) {
                    $query->where('attribute_name', $size);
                });
            }
        }

        if ($productTemperatures->count() > 0) {
            if ($temperature == null) {
                $productSoldByPanels->whereHas('lightTemperatureAttributes', function ($query) use ($productTemperatureNames) {
                    $query->whereIn('attribute_name', $productTemperatureNames);
                });
            } else {
                $productSoldByPanels->whereHas('lightTemperatureAttributes', function ($query) use ($temperature) {
                    $query->where('attribute_name', $temperature);
                });
            }
        }

        $productSoldByPanels = $productSoldByPanels->get();

        return view('shop.partials.product-panels')
            ->with('productSoldByPanels', $productSoldByPanels);
    }
}
