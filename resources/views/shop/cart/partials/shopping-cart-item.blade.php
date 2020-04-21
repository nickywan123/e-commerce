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
<!-- <div class="card border-radius-0 mb-2 p-2">
    <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="customCheck1">
        <label class="custom-control-label" for="customCheck1">Select All ( {{ $cartItems->count() }} Items)</label>
    </div>
</div> -->
@foreach($cartItems as $cartItem)
<div class="card border-radius-0 mb-2 p-2">
    <div class="row no-gutters">
        <div class="col-12 mb-1 px-1">
            <span class="custom-control custom-checkbox my-auto d-inline">
                <input type="checkbox" name="cartItemId[]" class="custom-control-input item-checkbox" id="item-{{ $cartItem->id }}" value="{{ $cartItem->id }}" data-unit-price="{{ $cartItem->unit_price }}" data-quantity="{{ $cartItem->quantity }}" data-shipping-price="{{ $cartItem->delivery_fee }}" data-installation-price="{{ $cartItem->installation_fee }}">
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
        <div class="col-10 col-md-6 px-2 mb-0">
            <a href="/shop/product/{{ $cartItem->product->parentProduct->name_slug}}?panel={{ $cartItem->product->panel_account_id }}">
                <p class="text-dark text-left" style="font-size: 1.1rem;">
                    {{ $cartItem->product->parentProduct->name }}
                </p>
            </a>
            <p class="text-left" style="font-size: 0.8rem;">
                @if(array_key_exists('product_temperature', $cartItem->product_information))
                {{ $cartItem->product_information['product_temperature'] }},
                @endif
                @if(array_key_exists('product_size', $cartItem->product_information))
                {{ $cartItem->product_information['product_size'] }},
                @endif
                @if(array_key_exists('product_color_name', $cartItem->product_information))
                {{ $cartItem->product_information['product_color_name']}}
                @endif
            </p>
        </div>
        <div class="col-6 col-md-2 px-2 text-center my-auto">
            <p style="font-size: 1.1rem; color: #f0c230;" class="font-weight-bold my-1">
                RM {{ number_format(($cartItem->unit_price / 100), 2) }}
            </p>
            <p class="my-1">
                <span class="mx-2">
                    <a href="javascript:void()" id="DeleteCartItem" class="text-decoration-none" data-value="{{ $cartItem->id }}">
                        <i class="fa fa-trash text-muted"></i>
                    </a>
                </span>
                <!-- TODO: Add to favorite. -->
                <!-- <span class="mx-2">
                        <a href="javascript:void()" class="text-decoration-none">
                            <i class="fa fa-heart text-muted"></i>
                        </a>
                        </button>
                    </span> -->
            </p>
        </div>
        <div class="col-6 col-md-2 my-auto">
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
            </div>
        </div>
    </div>
</div>
@endforeach
@endif