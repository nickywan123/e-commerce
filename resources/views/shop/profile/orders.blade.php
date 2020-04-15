@extends('layouts.management.main-customer')



@section('content')

<div class="mt-3" style="min-height: 100vh;">
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-9 mt-4">
                <h3 style="font-size:40px; font-family: Nunito;"><strong>Value Records</strong></h3>
            </div>


            <div class="col-md-3 mt-5"><strong>3</strong> orders placed in
                <select style="background-color:lightgrey" name="year">
                    <option value="year">2020 </option>
                    <option value="year">2019 </option>
                    <option value="year">2018 </option>
                </select>
            </div>


        </div>
        <div class="container-fluid" style="margin-top:20px;">
            <a href="#" class="orders-text-style " style="border-bottom: 2px solid rgb(250, 172, 24);"><i><strong>All
                        Orders</strong></i></a>
            <a href="#" class="orders-text-style"><i><strong>Open Orders</strong></i></a>
            <a href="#" class="orders-text-style"><i><strong>Order Status</strong></i></a>
            <a href="#" class="orders-text-style"><i><strong>Return Orders</strong></i></a>
            <a href="#" class="orders-text-style"><i><strong>Pending Star Ratings</strong></i></a>
        </div>
        <hr>
        <div class="card shadow-sm">
            <div class="card-body">
                @foreach($purchases as $purchase)
                @foreach($purchase->orders as $order)
                <table class="table ">
                    <tr style="background-color:rgba(0, 0, 0, 0.05);">

                        <td style="font-weight: bold;">
                            <div> Order #:{{ $purchase->purchase_number }}</div>
                            <div> Order Date:{{ $purchase->purchase_date }}</div>
                        </td>

                        <td style="font-weight: bold;">
                            <div>Courier Service: xxxxxxxx</div>
                            <div>WayBill No: xxxxxxxxx</div>
                        </td>
                        <td style="font-weight: bold;">
                            <div>Order Total: <?php echo 'RM ' . number_format(($purchase->purchase_amount / 100), 2); ?>
                            </div>
                            <div>Order Status: {{$order->order_status}}</div>
                        </td>

                        <td style="">
                            <div><a href="/orders/invoice/{{$purchase->purchase_number}}">Invoice</a></div>
                            <div><a href="#">Receipt</a></div>
                        </td>
                    </tr>
                    <!-- Starting Item Template -->
                    @foreach($order->items as $item)
                    <tr>
                        <td class="align-top" style="max-width: 400px;">
                            <ul>

                                <li>
                                    <div class="row mb-5">
                                        <div class="col-4 my-auto">
                                            <img class="responsive-img p-1" style="height:100px;width:100px; max-width:200px;" src="{{ asset('storage/' . $item->product->parentProduct->images[0]->path . $item->product->parentProduct->images[0]->filename) }}" alt="">
                                        </div>
                                        <div class="col-8 my-auto">
                                            <p class="mb-0 font-weight-bold"><a style="color:black;" href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}">{{ $item->product->parentProduct->name }}</a>
                                            </p>
                                            <p class="text-capitalize">Sold by:
                                                {{ $item->product->panel->company_name }}</p>
                                            <p class="text-capitalize">Unit Price:
                                                <?php echo 'RM ' . number_format(($item->product->price / 100), 2); ?>
                                            </p>
                                            <button class="text-capitalize bjsh-btn-gradient"><a style="color:black; text-decoration:none;" href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}"> Buy It Again</a></button>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </td>
                        <td class="font-weight-bold" style=" max-width: 300px;">

                            <div class="row mb-5">
                                <div class="col-12 ">
                                    <p>Quantity: {{$item->quantity}}</p>
                                </div>
                                <div class="col-12 ">
                                    <p style="font-family:cursive;">Estimate Delivery Date: Pending </p>
                                </div>
                            </div>


                        </td>

                        <td colspan="2" class="font-weight-bold">
                            <div class="row">
                                <div class="col-12 ">
                                    <span style="min-width:87px; display:inline-block">Rate Product</span>
                                    <span class="fa fa-star-o "></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                    <button class="text-capitalize bjsh-btn-gradient">Submit</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="min-width:87px; display:inline-block;">Rate Supplier</span>
                                    <span class="fa fa-star-o "></span>
                                    <span class="fa fa-star-o "></span>
                                    <span class="fa fa-star-o "></span>
                                    <span class="fa fa-star-o "></span>
                                    <span class="fa fa-star-o "></span>
                                    <button class="text-capitalize bjsh-btn-gradient">Submit</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span style="min-width:87px; display:inline-block;">Rate Dealer</span>
                                    <span class="fa fa-star-o "></span>
                                    <span class="fa fa-star-o "></span>
                                    <span class="fa fa-star-o "></span>
                                    <span class="fa fa-star-o "></span>
                                    <span class="fa fa-star-o "></span>
                                    <button class="text-capitalize bjsh-btn-gradient">Submit</button>
                                </div>
                            </div>

                        </td>
                    </tr>
                    @endforeach
                    <!-- Ending Item Template -->
                </table>
                @endforeach
                @endforeach
            </div>
        </div>
    </div>
</div>





<style>
    .orders-text-style {
        color: rgb(250, 172, 24);
        margin-right: 45px;

    }


    .fa.fa-star-o {
        color: rgb(250, 172, 24);
    }
</style>
@endsection