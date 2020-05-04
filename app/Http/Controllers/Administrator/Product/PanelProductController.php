<?php

namespace App\Http\Controllers\Administrator\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Globals\Products\Product as GlobalProduct;
use App\Models\Products\Product;
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
