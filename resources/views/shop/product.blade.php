@extends('layouts.shop.main')

@section('content')
@if(Session::has('successful_message'))
<div class="alert alert-success">
    {{ Session::get('successful_message') }}
</div>
@endif

@if(Session::has('error_message'))
<div class="alert alert-danger">
    {{ Session::get('error_message') }}
</div>
@endif

<?php
$userShippingAddress = Auth::user()->userInfo->shippingAddress;
$deliveryInformation = $panelProduct->deliveries->where('state_id', $userShippingAddress->state_id)->first();
?>

<div class="width-80">
    <div class="card w-100" style="border-radius: 0;">
        <div class="">
            <div class="row no-gutters">
                <div class="col-12 col-md-4 p-2 text-center mb-0">
                    <div style="max-width: 25rem; height: auto; margin: 0 auto;">
                        <div class="slider slider-single">
                            @foreach($product->images as $image)
                            <div>
                                <img class="mw-100" src="{{ asset('storage/' . $image->path . '/' . $image->filename) }}" alt="">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <p class="text-capitalize text-muted mt-3 mb-1 text-muted text-center p-1" style="font-size: 11px;">
                        <img class="h-100" src="{{ asset('assets/images/miscellaneous/supplied.png') }}" alt="" style="padding-bottom: 1px;">
                        <span style="text-transform: none;">by</span> {{ $panelProduct->panel->company_name }}
                    </p>

                    <!-- Description -->
                    <p class="mt-2 mb-3 p-1 text-justify" style="font-size: 17px;">
                        {!! $product->details !!}
                    </p>
                </div>

                <div class="col-12 col-md-5 pl-2 pr-2 pt-3 pb-3 text-center text-md-left">
                    <h1 class="pl-0 pr-0 mt-3 text-capitalize my-auto" style="font-size: 1.5rem; margin: 0;">
                        {{ $product->name }}
                        <span style="font-size: 0.6rem; background-color: #ffbf00; padding: 5px; border-top-right-radius: 10px; border-bottom-right-radius: 10px; margin: auto; background: linear-gradient(to right, #ffbf00 40%,#ffd800 95%); ">
                            {{ $product->quality->name }}
                        </span>
                    </h1>


                    <!-- Ratings -->
                    <div class="text-center text-md-left my-auto">
                        @php $rating = $product->product_rating; @endphp

                        @foreach(range(1,5) as $i)
                        <span class="fa-stack" style="width:1em">
                            <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                            @if($rating >0)
                            @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                            @else
                            <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                            @endif
                            @endif
                            @php $rating--; @endphp
                        </span>
                        @endforeach

                        <span class="align-middle ml-2"><small>0 ratings</small></span>
                    </div>

                    <!-- Price -->
                    <div class="mt-3">
                        @if($panelProduct->member_price != 0)
                        <span class="text-muted">Fixed Price</span>
                        <br>
                        @endif
                        <h4 id="price_tag" style="display: inline-block; font-weight: 700; color: #474747;" class="mt-1 mb-3">RM {{ $panelProduct->getDecimalPrice() }}</h4>
                    </div>
                    @if($panelProduct->member_price != 0)
                    <div>
                        <span class="text-muted">DC Customer Price</span>
                        <br>
                        <h4 id="member_price_tag" style="display: inline-block; font-weight: 700; color: #ffbf00;" class="mt-1 mb-3">RM {{ number_format(($panelProduct->member_price / 100), 2) }}</h4>
                    </div>
                    @endif

                    <hr class="mt-1">

                    <!-- Colors -->
                    @if($panelProduct->colorAttributes->count() > 0)
                    <div class="row mb-2">
                        <div class="col-12">
                            <p class="mb-1">Colors</p>
                            <div class="boxed">
                                @foreach($panelProduct->colorAttributes as $key => $colorAttribute)
                                <?php
                                if ($colorAttribute->price != 0) {
                                    $attributePrice = number_format(($colorAttribute->price / 100), 2);
                                } else {
                                    $attributePrice = 0;
                                }

                                if ($colorAttribute->member_price != 0) {
                                    $attributeMemberPrice = number_format(($colorAttribute->member_price / 100), 2);
                                } else {
                                    $attributeMemberPrice = 0;
                                }
                                ?>
                                <input type="radio" id="color-{{ $colorAttribute->id }}" class="panel-product-attributes" name="color" value="{{ $colorAttribute->id }}" {{ ($key == 1) ? 'checked' : '' }} {{ ($attributePrice != 0) ? 'data-price=' . $attributePrice : '' }} {{ ($attributeMemberPrice != 0) ? 'data-member-price' . $attributeMemberPrice : '' }}>
                                <label class="color-options" for="color-{{ $colorAttribute->id }}" style="background-color: {{ $colorAttribute->color_hex }}" data-toggle="tooltip" data-placement="top" title="{{ $colorAttribute->attribute_name }}"></label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Sizes -->
                    @if($panelProduct->sizeAttributes->count() > 0)
                    <div class="row mb-2">
                        <div class="col-12">
                            <p class="mb-1">Sizes</p>
                            <div class="boxed">
                                @foreach($panelProduct->sizeAttributes as $key => $sizeAttribute)
                                <?php
                                if ($sizeAttribute->price != 0) {
                                    $attributePrice = number_format(($sizeAttribute->price / 100), 2);
                                } else {
                                    $attributePrice = 0;
                                }

                                if ($sizeAttribute->member_price != 0) {
                                    $attributeMemberPrice = number_format(($sizeAttribute->member_price / 100), 2);
                                } else {
                                    $attributeMemberPrice = 0;
                                }
                                ?>
                                <input type="radio" id="size-{{ $sizeAttribute->id }}" class="panel-product-attributes" name="size" value="{{ $sizeAttribute->id }}" {{ ($key == 0) ? 'checked' : '' }} {{ ($attributePrice != 0) ? 'data-price=' . $attributePrice : '' }} {{ ($attributeMemberPrice != 0) ? 'data-member-price=' . $attributeMemberPrice : '' }}>
                                <label for="size-{{ $sizeAttribute->id }}">{{ $sizeAttribute->attribute_name }}</label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Light Temperatures -->
                    @if($panelProduct->lightTemperatureAttributes->count() > 0)
                    <div class="row mb-2">
                        <div class="col-12">
                            <p class="mb-1 text-muted">Color Temperature</p>
                            <div class="boxed">
                                @foreach($panelProduct->lightTemperatureAttributes as $key => $lightTemperatureAttribute)
                                <?php
                                if ($lightTemperatureAttribute->price != 0) {
                                    $attributePrice = number_format(($sizeAttribute->price / 100), 2);
                                } else {
                                    $attributePrice = 0;
                                }

                                if ($lightTemperatureAttribute->member_price != 0) {
                                    $attributeMemberPrice = number_format(($sizeAttribute->member_price / 100), 2);
                                } else {
                                    $attributeMemberPrice = 0;
                                }
                                ?>
                                <input type="radio" id="temperature-{{ $lightTemperatureAttribute->id }}" class="panel-product-attributes" name="temperature" value="{{ $lightTemperatureAttribute->id }}" {{ ($key == 0) ? 'checked' : '' }} {{ ($attributePrice != 0) ? 'data-price=' . $attributePrice : '' }} {{ ($attributeMemberPrice != 0) ? 'data-member-price' . $attributeMemberPrice : '' }}>
                                <label for="temperature-{{ $lightTemperatureAttribute->id }}">{{ $lightTemperatureAttribute->attribute_name }}</label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="row mb-3">
                        <div class="col-12">
                            {{-- <p class="mb-3 text-muted">Quantity</p> --}}
                            <div class="input-group mx-auto-sm" style="max-width: 50%;">
                                <p class="mt-2 text-muted">Quantity</p>
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                        <span class="fa fa-minus"></span>
                                    </button>
                                </span>
                                <input type=" text" name="quant[1]" class="form-control input-number" value="1" min="1" max="50" style="font-weight: 700; text-align:center; max-width:25%">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                        <span class="fa fa-plus"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- Add to cart / buy now / add to perfect list -->
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 p-1 m-0">
                            <form id="add-to-cart-form" style="display: inline;" method="POST" action="{{ route('shop.cart.buy-now') }}">
                                @method('POST')
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $panelProduct->id }}">
                                <input type="hidden" id="product_attribute_color_buyNow" name="product_attribute_color" value="">
                                <input type="hidden" id="product_attribute_size_buyNow" name="product_attribute_size" value="">
                                <input type="hidden" id="product_attribute_temperature_buyNow" name="product_attribute_temperature" value="">

                                <input type="hidden" name="productQuantity" value="1">
                                <button type="submit" class="btn btn-md bjsh-btn-product-page font-weight-bold w-100 bjsh-button-mobile " style="border:0px; color: #1a1a1a;" {{ ($deliveryInformation == null) ? 'disabled' : '' }}>Buy Now</button>
                            </form>
                        </div>
                        <div class="col-6 col-md-4 p-1 m-0">
                            <form id="add-to-cart-form" style="display: inline;" method="POST" action="{{ route('shop.cart.add-item') }}">
                                @method('POST')
                                @csrf

                                <input type="hidden" name="product_id" value="{{ $panelProduct->id }}">
                                <input type="hidden" id="product_attribute_color" name="product_attribute_color" value="">
                                <input type="hidden" id="product_attribute_size" name="product_attribute_size" value="">
                                <input type="hidden" id="product_attribute_temperature" name="product_attribute_temperature" value="">

                                <input type="hidden" name="productQuantity" value="1">
                                <button type="submit" class="btn btn-md bjsh-btn-product-page font-weight-bold w-100 bjsh-button-mobile" style="color: #1a1a1a; border:0px;" {{ ($deliveryInformation == null) ? 'disabled' : '' }}>Add To Cart</button>
                            </form>
                        </div>
                        <div class="col-6 offset-3 offset-md-0 col-md-4 p-1 ">
                            <form id="add-to-cart-form" style="display: inline;" method="POST" action="{{route('shop.add-perfect-list',[$panelProduct->id])}}">
                                @method('POST')
                                @csrf

                                <button type="submit" class="btn btn-md bjsh-btn-product-page font-weight-bold w-100 bjsh-button-mobile" style="color: #1a1a1a; border:0px;">Add To Perfect List</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Extra details column -->
                <div class="col-12 col-md-3 pt-2 pb-2 pl-3 pr-2 hidden-sm" style="background-color: #f2f2f2;">
                    <section>
                        <div class="mb-3">
                            <p class="mb-1 text-muted">
                                Your Shipping Address
                            </p>
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="row">
                                        <div class="col-12 col-md-8">
                                            <p class="mb-1" style="font-size: .85rem; font-weight: 600;">
                                                {{ $userShippingAddress->postcode }}, {{ $userShippingAddress->city }}, {{ $userShippingAddress->state->name }}
                                            </p>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="text-right">
                                                <button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#editAddressModal">Edit</button>
                                            </div>

                                            <!-- Modal -->
                                            <div class="modal fade" id="editAddressModal" tabindex="-1" role="dialog" aria-labelledby="editAddressModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <form action="{{ route('shop.product.edit-address') }}" method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="form-row">
                                                                    <div class="col-12 form-group">
                                                                        <label for="address_1">Address 1</label>
                                                                        <input type="text" name="address_1" id="address_1" class="form-control" value="{{ $customer->shippingAddress->address_1 }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">
                                                                    <div class="col-12 form-group">
                                                                        <label for="address_2">Address 2</label>
                                                                        <input type="text" name="address_2" id="address_2" class="form-control" value="{{ $customer->shippingAddress->address_2 }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">
                                                                    <div class="col-12 form-group">
                                                                        <label for="address_2">Address 3</label>
                                                                        <input type="text" name="address_3" id="address_2" class="form-control" value="{{ $customer->shippingAddress->address_3 }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">
                                                                    <div class="col-12 col-md-6 form-group">
                                                                        <label for="postcode">Postcode</label>
                                                                        <input type="text" name="postcode" id="postcode" class="form-control" value="{{ $customer->shippingAddress->postcode }}">
                                                                    </div>

                                                                    <div class="col-12 col-md-6 form-group">
                                                                        <label for="city">City</label>
                                                                        <input type="text" name="city" id="City" class="form-control" value="{{ $customer->shippingAddress->city }}">
                                                                    </div>
                                                                </div>

                                                                <div class="form-row">
                                                                    <div class="col-12 form-group">
                                                                        <label for="state_id">State</label>
                                                                        <select name="state_id" id="state_id" class="select2 form-control" style="width: 100%;">
                                                                            @foreach($states as $state)
                                                                            <option value="{{ $state->id }}" {{ ($state->id == $customer->shippingAddress->state_id) ? 'selected' : '' }}>{{ $state->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                <button class="btn bjsh-btn-product-page">Save changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Modal -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="mb-3 text-muted">
                            <i class="fa fa-truck mr-2" style="font-size: 0.65rem;"></i>
                            <p class="d-inline mt-0 mb-2" style="font-size: 0.8rem; font-weight: 600;">Delivery Options</p>
                        </div>

                        <!-- Ships from -->
                        <div class="mb-2">
                            <i class="fas fa-globe-asia mr-2 text-muted"></i>
                            @if ($panelProduct->originState)
                            <span>Ships from {{ $panelProduct->originState->name }}</span>
                            @endif
                        </div>

                        <!-- Available in -->
                        <div>
                            <i class=" fas fa-globe-asia mr-2 text-muted"></i>
                            <span>Available in:</span>
                            <div class="ml-4 mt-2">
                                @if($panelProduct->deliveries->count() > 0)
                                @foreach($panelProduct->deliveries as $availableIn)
                                <span class="d-inline-block" style="font-weight:700; padding: 4px 6px; border-radius: 10px; margin: 2px;">{{ $availableIn->state->name }}</span>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <hr>

                        <!-- Delivery Fee -->
                        <div class="row no-gutters">
                            <div class="col-8 mb-1">
                                <i class="fas fa-truck-loading mr-2 text-muted"></i>
                                <span>
                                    Delivery Fee
                                </span>
                            </div>
                            <div class="col-4 text-right mb-1">
                                <p class="font-weight-bold mb-0"> {{ ($deliveryInformation != null) ? 'RM ' . number_format(($deliveryInformation->delivery_fee / 100), 2) : 'Not Available' }}</p>
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-12">
                                <?php
                                $productCategories = $panelProduct->parentProduct->categories;

                                $productCategoriesArray = [];

                                foreach ($productCategories as $key => $productCategory) {
                                    $productCategoriesArray[$key] = $productCategory->id;
                                }
                                ?>
                                @if($panelProduct->panel->categoriesWithMinPrice->whereIn('category_id', $productCategoriesArray)->first())
                                <p class="text-muted font-weight-bold">
                                    Free delivery charges for purchases above RM {{ number_format(($panelProduct->panel->categoriesWithMinPrice->whereIn('category_id', $productCategoriesArray)->first()->free_delivery_min_price / 100), 2) }}
                                </p>
                                @endif
                            </div>
                        </div>

                        <!-- Installation Fee -->
                        <!-- TODO: Temporary Hide -->
                        <!-- <div class="row no-gutters">
                            <div class="col-8">
                                <i class="fas fa-truck-loading mr-2 text-muted"></i>
                                <span>Installation Fee</span>
                            </div>
                            <div class="col-4 text-right">
                                <p class="font-weight-bold">
                                    RM {{ $panelProduct->getDecimalInstallationFee() }}
                                </p>
                            </div>
                        </div> -->
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="card w-100" style="border-radius: 0;">
        <div class="row no-gutters">
            <div class="col-12 p-2">
                <h1 class="text-center mb-4 mt-2">Product Details</h1>
                <hr style="width: 60%;">

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="accordion" id="accordionDescription">
                            <div class="card" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size: 1.1rem;">
                                            Description
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionDescription">
                                    <div class="card-body">
                                        <div class="p-4 product-details text-justify">
                                            {!! $product->description !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">

                        <div class="accordion" id="accordionMaterial">
                            <div class="card" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="font-size: 1.1rem;">
                                            Material
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionMaterial">
                                    <div class="card-body">
                                        <div class="p-4 product-details text-justify">
                                            {!! $panelProduct->product_material !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6">

                        <div class="accordion" id="accordionSize">
                            <div class="card" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="font-size: 1.1rem;">
                                            Product Variation
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSize">
                                    <div class="card-body">
                                        <div class="p-4 product-details text-justify">
                                            @if ($panelProduct->sizeAttributes->count() > 0)
                                            <p class="mb-1 font-weight-bold">Sizes</p>
                                            <ul class="list-unstyled">
                                                @foreach($panelProduct->sizeAttributes as $sizeAttribute)
                                                <li class="mx-1 p-1">
                                                    <span class="p-1 rounded shadow-sm" style="background-color: #ffff00;">
                                                        {{ $sizeAttribute->attribute_name }}
                                                    </span>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif

                                            @if ($panelProduct->colorAttributes->count() > 0)
                                            <p class="mb-1 font-weight-bold">Colors</p>
                                            <ul class="list-unstyled">
                                                @foreach($panelProduct->colorAttributes as $colorAttribute)
                                                <li class="mx-1 p-1">
                                                    <span class="p-1 rounded shadow-sm" style="background-color: #ffff00;">
                                                        {{ $colorAttribute->attribute_name }}
                                                    </span>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif

                                            @if ($panelProduct->lightTemperatureAttributes->count() > 0)
                                            <p class="mb-1 font-weight-bold">Light Temperature</p>
                                            <ul class="list-unstyled">
                                                @foreach($panelProduct->lightTemperatureAttributes as $lightTemperatureAttribute)
                                                <li class="mx-1 p-1">
                                                    <span class="p-1 rounded shadow-sm" style="background-color: #ffff00;">
                                                        {{ $lightTemperatureAttribute->attribute_name }}
                                                    </span>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-md-6">

                        <div class="accordion" id="accordionConsistency">
                            <div class="card" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                                <div class="card-header" id="headingFour">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="font-size: 1.1rem;">
                                            Consistency
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionConsistency">
                                    <div class="card-body">
                                        <div class="p-4 product-details text-justify">
                                            <p>
                                                {!! $panelProduct->product_consistency !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6">

                        <div class="accordion" id="accordionPackage">
                            <div class="card" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                                <div class="card-header" id="headingFive">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive" style="font-size: 1.1rem;">
                                            Package
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionPackage">
                                    <div class="card-body">
                                        <div class="p-4 product-details text-justify">
                                            <p>
                                                {!! $panelProduct->product_package !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-md-6">

                        <div class="accordion" id="accordionAvailability">
                            <div class="card" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                                <div class="card-header" id="headingSix">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix" style="font-size: 1.1rem;">
                                            Availability
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionAvailability">
                                    <div class="card-body">
                                        <div class="p-4 product-details text-justify">
                                            @if($panelProduct->deliveries->count() > 0)
                                            @foreach($panelProduct->deliveries as $availableIn)
                                            <span class="d-inline-block shadow-sm" style="background-color: #ffff33; padding: 4px 6px; border-radius: 10px; margin: 2px;">{{ $availableIn->name }}</span>
                                            @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card w-100" style="border-radius: 0;">
        <div class="row no-gutters">
            <div class="col-12 p-2">
                <h1 class="text-center mb-4 mt-2">Know More</h1>
                <hr style="width: 60%;">
                <div class="p-4 product-details text-justify">
                    {!! $panelProduct->product_description !!}
                </div>
            </div>
        </div>
    </div>

    <div class="card w-100" style="border-radius: 0;">
        <div class="row no-gutters">
            <div class="col-12 p-2">
                <h1 class="text-center">Similar Items</h1>
                @if ($relatedProducts->count() > 0)
                <!-- Products -->
                <div class="row no-gutters">
                    @foreach ($relatedProducts as $key => $product)
                    @if($product->productSoldByPanels->count() > 0)
                    <!-- 
                        Check if product sold by panels is more than 1.
                        If equals 1 then no need to show tooltip. 
                    -->
                    @if ($product->productSoldByPanels->count() > 1)
                    <div class="col-6 col-md-2 pl-2 pr-2 pb-3">
                        <div class="box">
                            <?php
                            $qualityColor = 'linear-gradient(#FCCB34 0%, #FCED14 100%)';
                            if ($product->quality->id == 1) {
                                $ribbonClass = 'linear-gradient(#E3BD9D 0%, #FFD4C9 100%);';
                            }
                            if ($product->quality->id == 2) {
                                $qualityColor = 'linear-gradient(#AFC4E3 0%, #C7D4FF 100%);';
                            }

                            if ($product->quality->id == 1) {
                                $ribbonClass = 'standard';
                            }
                            if ($product->quality->id == 2) {
                                $ribbonClass = 'moderate';
                            }
                            if ($product->quality->id == 3) {
                                $ribbonClass = 'premium';
                            }
                            ?>
                            <div class="tooltip-container">
                                <a class="catalog-item" style="text-decoration: none; color: #212529;" href="javascript:void()" data-modal="#modal-{{ $product->id }}">

                                    <div class="animated-product-container">
                                        <div class="animated-product-image-container">
                                            <img src="{{ asset('storage/' . $product->images[0]->path . '/' . $product->images[0]->filename) }}" alt="{{ $product->name }}">
                                        </div>

                                        <div class="animated-product-information-container">
                                            <p class="product-name">{{ $product->name }}</p>
                                            <div class="mt-2 mb-1">
                                                @if ($product->productSoldByPanels->count() > 1)
                                                @if ($product->productSoldByPanels->min('price') == $product->productSoldByPanels->max('price'))
                                                <p class="mb-1">
                                                    <span class="text-muted" style="font-size: 1.2rem; font-weight: 600;">RM {{ number_format(($product->productSoldByPanels->min('price') / 100) , 2) }}</span>
                                                </p>
                                                @else
                                                <p class="mb-1">
                                                    <span class="text-muted" style="font-size: 0.8rem; font-weight: 600;">RM {{ number_format(( $product->productSoldByPanels->min('price') / 100), 2) }}</span>
                                                    -
                                                    <span class="text-muted" style="font-size: 0.8rem; font-weight: 600;">
                                                        RM {{ number_format(($product->productSoldByPanels->max('price') / 100), 2) }}
                                                    </span>
                                                </p>
                                                @endif
                                                @endif
                                                <p class="mb-1">120 ratings</p> -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 
                                        Changing position of tooltip based on whether column is on the right or left 
                                    -->
                                    <?php
                                    $i = 1;
                                    $key1 = 3;
                                    $key2 = 4;
                                    $key3 = 5;
                                    $tooltipClass = 'right';

                                    if (
                                        $key == $key1 ||
                                        $key == $key2 ||
                                        $key == $key3 ||
                                        $key == $key1 * $i ||
                                        $key == $key2 * $i ||
                                        $key == $key3 * $i
                                    ) {
                                        $tooltipClass = 'left';
                                    }
                                    ?>

                                    <div class="{{ $tooltipClass }} overflow-auto hidden-sm" style="height: 400px">
                                        <div class="text-content">
                                            <h6 class="font-weight-bold" style="color: #ffffff;">Panels Selling - {{ $product->name }} </h6>
                                            <div class="row">
                                                <div class="col-12">
                                                    @foreach($product->productSoldByPanels as $relatedProductsoldByPanel)
                                                    <a href="/shop/product/{{ $product->name_slug}}?panel={{ $relatedProductsoldByPanel->panel_account_id }}" style="text-decoration: none; color: #212529;">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="text-dark">{{ $relatedProductsoldByPanel->panel->company_name }}</h5>
                                                                <h6 class="text-dark font-weight-bold">{{ $relatedProductsoldByPanel->getDecimalPrice() }}</h6>
                                                                <p class="mb-0 text-dark">Panel Rating</p>
                                                                <ul class="list-unstyled product-rating mb-1">
                                                                    <li>
                                                                        <i class="fa fa-star checked"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star checked"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star checked"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star checked"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star checked"></i>
                                                                    </li>
                                                                </ul>
                                                                <p class="mb-0 text-dark">Rating by Customers</p>
                                                                <div class="mb-1">
                                                                    @php $rating = $relatedProductsoldByPanel->panel->panel_rating; @endphp

                                                                    @foreach(range(1,5) as $i)
                                                                    <span class="fa-stack" style="width:1em">
                                                                        <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                                                                        @if($rating >0)
                                                                        @if($rating >0.5)
                                                                        <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                                                                        @else
                                                                        <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                                                                        @endif
                                                                        @endif
                                                                        @php $rating--; @endphp
                                                                    </span>
                                                                    @endforeach
                                                                </div>
                                                                <p class="mb-0 text-dark">Area of Service</p>
                                                                <p class="mb-1 text-dark font-weight-bold">
                                                                    Kl, Seremban
                                                                </p>
                                                                <p class="mb-0 text-dark">Commitment</p>
                                                                <p class="mb-0 text-dark" style="font-size: 0.8rem;">
                                                                    {{ $relatedProductsoldByPanel->panel_promotion }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @elseif ($product->productSoldByPanels->count() == 1)
                    <div class="col-6 col-md-2 pl-2 pr-2 pb-3">
                        <div class="box">
                            <?php
                            $qualityColor = 'linear-gradient(#FCCB34 0%, #FCED14 100%)';
                            if ($product->quality->id == 1) {
                                $ribbonClass = 'linear-gradient(#E3BD9D 0%, #FFD4C9 100%);';
                            }
                            if ($product->quality->id == 2) {
                                $qualityColor = 'linear-gradient(#AFC4E3 0%, #C7D4FF 100%);';
                            }

                            if ($product->quality->id == 1) {
                                $ribbonClass = 'standard';
                            }
                            if ($product->quality->id == 2) {
                                $ribbonClass = 'moderate';
                            }
                            if ($product->quality->id == 3) {
                                $ribbonClass = 'premium';
                            }
                            ?>
                            <a class="text-dark" href="/shop/product/{{ $product->name_slug }}?panel={{ $product->productSoldByPanels[0]->panel_account_id }}" style="text-decoration: none;">
                                <div class="animated-product-container">
                                    <div class="animated-product-image-container">
                                        <img src="{{ asset('storage/' . $product->images[0]->path . '/' . $product->images[0]->filename) }}" alt="{{ $product->name }}">
                                    </div>
                                    <div class="animated-product-information-container">
                                        <p class="product-name">{{ $product->name }}</p>
                                        <div class="mt-2 mb-1">
                                            @if($product->categories->where('name', 'Paints')->count() > 0)
                                            <p class="mb-0" style="font-size: 1.05rem;">
                                                1 Liter
                                            </p>
                                            @endif
                                            <p class="mb-1">
                                                <span class="text-muted" style="font-size: 1.2rem; font-weight: 600;">
                                                    RM {{ number_format(($product->productSoldByPanels->min('price') / 100), 2) }}
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                    <!-- Modal -->
                    <div class="modal fade" id="modal-{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="editAddressModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content" style="background-color: #444444;">
                                <div class="modal-header" style="border: none;">
                                    <h5 class="modal-title text-light" id="editAddressModalLongTitle">Panels Selling - {{ $product->name }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body overflow-auto" style="height: 400px; background-color: #444444;">
                                    <div>
                                        <div class="text-content">
                                            <div class="row">
                                                <div class="col-12">
                                                    @foreach($product->productSoldByPanels as $relatedProductsoldByPanel)
                                                    <a href="/shop/product/{{ $product->name_slug}}?panel={{ $relatedProductsoldByPanel->panel_account_id }}" style="text-decoration: none; color: #212529;">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <h5 class="text-dark">{{ $relatedProductsoldByPanel->panel->company_name }}</h5>
                                                                <h6 class="text-dark font-weight-bold">{{ $relatedProductsoldByPanel->getDecimalPrice() }}</h6>
                                                                <p class="mb-0 text-dark">Panel Rating</p>
                                                                <ul class="list-unstyled product-rating mb-1">
                                                                    <li>
                                                                        <i class="fa fa-star checked"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star checked"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star checked"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star checked"></i>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-star checked"></i>
                                                                    </li>
                                                                </ul>
                                                                <p class="mb-0 text-dark">Rating by Customers</p>
                                                                <div class="mb-1">
                                                                    @php $rating = $relatedProductsoldByPanel->panel->panel_rating; @endphp

                                                                    @foreach(range(1,5) as $i)
                                                                    <span class="fa-stack" style="width:1em">
                                                                        <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                                                                        @if($rating >0)
                                                                        @if($rating >0.5)
                                                                        <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                                                                        @else
                                                                        <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                                                                        @endif
                                                                        @endif
                                                                        @php $rating--; @endphp
                                                                    </span>
                                                                    @endforeach
                                                                </div>
                                                                <p class="mb-0 text-dark">Area of Service</p>
                                                                <p class="mb-1 text-dark font-weight-bold">
                                                                    Kl, Seremban
                                                                </p>
                                                                <p class="mb-0 text-dark">Commitment</p>
                                                                <p class="mb-0 text-dark" style="font-size: 0.8rem;">
                                                                    {{ $relatedProductsoldByPanel->panel_promotion }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer" style="border: none;">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <!-- No product found message -->
                    @if($loop->first)
                    <div class="col-12">
                        <p class="no-product-found-message">We're sorry, there's no available product under this category yet.</p>
                    </div>
                    @endif
                    @endif
                    @endforeach
                </div>
                @else
                <!-- No product found message -->
                <div class="row">
                    <div class="col-12">
                        <p class="no-product-found-message">We're sorry, there's no available product under this category yet.</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection

@push('style')
<style>
    .w-65 {
        width: 70%;
    }

    .slick-dots {
        position: absolute;
        bottom: 0;
        list-style: none;
        display: block;
        text-align: center;
        padding: 0;
        margin: 0;
        width: 100%;
    }

    @media (max-width: 576px) {
        .width-80 {
            width: 100%;
            margin: 0 auto;
        }

        .mx-auto-sm {
            margin: 0 auto;
        }

        .bjsh-button-mobile {
            font-size: 7pt;
            /* white-space: nowrap; */
        }
    }

    @media (min-width: 768px) {
        .width-80 {
            width: 80%;
            margin: 0 auto;
        }
    }

    .boxed label {
        display: inline-block;
        min-width: 50px;
        padding: 5px 10px;
        border: solid 1px #ccc;
        border-radius: 10px;
        transition: all 0.3s;
    }

    .boxed label.color-options {
        display: inline-block;
        margin-right: 5px;
        min-width: 0;
        width: 60px;
        height: 60px;
        padding: 10px;
        border: solid 1px #ccc;
        border-radius: 100%;
        transition: all 0.3s;
    }

    .boxed input[type="radio"] {
        display: none;
    }

    .boxed input[type="radio"]:checked+label {
        border: solid 1px #fccb34;
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
    }

    .tooltip-container {
        position: relative;
        text-align: left;
    }

    .tooltip-container .right {
        width: 300px;
        top: 50%;
        left: 90%;
        margin-left: 10px;
        transform: translate(0, -50%);
        padding: 0;
        color: #EEEEEE;
        background-color: #444444;
        font-weight: normal;
        font-size: 13px;
        border-radius: 8px;
        position: absolute;
        z-index: 99999999;
        box-sizing: border-box;
        box-shadow: 0 1px 8px rgba(0, 0, 0, 0.5);
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.8s;
    }

    .tooltip-container .left {
        width: 300px;
        top: 50%;
        right: 90%;
        margin-right: 10px;
        transform: translate(0, -50%);
        padding: 0;
        color: #EEEEEE;
        background-color: #444444;
        font-weight: normal;
        font-size: 13px;
        border-radius: 8px;
        position: absolute;
        z-index: 99999999;
        box-sizing: border-box;
        box-shadow: 0 1px 8px rgba(0, 0, 0, 0.5);
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.8s;
    }

    .tooltip-container:hover .right {
        visibility: visible;
        opacity: 1;
    }

    .tooltip-container:hover .left {
        visibility: visible;
        opacity: 1;
    }

    .tooltip-container .text-content {
        padding: 10px 20px;
    }

    .product-rating li {
        display: inline;
    }

    .fa.fa-star {
        color: #6e6e6e;
    }

    .fa.fa-star.checked {
        color: #fccb34;
    }

    .box {
        position: relative;
    }

    .ribbon {
        position: absolute;
        right: -5px;
        top: -5px;
        z-index: 1;
        overflow: hidden;
        width: 75px;
        height: 75px;
        text-align: right;
    }

    .ribbon.standard span {
        font-size: 10px;
        font-weight: bold;
        color: #1f1f1f;
        text-transform: uppercase;
        text-align: center;
        line-height: 20px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        width: 100px;
        display: block;
        background: #79A70A;
        background: linear-gradient(#E3BD9D 0%, #FFD4C9 100%);
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 19px;
        right: -21px;
    }

    .ribbon.standard span::before {
        content: "";
        position: absolute;
        left: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid #FFD4C9;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #FFD4C9;
    }

    .ribbon.standard span::after {
        content: "";
        position: absolute;
        right: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid transparent;
        border-right: 3px solid #FFD4C9;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #FFD4C9;
    }

    .ribbon.moderate span {
        font-size: 10px;
        font-weight: bold;
        color: #1f1f1f;
        text-transform: uppercase;
        text-align: center;
        line-height: 20px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        width: 100px;
        display: block;
        background: #79A70A;
        background: linear-gradient(#AFC4E3 0%, #C7D4FF 100%);
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 19px;
        right: -21px;
    }

    .ribbon.moderate span::before {
        content: "";
        position: absolute;
        left: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid #C7D4FF;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #C7D4FF;
    }

    .ribbon.moderate span::after {
        content: "";
        position: absolute;
        right: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid transparent;
        border-right: 3px solid #C7D4FF;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #C7D4FF;
    }

    .ribbon.premium span {
        font-size: 10px;
        font-weight: bold;
        color: #1f1f1f;
        text-transform: uppercase;
        text-align: center;
        line-height: 20px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        width: 100px;
        display: block;
        background: #79A70A;
        background: linear-gradient(#FCCB34 0%, #FCED14 100%);
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 19px;
        right: -21px;
    }

    .ribbon.premium span::before {
        content: "";
        position: absolute;
        left: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid #FCED14;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #FCED14;
    }

    .ribbon.premium span::after {
        content: "";
        position: absolute;
        right: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid transparent;
        border-right: 3px solid #FCED14;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #FCED14;
    }

    .product-details {
        max-width: 100%;
    }

    .product-details img {
        max-width: 100%;
        height: auto;
    }
</style>
@endpush

@push('script')
<script>
    $(document).ready(function() {
        /* Author: Wan Shahruddin */


        // Initialize slick slider
        $('.slider-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            dots: true,
        });

        //plugin bootstrap minus and plus
        //http://jsfiddle.net/laelitenetwork/puJ6G/
        $(document).on('click', '.btn-number', function(e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });

        $('.input-number').focusin(function() {
            $(this).data('oldValue', $(this).val());
        });

        $(document).on('change', '.input-number', function() {

            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }


        });

        $(".input-number").keydown(function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

        $(document).on('change', '.input-number', function(e) {
            postProductQuantity = $('input[name="productQuantity"]');

            quantity = $(this).val();
            postProductQuantity.val(quantity);
        })

        function onPageload() {
            inputColorBuy = $('#product_attribute_color_buyNow');
            inputSizeBuy = $('#product_attribute_size_buyNow');
            inputTemperatureBuy = $('#product_attribute_temperature_buyNow');

            inputColor = $('#product_attribute_color');
            inputSize = $('#product_attribute_size');
            inputTemperature = $('#product_attribute_temperature');

            priceTag = $('#price_tag');
            memberPriceTag = $('#member_price_tag');

            if ($('input[name="color"]:checked').val()) {
                panelColor = $('input[name="color"]:checked').val();
            } else {
                panelColor = null;
            }

            if ($('input[name="size"]:checked').val()) {
                panelSize = $('input[name="size"]:checked').val();
            } else {
                panelSize = null;
            }

            if ($('input[name="temperature"]:checked').val()) {
                panelTemperature = $('input[name="temperature"]:checked').val();
            } else {
                panelTemperature = null;
            }

            let priceByAttr;
            let mmbrPriceByAttr;

            if (
                $('input[name="color"]:checked').data('price')) {
                priceByAttr = $('input[name="color"]:checked').data('price');
            } else if ($('input[name="size"]:checked').data('price')) {
                priceByAttr = $('input[name="size"]:checked').data('price');
            } else if ($('input[name="temperature"]:checked').data('price')) {
                priceByAttr = $('input[name="temperature"]:checked').data('price')
            } else {
                priceByAttr = 0;
            }

            if ($('input[name="color"]:checked').data('member-price')) {
                mmbrPriceByAttr = $('input[name="color"]:checked').data('member-price');
            } else if ($('input[name="size"]:checked').data('price')) {
                mmbrPriceByAttr = $('input[name="size"]:checked').data('member-price');
            } else if ($('input[name="temperature"]:checked').data('member-price')) {
                mmbrPriceByAttr = $('input[name="temperature"]:checked').data('member-price')
            } else {
                mmbrPriceByAttr = 0;
            }

            inputColor.val(panelColor);
            inputSize.val(panelSize);
            inputTemperature.val(panelTemperature);

            inputColorBuy.val(panelColor);
            inputSizeBuy.val(panelSize);
            inputTemperatureBuy.val(panelTemperature);

            if (priceByAttr != 0) {
                priceTag.text('RM ' + priceByAttr);
            }

            if (mmbrPriceByAttr != 0) {
                memberPriceTag.text('RM ' + mmbrPriceByAttr);
            }
        }

        $('.panel-product-attributes').on('click', function(e) {
            inputColor = $('#product_attribute_color');
            inputSize = $('#product_attribute_size');
            inputTemperature = $('#product_attribute_temperature');
            inputBuyColor = $('#product_attribute_color_buyNow');
            inputBuySize = $('#product_attribute_size_buyNow');
            inputBuyTemperature = $('#product_attribute_temperature_buyNow');

            if ($('input[name="color"]:checked').val()) {
                panelColor = $('input[name="color"]:checked').val();
            } else {
                panelColor = null;
            }

            if ($('input[name="size"]:checked').val()) {
                panelSize = $('input[name="size"]:checked').val();
            } else {
                panelSize = null;
            }

            if ($('input[name="temperature"]:checked').val()) {
                panelTemperature = $('input[name="temperature"]:checked').val();
            } else {
                panelTemperature = null;
            }

            if (
                $('input[name="color"]:checked').data('price')) {
                priceByAttr = $('input[name="color"]:checked').data('price');
            } else if ($('input[name="size"]:checked').data('price')) {
                priceByAttr = $('input[name="size"]:checked').data('price');
            } else if ($('input[name="temperature"]:checked').data('price')) {
                priceByAttr = $('input[name="temperature"]:checked').data('price')
            } else {
                priceByAttr = 0;
            }

            if ($('input[name="color"]:checked').data('member-price')) {
                mmbrPriceByAttr = $('input[name="color"]:checked').data('member-price');
            } else if ($('input[name="size"]:checked').data('price')) {
                mmbrPriceByAttr = $('input[name="size"]:checked').data('member-price');
            } else if ($('input[name="temperature"]:checked').data('member-price')) {
                mmbrPriceByAttr = $('input[name="temperature"]:checked').data('member-price')
            } else {
                mmbrPriceByAttr = 0;
            }

            inputColor.val(panelColor);
            inputSize.val(panelSize);
            inputTemperature.val(panelTemperature);
            inputBuyColor.val(panelColor);
            inputBuySize.val(panelSize);
            inputBuyTemperature.val(panelTemperature);

            if (priceByAttr != 0) {
                priceTag.text('RM ' + priceByAttr);
            }

            if (mmbrPriceByAttr != 0) {
                memberPriceTag.text('RM ' + mmbrPriceByAttr);
            }
        });

        onPageload();

        $(document).on('click', '.catalog-item', function(e) {
            e.preventDefault();
            let modal = $(this).data('modal');
            if ($(window).innerWidth() <= 768) {
                $(modal).modal('show');
            }
        });


        $('.color-options').tooltip()

        $('select.select2').select2({
            theme: 'bootstrap4',
        });
        /* End Author */

    });
</script>
@endpush