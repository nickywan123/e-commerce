@extends('layouts.shop.main')

@section('content')
<div class="mt-3" style="min-height: 100vh;">
    <div class="container" style="margin-top: 50px;">
        <h3>Your Purchases <small>(WIP)</small></h3>
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>No</th>
                        <th>Invoice Number</th>
                        <th>Items</th>
                        <th>Amount Paid</th>
                    </tr>
                    @foreach($purchases as $purchase)
                    <tr>
                        <td class="align-top">{{ $loop->iteration }}</td>
                        <td class="font-weight-bold align-top">{{ $purchase->purchase_number }}</td>
                        <td class="align-top" style="max-width: 400px;">
                            <ul>
                                @foreach($purchase->orders as $order)
                                @foreach($order->items as $item)
                                <li>
                                    <div class="row mb-2">
                                        <div class="col-2 my-auto">
                                            <img class="responsive-img p-1" src="{{ asset('storage/' . $item->product->parentProduct->images[0]->path . $item->product->parentProduct->images[0]->filename) }}" alt="">
                                        </div>
                                        <div class="col-10 my-auto">
                                            <p class="mb-0 font-weight-bold">{{ $item->product->parentProduct->name }}</p>
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
                                </li>
                                @endforeach
                                @endforeach
                            </ul>
                        </td>
                        <td class="align-top font-weight-bold">
                            <?php
                            $subtotal = 0;
                            ?>
                            @foreach($purchase->orders as $order)
                            @foreach($order->items as $item)
                            <?php
                            $subtotal = $subtotal + $item->subtotal_price;
                            ?>
                            @endforeach
                            @endforeach
                            <?php echo 'RM ' . number_format(($subtotal / 100), 2); ?>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection