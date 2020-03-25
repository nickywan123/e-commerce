@extends('layouts.shop.main')

@section('content')
<div class="mt-3">
    <div class="container" style="margin-top: 50px;">
        <h3>Your Purchases <small>(WIP)</small></h3>
        <div class="card">
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
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $purchase->purchase_number }}</td>
                        <td class="align-middle">
                            <ul>
                                @foreach($purchase->orders as $order)
                                @foreach($order->items as $item)
                                <li>{{ $item->product->name }} x {{ $item->quantity }}</li>
                                @endforeach
                                @endforeach
                            </ul>
                        </td>
                        <td class="align-middle">
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