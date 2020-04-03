<?php

namespace App\Http\Controllers\Order;

use App\Models\Orders\Order;
use Illuminate\Http\Request;
use App\Models\Purchases\Purchase;
use App\Http\Controllers\Controller;

class OrderController extends Controller
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
    public function show(Request $request)
    {
        if (! $request->hasValidSignature()) {
            abort(401);
        }
       
        return view('qr.confirm-order')->
        with(['purchase'=>Purchase::where('purchase_num', $request->purchase_num)->get()]);
     
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

        $order = new Order();
        $order = Order::findOrFail($id);
        $order->delivery_date = $request->input('delivery_date');
        $order->order_status = $request->input('status');
        $order->save();
        if ($order) {
            return back()->with(['successful_message' => 'Order updated successfully']);
        } else {
            return back()->with(['error_message' => 'Failed to update order']);
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
