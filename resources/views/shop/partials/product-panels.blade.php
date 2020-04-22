@if($productSoldByPanels->count() > 0)
@foreach($productSoldByPanels as $productByPanels)
<div class="col-12 col-md-6 pl-1 pr-1 mb-1">
    <a style="text-decoration: none; color: #212529;" href="#productModal{{ $productByPanels->id }}" data-toggle="modal" data-target="#productModal{{ $productByPanels->id }}">
        <div class="box">
            <div class="ribbon"><span>{{ $productByPanels->quality->name }}</span></div>
            <div class="card panel-option-card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 mb-0">
                            <img class="mw-100" src="https://www.logodesign.net/logo/line-art-car-with-swoosh-5986ld.png" alt="">
                        </div>
                        <div class="col-8 mb-0 text-left">
                            <p class="mb-0 font-weight-bold">{{ $productByPanels->panel->company_name }}</p>
                            @php $panelRating = $productByPanels->panel->panel_rating; @endphp

                            @foreach(range(1,5) as $i)
                            <span class="fa-stack mb-2" style="width:1em">
                                <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                                @if($panelRating >0)
                                @if($panelRating >0.5)
                                <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                                @else
                                <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                                @endif
                                @endif
                                @php $panelRating--; @endphp
                            </span>
                            @endforeach
                            <!-- <p class="mb-1" style="font-size: .9rem;">{{ $productByPanels->product_details }}</p> -->
                            <!-- <p class="mb-0">Price: </p> -->
                            <p class="mb-1 font-weight-bold">RM {{ $productByPanels->getDecimalPrice() }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>

<div class="modal fade" id="productModal{{ $productByPanels->id }}" tabindex="-1" role="dialog" aria-labelledby="productModal{{ $productByPanels->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel"> {{ $productByPanels->parentProduct->name }} - {{ $productByPanels->panel->company_name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img class="mw-100" src="{{ asset('storage/' . $productByPanels->parentProduct->images[0]->path . '/' . $productByPanels->parentProduct->images[0]->filename) }}" alt="">
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="mb-2">
                            <p>{{ $productByPanels->product_details }}</p>
                        </div>
                        <div class="mb-2">
                            <p>{{ $productByPanels->panel_promotion }}</p>
                        </div>
                        <div>
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        Material
                                    </td>
                                    <td>
                                        {{ $productByPanels->product_materials }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Quality
                                    </td>
                                    <td>
                                        {{ $productByPanels->quality->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Price
                                    </td>
                                    <td class="font-weight-bold">
                                        RM {{ $productByPanels->getDecimalPrice() }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-8 offset-md-4 mb-1">
                        <p id="add-to-cart-error" class="text-danger p-2 shadow-sm" style="background-color: #f5f5f5; display: none;">Please make sure you have selected which type of the product you would like to add to your cart.</p>
                    </div>
                </div>

                @if($productByPanels->colorAttributes->count() > 0)
                <div class="row">
                    <hr class="mb-1">
                    <div class="col-12 col-md-8 offset-md-4 mb-1 text-center text-md-left">
                        <p class="mb-1">Color</p>
                        <hr class="mt-1">
                    </div>

                    <div class="col-12 col-md-8 offset-md-4 mb-3 text-center text-md-left">
                        <p class="mb-1">Colors</p>
                        <div class="boxed">
                            @foreach($productByPanels->colorAttributes as $colorAttribute)
                            <input type="radio" class="product-attributes" id="panelProductColor-{{ $colorAttribute->id }}" name="modal-color" value="{{ $colorAttribute->id }}">
                            <label class="color-options" for="panelProductColor-{{ $colorAttribute->id }}" style="background-color: {{ $colorAttribute->color_hex }}"></label>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                @if($productByPanels->sizeAttributes->count() > 0)
                <div class="row">
                    <hr class="mb-1">
                    <div class="col-12 col-md-8 offset-md-4 mb-1 text-center text-md-left">
                        <p class="mb-1">Sizes</p>
                        <hr class="mt-1">
                    </div>

                    <div class="col-12 col-md-8 offset-md-4 mb-3 text-center text-md-left">
                        <p class="mb-1">Sizes</p>
                        <div class="boxed">
                            @foreach($productByPanels->sizeAttributes as $sizeAttribute)
                            <input type="radio" class="product-attributes" id="panelProductSize-{{ $sizeAttribute->id }}" name="modal-size" value="{{ $sizeAttribute->id }}">
                            <label for="panelProductSize-{{ $sizeAttribute->id }}">{{ $sizeAttribute->attribute_name }}</label>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                @if($productByPanels->lightTemperatureAttributes->count() > 0)
                <div class="row">
                    <hr class="mb-1">
                    <div class="col-12 col-md-8 offset-md-4 mb-1 text-center text-md-left">
                        <p class="mb-1">Sizes</p>
                        <hr class="mt-1">
                    </div>

                    <div class="col-12 col-md-8 offset-md-4 mb-3 text-center text-md-left">
                        <p class="mb-1">Color Temperatures</p>
                        <div class="boxed">
                            @foreach($productByPanels->lightTemperatureAttributes as $lightTemperatureAttribute)
                            <input type="radio" class="product-attributes" id="panelProductTemperature-{{ $lightTemperatureAttribute->id }}" name="modal-temperature" value="{{ $lightTemperatureAttribute->id }}">
                            <label for="panelProductTemperature-{{ $lightTemperatureAttribute->id }}">{{ $lightTemperatureAttribute->attribute_name }}</label>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                <div class="row">
                    <hr class="mb-1">
                    <div class="col-12 col-md-8 offset-md-4 mb-1 text-center text-md-left">
                        <p class="mb-1">Quantity</p>
                        <hr class="mt-1">
                    </div>

                    <div class="col-12 col-md-8 offset-md-4 mb-3 text-center text-md-left">
                        <div class="input-group mx-auto-sm" style="max-width: 180px;">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                    <span class="fa fa-minus"></span>
                                </button>
                            </span>
                            <input type=" text" name="quant[1]" class="form-control input-number" value="1" min="1" max="50">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                    <span class="fa fa-plus"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="modal-footer justify-center-sm">
                    <button style="color: #000; background-color: #fccb34;" type="button" class="btn btn-primary">Add to wishlist</button>
                    <form id="add-to-cart-form" method="POST" action="{{ route('shop.cart.add-item') }}">
                        @method('POST')
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $productByPanels->id }}">
                        <input type="hidden" id="product_attribute_color" name="product_attribute_color" value="">
                        <input type="hidden" id="product_attribute_size" name="product_attribute_size" value="">
                        <input type="hidden" id="product_attribute_temperature" name="product_attribute_temperature" value="">

                        <input type="hidden" name="productQuantity" value="1">
                        <button style="color: #000; background-color: #fccb34;" type="submit" class="btn btn-primary">Add to cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@else
<div class="col-12">
    <p class="no-product-found-message">We're sorry, there's no available product matching your criteria.</p>
</div>
@endif