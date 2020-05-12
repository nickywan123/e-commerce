<?php

namespace App\Http\Controllers\Administrator\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categories\Category;
use App\Models\Globals\Products\Product;
use App\Models\Globals\Products\ProductAttribute;
use Illuminate\Support\Facades\File;
use Str;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('permission:manage products');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('administrator.products.global.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $newProduct = new Product();
        $newProduct->product_status = 0;
        $newProduct->save();

        return redirect(route('administrator.products.edit', ['productId' => $newProduct->id]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function storeImage(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $image = $request->file('file');
        $imageDestination = public_path('/storage/uploads/images/products/' . $product->id . '/');
        $imageName = $image->getClientOriginalName();
        $image->move($imageDestination, $imageName);

        $product->images()->create([
            'path' => 'uploads/images/products/' . $product->id . '/',
            'filename' => $imageName,
            'default' => 0
        ]);

        return response()->json(['success' => $imageName]);
    }

    public function deleteImage(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $path = public_path('/storage/uploads/images/products/' . $product->id . '/');
        $filename = $request->input('filename');
        if (File::exists($path . $filename)) {
            File::delete($path . $filename);
            $message = 'true';
        } else {
            $message = 'false';
        }
        $product->images()->where('filename', $filename)->delete();
        return $filename;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::topLevelCategory()->sortBy('name');

        if ($request->ajax()) {
            $result  = array();
            $storeFolder = public_path('/storage/uploads/images/products/' . $product->id . '/');

            $files = scandir($storeFolder);

            if (false !== $files) {
                foreach ($files as $file) {
                    if ('.' != $file && '..' != $file) {       //2
                        $obj['name'] = $file;
                        $obj['size'] = filesize($storeFolder . '/' . $file);
                        $result[] = $obj;
                    }
                }
            }

            return response()->json($result);
        }

        return view('administrator.products.global.edit')
            ->with('product', $product)
            ->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categories =  $request->input('categories');
        $postAttributes = $request->input('attribute_id');

        $product = Product::findOrFail($id);
        $product->name = $request->input('product_name');
        $product->name_slug = Str::slug($request->input('product_name'), '-');
        $product->product_code = $request->input('product_code');
        $product->details = $request->input('product_details');
        $product->description = $request->input('product_description');
        $product->quality_id = $request->input('product_quality');
        $product->product_status = 2;
        $product->save();

        $product->categories()->sync($categories);

        $productAttributes = $product->attributes;

        foreach ($productAttributes as $productAttribute) {
            $productAttribute->delete();
        }

        foreach ($request->input('attribute_type') as $key => $attributeType) {
            $newAttribute = new ProductAttribute;
            $newAttribute->product_id = $product->id;
            $newAttribute->attribute_type = $attributeType;
            $newAttribute->attribute_name = $request->input('attribute_name')[$key];
            $newAttribute->color_hex = $request->input('color_hex')[$key];
            $newAttribute->save();
        }

        return redirect('/administrator/products');
    }

    public function publishProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->product_status = 1;
        $product->save();

        return redirect('/administrator/products');
    }

    public function unpublishProduct(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->product_status = 2;
        $product->save();

        return redirect('/administrator/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
