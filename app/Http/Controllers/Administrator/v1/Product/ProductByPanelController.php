<?php

namespace App\Http\Controllers\Administrator\v1\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products\ProductAttribute;
use App\Models\Globals\State;
use App\Models\Products\Product;
use App\Models\Products\ProductDelivery;
use App\Models\Users\Panels\PanelInfo;

class ProductByPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $product = Product::findOrFail($id);
        $parentProduct = $product->parentProduct;
        $panels = PanelInfo::all();
        $states = State::all();

        return view('administrator.products.v1.panel.edit')
            ->with('product', $product)
            ->with('parentProduct', $parentProduct)
            ->with('panels', $panels)
            ->with('states', $states);
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
        // return $request;
        $product = Product::findOrFail($id);
        $product->panel_account_id = $request->input('panel_id');
        $product->price = str_replace('.', '', $request->input('price'));
        $product->member_price = str_replace('.', '', $request->input('member_price'));
        $product->origin_state_id = $request->input('ships_from');
        $product->product_description = $request->input('product_description');
        $product->product_material = $request->input('product_material');
        $product->product_consistency = $request->input('product_consistency');
        $product->product_package = $request->input('product_package');
        $product->save();

        $productAttributes = $product->attributes;

        foreach ($productAttributes as $productAttribute) {
            $productAttribute->delete();
        }

        foreach ($request->input('product_variation') as $key => $attributeType) {
            $attribute = new ProductAttribute;
            $attribute->panel_product_id = $product->id;
            $attribute->attribute_type = $attributeType;
            $attribute->attribute_name = $request->input('product_variation_name')[$key];
            $attribute->price = ($request->input('product_variation_price')[$key] != null) ? str_replace('.', '', $request->input('product_variation_price')[$key]) : 0;
            $attribute->member_price = ($request->input('product_variation_member_price')[$key] != null) ? str_replace('.', '', $request->input('product_variation_member_price')[$key]) : 0;
            $attribute->save();
        }

        $productDeliveries = $product->deliveries;

        foreach ($productDeliveries as $productDelivery) {
            $productDelivery->delete();
        }

        foreach ($request->input('available_in') as $key => $availableIn) {
            $delivery = new ProductDelivery;
            $delivery->state_id = $availableIn;
            $delivery->panel_product_id = $product->id;
            $delivery->delivery_fee = ($request->input('available_in_price')[$key] != null) ? str_replace('.', '', $request->input('available_in_price')[$key]) : 0;
            $delivery->save();
        }
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
