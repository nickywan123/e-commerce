@extends('layouts.shop.main')

@section('content')
<div class="mt-3">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>No</th>
                        <th>Order Number</th>
                        <th>Store</th>
                        <th>Product</th>
                        <th>Product Information</th>
                        <th>Quantity</th>
                        <th>Amount Paid</th>
                        <th>Order Status</th>
                    </tr>
                    @foreach($orders as $order)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $order->order_id }}</td>
                        <td class="align-middle">{{ $order->panel->userInfo->name }}</td>
                        <td class="align-middle">{{ $order->product->name }}</td>
                        <td class="align-middle text-capitalize">
                            @if($order->product_information["product_color_id"] != null)
                            Color: {{ $order->product_information["product_color_name"] }}
                            <br>
                            @endif
                            @if($order->product_information["product_dimension_id"] != null)
                            Dimension: {{ $order->product_information["product_dimension"] }}
                            <br>
                            @endif
                            @if($order->product_information["product_length_id"] != null)
                            Length: {{ $order->product_information["product_length"] }}
                            @endif
                        </td>
                        <td class="align-middle">{{ $order->product_quantity }} Pcs</td>
                        <td class="align-middle">RM {{ $order->order_price }}</td>
                        <td class="align-middle"> {{ $order->status->name }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection