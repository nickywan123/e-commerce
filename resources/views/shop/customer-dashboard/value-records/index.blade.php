@extends('layouts.management.main-customer')



@section('content')

{{--Desktop layout--}}

<div class="mt-3 hidden-sm" style="min-height: 100vh;">
    <div class="container">
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
            <a href="/shop/dashboard/orders/index" class="orders-text-style "
                style="border-bottom: 2px solid rgb(250, 172, 24);"><i><strong>All
                        Orders</strong></i></a>
            <a href="#" class="orders-text-style"><i><strong>Open Orders</strong></i></a>
            <a href="/shop/dashboard/orders/orders-status" class="orders-text-style"><i><strong>Order
                        Status</strong></i></a>
            <a href="#" class="orders-text-style"><i><strong>Return Orders</strong></i></a>
            <a href="#" class="orders-text-style"><i><strong>Pending Star Ratings</strong></i></a>
        </div>
        <hr>
        @if(!$purchases->isEmpty())
        <div class="card shadow-sm">
            <div class="card-body">
                @foreach($purchases as $purchase)
                <h4 style="font-weight:bold; color:rgb(250, 172, 24);">Purchase #: {{ $purchase->getFormattedNumber()}}
                </h4>
                @foreach($purchase->orders as $order)
                <table class="table ">
                    <tr style="background-color:rgba(0, 0, 0, 0.05);">

                        <td style="font-weight: bold;">
                            <div> Order #:{{ $order->order_number }}</div>
                            <div> Order Date:{{ $purchase->purchase_date }}</div>
                        </td>

                        <td style="font-weight: bold;">
                            <div>Courier Service: xxxxxxxx</div>
                            <div>WayBill No: xxxxxxxxx</div>
                        </td>
                        <td style="font-weight: bold;">

                            <div style="display:none;">Order Total:
                                <?php echo 'RM ' . number_format(($purchase->purchase_amount / 100), 2); ?>
                            </div>

                            <div>
                                @if ($order->order_status === 1000)
                                Order Status: Record Created
                                @elseif ($order->order_status === 1001)
                                Order Status: Order Placed
                                @elseif($order->order_status === 1002)
                                Order Status: Order Shipped
                                @else
                                Order Status: Order Delivered
                                @endif
                            </div>
                        </td>

                        <td style="">
                            <div><a href="/orders/invoice/{{$purchase->purchase_number}}">Invoice</a></div>
                            <div><a href="/orders/receipt/{{$purchase->purchase_number}}">Receipt</a></div>
                        </td>
                    </tr>
                    <!-- Starting Item Template -->
                    @foreach($order->items as $item)
                    <tr>
                        <td class="align-top" style="max-width: 400px;">

                            <div class="row mb-5">
                                <div class="col-4 my-auto">
                                    <a
                                        href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}">
                                        <img class="responsive-img p-1"
                                            style="height:100px;width:100px; max-width:200px;"
                                            src="{{ asset('storage/' . $item->product->parentProduct->images[0]->path . $item->product->parentProduct->images[0]->filename) }}"
                                            alt="Product Image">
                                    </a>
                                </div>
                                <div class="col-8 my-auto">
                                    <a style="color:black; font-weight:bold;"
                                        href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}">{{ $item->product->parentProduct->name }}</a>

                                    <p class="text-capitalize">Sold by:
                                        {{ $item->product->panel->company_name }}</p>
                                    <p style="display:none;" class="text-capitalize">Unit Price:
                                        <?php echo 'RM ' . number_format(($item->product->price / 100), 2); ?>
                                    </p>
                                    <button class="text-capitalize bjsh-btn-gradient"><a
                                            style="color:black; text-decoration:none;"
                                            href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}">
                                            Buy It Again</a></button>
                                </div>
                            </div>

                        </td>
                        <td class="font-weight-bold" style=" max-width: 300px;">

                            <div class="row mb-5">
                                <div class="col-12 ">
                                    <p>Quantity: {{$item->quantity}}</p>
                                </div>
                                <div class="col-12 ">
                                    <p style="font-family:cursive;">Estimate Delivery Date: {{$order->delivery_date}}
                                    </p>
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
                            {{-- <div class="row">
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
                            </div> --}}

                        </td>
                    </tr>
                    @endforeach
                    <!-- Ending Item Template -->
                </table>
                @endforeach
                @endforeach
            </div>
        </div>
        @else
        <div>There are no orders found.</div>
        @endif
    </div>
</div>


{{---MOBILE LAYOUT-----}}



