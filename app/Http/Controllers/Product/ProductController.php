<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Amount of product in cart
        // Amount of product in wishlist
        // Categories & sub-categories
        // Categories & sub-categories image with name
        return view('app.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('product_name');
        $product->price = $request->input('product_price');
        $product->summary = $request->input('product_summary');
        $product->description = $request->input('product_desc');
        $product->summary = $request->input('product_summary');
        $product->colors->color_name = $request->input('product_color');
        $product->lengths->length = $request->input('product_length');
        $product->dimensions->width = $request->input('width');
        $product->dimensions->height = $request->input('height');
        $product->dimensions->depth = $request->input('depth');
        $product->dimensions->measurement_unit = $request->input('product_measurement');
        $product->lengths->measurement_unit = $request->input('product_measurement');
        $product->images->url = $request->input('img');
        $product->save();
        if ($product) {
            dd('Success');
        } else {
            dd('Fail');
        }

        // $name = $request->input('name');
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
        //
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
        //
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
