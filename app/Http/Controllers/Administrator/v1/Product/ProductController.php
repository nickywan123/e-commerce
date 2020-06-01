<?php

namespace App\Http\Controllers\Administrator\v1\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Str;

use App\Models\Globals\Products\Product as GlobalProducts;
use App\Models\Categories\Category;
use App\Models\Globals\Quality;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Handles AJAX request if it exists.
        if ($request->ajax()) {
            $products = new ProductCollectionResource(GlobalProducts::all());

            return response()->json($products, 200);
        }

        // Return view.
        return view('administrator.products.v1.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.products.v1.global.create');
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
    public function edit($id)
    {
        $qualities = Quality::all();
        $categories = Category::all();
        $product = GlobalProducts::findOrFail($id);

        return view('administrator.products.v1.global.edit')
            ->with('qualities', $qualities)
            ->with('categories', $categories)
            ->with('product', $product);
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

        $product = GlobalProducts::findOrFail($id);
        $product->name = $request->input('productName');
        $product->name_slug = Str::slug($request->input('productName'), '-');
        $product->product_code = $request->input('productCode');
        $product->details = $request->input('productDetails');
        $product->description = $request->input('productDescriptions');
        $product->quality_id = $request->input('productQuality');
        if ($request->input('productPublished')) {
            $product->product_status = 1;
        } else {
            $product->product_status = 2;
        }
        $product->save();

        if ($request->file('productImage')) {
            // Get existing default image.
            $defaultImages = $product->images->where('default', 1);

            // Delete if default image exists.
            if ($defaultImages->count() != 0) {
                foreach ($defaultImages as $defaultImage) {
                    $defaultImage->delete();
                }
            }

            // Store new default image.
            $image = $request->file('productImage');
            $imageDestination = public_path('/storage/uploads/images/products/' . $product->id . '/');
            $imageName = $product->id . '-' . 'default' . '.' . $image->getClientOriginalExtension();
            $image->move($imageDestination, $imageName);

            // Create record in DB.
            $product->images()->create([
                'path' => 'uploads/images/products/' . $product->id . '/',
                'filename' => $imageName,
                'default' => 1
            ]);
        }

        if ($request->file('brandLogo')) {
            // Get existing default image.
            $brandImages = $product->images->where('brand', 1);

            // Delete if default image exists.
            if ($brandImages->count() != 0) {
                foreach ($brandImages as $brandImage) {
                    $brandImage->delete();
                }
            }

            // Store new default image.
            $image = $request->file('brandLogo');
            $imageDestination = public_path('/storage/uploads/images/products/' . $product->id . '/');
            $imageName = $product->id . '-' . 'brand' . '.' . $image->getClientOriginalExtension();
            $image->move($imageDestination, $imageName);

            // Create record in DB.
            $product->images()->create([
                'path' => 'uploads/images/products/' . $product->id . '/',
                'filename' => $imageName,
                'brand' => 1
            ]);
        }

        $product->categories()->sync($categories);

        return redirect(route('administrator.products'))
            ->with('success', $product->name . ' saved successfully!');
    }

    /**
     * Return image if exists to DropzoneJS
     */
    public function getImage(Request $request, $id)
    {
        $product = GlobalProducts::find($id);
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

    /**
     * Store image through DropzoneJS
     */
    public function storeImage(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $image = $request->file('file');
        $imageDestination = public_path('/storage/uploads/images/products/' . $product->id . '/');
        $imageName = $product->id . '-' . date('Y-m-d-H:i:s');
        $image->move($imageDestination, $imageName);

        $product->images()->create([
            'path' => 'uploads/images/products/' . $product->id . '/',
            'filename' => $imageName,
            'default' => 0
        ]);

        return response()->json(['success' => $imageName]);
    }

    /**
     * Delete image through DropzoneJS.
     */
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
