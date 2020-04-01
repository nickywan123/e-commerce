@extends('layouts.shop.main')

@section('content')
<div style="min-height: 100vh;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-center">Offline Payment - Invoice {{ $purchase->purchase_number }}</h5>
                        <div class="row">
                            <div class="col-12">
                                <table class="table table-striped table-bordered">
                                    <tr class="text-center">
                                        <th>Item #</th>
                                        <th>Item Name</th>
                                        <th>Item Price</th>
                                    </tr>
                                    @php
                                        $totalPrice = 0;
                                    @endphp
                                    @foreach($purchase->orders as $order)
                                    @foreach($order->items as $item)
                                    <tr class="text-center">
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="text-left">{{ $item->product->parentProduct->name }}</td>
                                        <td class="text-left">RM {{ $item->product->getDecimalPrice() }}</td>
                                        <?php
                                        
                                        $totalPrice = $totalPrice + $item->product->price;
                                        ?>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                    <tr>
                                        <td colspan="2">Total Price (RM)</td>
                                        <td>
                                            {{ number_format(($totalPrice / 100), 2) }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <form action="/shop/cart/checkout/offline" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Payment Receipt</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                        <small class="form-text text-muted">Please provide your payment receipt.</small>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection