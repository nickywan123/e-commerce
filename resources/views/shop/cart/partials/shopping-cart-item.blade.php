<!-- PHP variables -->
<?php
$totalPrice = 10000;
?>
<!-- If there's no item in cart, show message -->
@if($cartItems->count() == 0)
<div class="col-12 p-1 m-0">
    <div class="card border-radius-0 mb-2 p-2">
        <div class="row no-gutters py-2">
            <div class="col-12 px-1 text-center">
                <p class="m-2 h5">There's no item in your cart.</p>
                <a href="/shop" class="btn bjsh-btn-gradient">Continue Shopping</a>
            </div>

        </div>
    </div>
</div>
@else
<div class="col-12 col-md-8 p-1 m-0">
    <!-- <div class="card border-radius-0 mb-2 p-2">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Select All (3 Items)</label>
        </div>
    </div> -->
    @foreach($cartItems as $cartItem)
<<<<<<< HEAD
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">

                <div class="col-4">
                    <img class="responsive-img" src="{{ asset('storage/' . $cartItem->product->parentProduct->images[0]->path . $cartItem->product->parentProduct->images[0]->filename) }}" alt="">
                </div>

                <div class="col-8">
                    <button class="btn btn-sm btn-danger float-right" id="DeleteCartItem" value="{{ $cartItem->id }}">Delete</button>
                    <h4 style="width: 80%;">{{ $cartItem->product->parentProduct->name }}</h4>
                    <p>x {{ $cartItem->quantity }}</p>
                    <h5>RM {{ $cartItem->getDecimalTotalPrice() }}</h5>

                    <div>
                        <ul class="list-unstyled">
                            @if(array_key_exists('product_color', $cartItem->product_information))
                            <li class="text-capitalize">Color: {{ $cartItem->product_information['product_color'] }}</li>
                            @endif
                            @if(array_key_exists('product_size', $cartItem->product_information))
                            <li class="text-capitalize">Size: {{ $cartItem->product_information['product_size'] }}</li>
                            @endif
                            @if(array_key_exists('product_temperature', $cartItem->product_information))
                            <li class="text-capitalize">Color Temperature: {{ $cartItem->product_information['product_temperature'] }}</li>
                            @endif
                            @if(array_key_exists('product_temperature', $cartItem->product_information))
                            <li class="text-capitalize">Sold By: {{ $cartItem->product->panel->company_name }}</li>
                            @endif
                        </ul>
                    </div>

=======
    <div class="card border-radius-0 mb-2 p-2">
        <div class="row no-gutters">
            <div class="col-12 mb-1 px-1">
                <span class="custom-control custom-checkbox my-auto" style="display: none;">
                    <input type="checkbox" name="cartItemId[]" class="custom-control-input item-checkbox" id="item-{{ $cartItem->id }}" value="{{ $cartItem->id }}" checked>
                    <label class="custom-control-label" for="item-{{ $cartItem->id }}"></label>
                </span>
                <span>
                    Sold by - {{ $cartItem->product->panel->company_name }}
                </span>
            </div>
        </div>
        <hr class="m-0">
        <div class="row no-gutters py-2">
            <div class="col-2 px-1">
                <img class="mw-100 rounded d-inline" src="{{ asset('storage/' . $cartItem->product->parentProduct->defaultImage->path . '/' . $cartItem->product->parentProduct->defaultImage->filename) }}" alt="">
            </div>
            <div class="col-6 px-2">
                <a href="/shop/product/{{ $cartItem->product->parentProduct->name_slug}}?panel={{ $cartItem->product->panel_account_id }}">
                    <p class="text-dark" style="font-size: 1.1rem;">
                        {{ $cartItem->product->parentProduct->name }}
                    </p>
                </a>
                <p style="font-size: 0.8rem;">
                    @if(array_key_exists('product_temperature', $cartItem->product_information))
                    {{ $cartItem->product_information['product_temperature'] }},
                    @endif
                    @if(array_key_exists('product_size', $cartItem->product_information))
                    {{ $cartItem->product_information['product_size'] }}
                    @endif
                    @if(array_key_exists('product_color_name', $cartItem->product_information))
                    {{ $cartItem->product_information['product_color_name']}}
                    @endif
                </p>
            </div>
            <div class="col-2 px-2 text-center my-auto">
                <p style="font-size: 1.1rem; color: #f0c230;" class="font-weight-bold my-1">
                    RM {{ $cartItem->product->getDecimalPrice() }}
                </p>
                <p class="my-1">
                    <span class="mx-2">
                        <a href="javascript:void()" id="DeleteCartItem" class="text-decoration-none" data-value="{{ $cartItem->id }}">
                            <i class="fa fa-trash text-muted"></i>
                        </a>
                    </span>
                    <!-- <span class="mx-2">
                        <a href="javascript:void()" class="text-decoration-none">
                            <i class="fa fa-heart text-muted"></i>
                        </a>
                        </button>
                    </span> -->
                </p>
            </div>
            <div class="col-2 my-auto">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="minus" data-field="quant[{{ $cartItem->id }}]">
                            <span class="fa fa-minus"></span>
                        </button>
                    </span>
                    <input type="text" name="quant[{{ $cartItem->id }}]" class="form-control input-number" value="{{ $cartItem->quantity }}" min="1" max="10" data-item-id="{{ $cartItem->id }}">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[{{ $cartItem->id }}]">
                            <span class="fa fa-plus"></span>
                        </button>
                    </span>
>>>>>>> development
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="col-12 col-md-4 p-1 m-0">
    <div class="card border-radius-0">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <p class="h5 mb-2">Order Summary</p>
                    <hr class="my-1">
                </div>
            </div>

            <div class="row mt-2 mb-1">
                <div class="col-6">
                    <p style="font-size: 1.05rem;" class="text-muted m-0">Subtotal <span>({{ $cartItems->sum('quantity') }} Items)</span></p>
                </div>
                <div class="col-6 text-right">
                    <?php
                    $subtotalPrice = 0;

                    foreach ($cartItems as $cartItem) {
                        $subtotalPrice = $subtotalPrice + $cartItem->subtotal_price;
                    }
                    ?>
                    <p style="font-size: 1.05rem;" class="m-0">RM {{ number_format(($subtotalPrice / 100), 2) }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <p style="font-size: 1.05rem;" class="text-muted">Shipping Fee</p>
                </div>
                <div class="col-6 text-right">
                    <?php
                    $shippingFee = 0;

                    foreach ($cartItems as $cartItem) {
                        $shippingFee = $shippingFee + $cartItem->delivery_fee;
                    }
                    ?>
                    <p style="font-size: 1.05rem;">RM {{ number_format(($shippingFee / 100), 2) }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <p style="font-size: 1.05rem;" class="text-muted">Installation Fee</p>
                </div>
                <div class="col-6 text-right">
                    <?php
                    $installationFee = 0;

                    foreach ($cartItems as $cartItem) {
                        $installationFee = $installationFee + $cartItem->installation_fee;
                    }
                    ?>
                    <p style="font-size: 1.05rem;">RM {{ number_format(($installationFee / 100), 2) }}</p>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-6">
                    <p style="font-size: 1.1rem;">Total</p>
                </div>
                <div class="col-6 text-right">
                    <?php
                    $totalPrice = $subtotalPrice + $shippingFee + $installationFee;
                    ?>
                    <p style="font-size: 1.15rem;">RM {{ number_format(($totalPrice / 100), 2) }}</p>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <button class="btn bjsh-btn-gradient d-block w-100 text-uppercase" type="submit">Proceed To Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endif