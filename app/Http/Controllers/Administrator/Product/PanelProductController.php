<?php

namespace App\Http\Controllers\Administrator\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Globals\Products\Product as GlobalProduct;
use App\Models\Products\Product;
use App\Models\Products\ProductAttribute;
use App\Models\Users\Panels\PanelInfo;

class PanelProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $globalProducts = GlobalProduct::where('product_status', '!=', '0')
            ->orWhere('product_status', '!=', '2')
            ->get();
        $panelProducts = Product::all();
        return view('administrator.products.panel.index')
            ->with('panelProducts', $panelProducts)
            ->with('globalProducts', $globalProducts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $product = GlobalProduct::find($request->input('new_product_id'));
        $panels = PanelInfo::all();
        return view('administrator.products.panel.create')
            ->with('product', $product)
            ->with('panels', $panels);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newProduct = new Product;
        $newProduct->global_product_id = $request->input('global_product_id');
        $newProduct->panel_account_id = $request->input('panel_id');
        $newProduct->product_description = $request->input('product_description');
        $newProduct->product_material = $request->input('product_material');
        $newProduct->product_consistency = $request->input('product_consistency');
        $newProduct->product_package = $request->input('product_package');
        $newProduct->price = $request->input('price');
        $newProduct->member_price = $request->input('member_price');
        $newProduct->delivery_fee = $request->input('delivery_fee');
        $newProduct->installation_fee = $request->input('installation_fee');
        $newProduct->save();

        foreach ($request->input('attribute_type') as $key => $attributeType) {
            $attribute = new ProductAttribute;
            $attribute->panel_product_id = $newProduct->id;
            $attribute->attribute_type = $attributeType;
            $attribute->attribute_name = $request->input('attribute_name')[$key];
            $attribute->color_hex = $request->input('color_hex')[$key];
            $attribute->price = $request->input('attribute_price')[$key];
            $attribute->member_price = $request->input('attribute_member_price')[$key];
            $attribute->save();
        }

        if ($newProduct->save()) {
            return redirect('/administrator/products/panels')
                ->with('success', 'Product created for panel ' . $newProduct->panel->company_name);
        } else {
            return redirect()
                ->back()
                ->with('error', 'Something went wrong.');
        }
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