<div class="mt-3 mt-md-0 hidden-md" style="min-height: 100vh;">
    <div class="container" style="margin-top: 50px;">
        <div class="row">        
            <div class="row">
                <div class="col-7  mt-4">
                    <h3 style="font-size:20px; font-family: Nunito; "><strong class="text-font-family">Value
                            Records</strong></h3>          
                </div>
                <div class="dropdown col-4 mt-3">
                    <button class="btn btn-secondary  bjsh-btn-gradient" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="background-color:rgb(250, 172, 24); color:black;">
                        Filter Orders <i style="font-size: 10px;" class="fa fa-arrow-down"> </i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">All Orders</a>
                        <a class="dropdown-item" href="#">Open Orders</a>
                        <a class="dropdown-item" href="#">Order Status</a>
                        <a class="dropdown-item" href="#">Return Orders</a>
                        <a class="dropdown-item" href="#">Pending Star Ratings</a>
                    </div>
            
                </div>
            </div>


            @if(!$purchases->isEmpty())
            <div class="card ">
                <div class="card-body">
                  
                
                      
                    @foreach($purchases as $purchase)
                    <div class="row">
                        <div class="col-10">
                            <h4 style="font-weight:bold; font-size:1.0rem; color:rgb(250, 172, 24);">Purchase #:
                                {{ $purchase->getFormattedNumber()}}</h4>
                        </div>
                    </div>

                    @foreach($purchase->orders as $order)


                    <div class="row">
                        <div class="col-9">
                            Order #:{{ $order->order_number }}


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            Order Date:{{ $purchase->purchase_date }}
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-9">
                            Courier Service: Placeholder
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8">
                            WayBill No: Placeholder
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-9">
                            @if ($order->order_status === 1000)
                            Order Status: Record Created
                            @elseif ($order->order_status === 1001)
                            Order Status: Order Placed
                            @elseif($order->order_status === 1002)
                            Order Status: Order Shipped
                            @else
                            Order Status: Order Delivered
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <a href="/orders/invoiceinvoice/{{$purchase->purchase_number}}">Invoice</a>
                            <a style="margin-left: 10px;"
                                href="/orders/receipt/{{$purchase->purchase_number}}">Receipt</a>
                        </div>
                    </div>



                    <!-- Starting Item Template -->
                    @foreach($order->items as $item)

                    <div class="row ">
                        <div class="col-12 ">
                            <a href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}">
                                <img class="responsive-img p-1" style="height:300px;width:300px; max-width:100%;"
                                    src="{{ asset('storage/' . $item->product->parentProduct->images[0]->path . $item->product->parentProduct->images[0]->filename) }}"
                                    alt="Product Image">
                            </a>
                        </div>

                    </div>

                    <div class="row">
                        <div class=" col-12">
                            <a style="color:black; font-weight:bold;"
                            href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}">{{ $item->product->parentProduct->name }}</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <p class="text-capitalize">Sold by: {{ $item->product->panel->company_name }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <p>Quantity: {{$item->quantity}}</p>
                            <button class="text-capitalize bjsh-btn-gradient"><a
                                style="color:black; text-decoration:none;"
                                href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}">
                                Buy It Again</a></button>
                                
                        </div>
                    </div>
                      

                    
                   
                        <div class="row ">
                            <div class="col-12 ">
                                <p style="font-family:cursive;">Estimate Delivery Date: {{$order->delivery_date}} </p>
                            </div>
                        </div>
                  




                       
                        <div class="row">
                            <div class="col-12 ">
                                <span style="min-width:87px; display:inline-block">Rate Product</span>
                                <span class="fa fa-star-o "></span>
                                <span class="fa fa-star-o"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="fa fa-star-o"></span>
                                <span class="fa fa-star-o"></span>
                                <button class="text-capitalize bjsh-btn-gradient mt-2">Submit Rating</button>
                            </div>
                        </div>
                    <hr style="background-color:black;">



                        @endforeach
                        <!-- Ending Item Template -->

                        @endforeach
                        @endforeach
                        
                </div>
                @else
                 
                        <div class="row">
                            <div class="col-12">
                                <h4>There are no orders found.</h4>
                            </div>
                            
                        </div>
                       
              
                @endif
            </div>
        </div>
    </div>
   




    <style>
        .dropdown-toggle::after {}


        .orders-text-style {
            color: rgb(250, 172, 24);
            margin-right: 45px;

        }


        .fa.fa-star-o {
            color: rgb(250, 172, 24);
        }


        @media(max-width:767px) {
            .hidden-sm {
                display: none;
            }

        }

        @media(min-width:767px) {
            .hidden-md {
                display: none;
            }
        }


        .text-font-family {
            font-family: cursive;
        }

    </style>




    @endsection
