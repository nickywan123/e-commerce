@extends('layouts.shop.main')

@section('content')
<div class="container" style="position: relative; min-height: 85vh;">
    <div class="card container" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">
        <div class="card-body">
            <h1 class="text-center">
                Thank you! Your order has been placed.
            </h1>
            <h3 class="text-center">
                Your order number is {{ $purchaseNumberFormatted }}.
            </h3>
            <div class="text-center mt-3">
                <a class="btn bjsh-btn-gradient" href="/shop">Continue Shopping</a>
                <a class="btn bjsh-btn-gradient" href="/shop/dashboard/orders/index">View Orders</a>
            </div>
            <div class="mt-3">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Items</th>
                    </tr>
                    @foreach($purchase->orders as $order)
                    @foreach($order->items as $item)
                    <tr>
                        <td class="align-middle">
                            {{ $loop->iteration }}
                        </td>
                        <td style="max-width: 400px;">
                            <div class="row mb-2">
                                <div class="col-2 my-auto">
                                    <img class="responsive-img p-1" src="{{ asset('storage/' . $item->product->parentProduct->images[0]->path . $item->product->parentProduct->images[0]->filename) }}" alt="">
                                </div>
                                <div class="col-10 my-auto">
                                    <p class="mb-0 font-weight-bold">{{ $item->product->parentProduct->name }} x {{ $item->quantity }}</p>
                                    @if(array_key_exists('product_color', $item->product_information))
                                    <p class="text-capitalize">Color: {{ $item->product_information['product_color'] }}</p>
                                    @endif
                                    @if(array_key_exists('product_size', $item->product_information))
                                    <p class="text-capitalize">Size: {{ $item->product_information['product_size'] }}</p>
                                    @endif
                                    @if(array_key_exists('product_temperature', $item->product_information))
                                    <p class="text-capitalize">Color Temperature: {{ $item->product_information['product_temperature'] }}</p>
                                    @endif
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection