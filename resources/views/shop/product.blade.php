@extends('layouts.shop.main')

@section('content')
<div>
    <!-- Breadcrumb here -->
    <div class="container">
        <div class="row">
            <div class="col-12 hidden-md pt-1 pl-1 pr-1 mb-2">
                <h1 class="pl-0 pr-0 text-capitalize text-left" style="font-size: 1.5rem; margin: 0;">{{ $product->name }}</h1>
                <div class="text-left my-auto mt-1">
                    @php $productRating = $product->product_rating; @endphp

                    @foreach(range(1,5) as $i)
                    <span class="fa-stack" style="width:1em">
                        <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                        @if($productRating >0)
                        @if($productRating >0.5)
                        <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                        @else
                        <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                        @endif
                        @endif
                        @php $productRating--; @endphp
                    </span>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-5 pl-1 pr-1 mb-1">
                <div class="slider slider-single">
                    @foreach($product->images as $image)
                    <div>
                        <img class="mw-100" src="{{ asset('storage/' . $image->path . '/' . $image->filename) }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-7 pt-1 pl-2 pr-2">
                <div class="row hidden-sm">
                    <div class="col-12 text-md-left text-center">
                        <h1 class="pl-0 pr-0 text-capitalize" style="font-size: 2rem; margin: 0;">{{ $product->name }}</h1>
                        <div class="text-left my-auto mt-1">
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
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-md-left text-center">
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="col-12 text-md-left text-center">
                        <p>{{ $product->details }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <p class="mb-1">Qualities <small>(WIP)</small></p>
                        <div class="boxed">
                            <input type="radio" id="quality0" class="panel-product-filter" name="quality" value="" checked>
                            <label for="quality0">All</label>

                            <input type="radio" id="quality-standard" class="panel-product-filter" name="quality" value="standard">
                            <label for="quality-standard">Standard</label>

                            <input type="radio" id="quality-moderate" class="panel-product-filter" name="quality" value="moderate">
                            <label for="quality-moderate">Moderate</label>

                            <input type="radio" id="quality-premium" class="panel-product-filter" name="quality" value="premium">
                            <label for="quality-premium">Premium</label>
                        </div>
                    </div>
                </div>

                <!-- Colors -->
                @if($product->colorAttributes->count() > 0)
                <div class="row">
                    <div class="col-12">
                        <p class="mb-1">Colors <small>(WIP)</small></p>
                        <div class="boxed">
                            <input type="radio" id="color0" class="panel-product-filter" name="color" value="all" checked>
                            <label for="color0">All colors</label>
                        </div>

                        <div class="boxed">
                            @foreach($product->colorAttributes as $colorAttribute)
                            <input type="radio" id="color-{{ $colorAttribute->id }}" class="panel-product-filter" name="color" value="{{ $colorAttribute->attribute_name }}">
                            <label class="color-options" for="color-{{ $colorAttribute->id }}" style="background-color: {{ $colorAttribute->color_hex }}"></label>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                <!-- Sizes -->
                @if($product->sizeAttributes->count() > 0)
                <div class="row">
                    <div class="col-12">
                        <p class="mb-1">Sizes <small>(WIP)</small></p>
                        <div class="boxed">
                            <input type="radio" id="size0" class="panel-product-filter" name="size" value="all" checked>
                            <label for="size0">All</label>

                            @foreach($product->sizeAttributes as $sizeAttribute)
                            <input type="radio" id="size-{{ $sizeAttribute->id }}" class="panel-product-filter" name="size" value="{{ $sizeAttribute->attribute_name }}">
                            <label for="size-{{ $sizeAttribute->id }}">{{ $sizeAttribute->attribute_name }}</label>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                <!-- Light Temperatures -->
                @if($product->lightTemperatureAttributes->count() > 0)
                <div class="row">
                    <div class="col-12">
                        <p class="mb-1">Color Temperatures <small>(WIP)</small></p>
                        <div class="boxed">
                            <input type="radio" id="temperature-0" class="panel-product-filter" name="temperature" value="" checked>
                            <label for="temperature-0">All</label>

                            @foreach($product->lightTemperatureAttributes as $lightTemperatureAttribute)
                            <input type="radio" id="temperature-{{ $lightTemperatureAttribute->id }}" class="panel-product-filter" name="temperature" value="{{ $lightTemperatureAttribute->attribute_name }}">
                            <label for="temperature-{{ $lightTemperatureAttribute->id }}">{{ $lightTemperatureAttribute->attribute_name }}</label>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                <div class="row mt-4">
                    <div class="col-12 mb-0 text-left">
                        <h4 class="mb-0">Sold By <small>(WIP)</small></h4>
                    </div>
                </div>

                <hr class="mt-1 w-50 text-left ml-0">

                <div class="row">
                    <div class="col-12">
                        <div id="loadingDiv" class="text-center">
                            <div class="spinner-border text-warning" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                        <div class="row no-gutters" id="product-panel-container">
                            <!-- Ajax response will be loaded here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->

@endsection

@push('script')
<script>
    $(document).ready(function() {
        // Variable initialization.
        const ItemContainer = $('#product-panel-container');
        var loading = $('#loadingDiv').hide();

        $('.slider-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            dots: true,
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Run function
        onPageLoad();

        function onPageLoad() {
            $.ajax({
                async: true,
                beforeSend: function() {
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    loading.hide();
                    ItemContainer.show();
                },
                url: "{{ route('web.shop.product', ['productSlug' => $product->name_slug])}}",
                type: "get",
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        }

        let productQuality;
        let productColor
        let productSize;
        let productTemperature;

        $('.panel-product-filter').click(function() {
            if ($('input[name="quality"]:checked').val()) {
                productQuality = $('input[name="quality"]:checked').val();
            } else {
                productQuality = null;
            }

            if ($('input[name="color"]:checked').val()) {
                productColor = $('input[name="color"]:checked').val();
            } else {
                productColor = null;
            }

            if ($('input[name="size"]:checked').val()) {
                productSize = $('input[name="size"]:checked').val();
            } else {
                productSize = null;
            }

            if ($('input[name="temperature"]:checked').val()) {
                productTemperature = $('input[name="temperature"]:checked').val();
            } else {
                productTemperature = null;
            }

            console.log(productQuality);
            console.log(productColor);
            console.log(productSize);
            console.log(productTemperature);

            $.ajax({
                async: true,
                beforeSend: function() {
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    loading.hide();
                    ItemContainer.show();
                },
                url: "{{ route('web.shop.product.filter', ['productSlug' => $product->name_slug])}}",
                type: "POST",
                data: {
                    quality: productQuality,
                    color: productColor,
                    size: productSize,
                    temperature: productTemperature
                },
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        });


        // Assign a variable to element with the class input-number.
        const productQuantity = $('.input-number');
        // Assign a variable to input with the name productQuantity.
        const postProductQuantity = $('input[name$="productQuantity"]')

        // On change event of productQuantity..
        productQuantity.on('change', function() {
            // change the value of postProductQuantity to match productQuantity.
            postProductQuantity.val() = productQuantity.val();
        });


    });
</script>
@endpush

@push('style')
<style>
    .slider-single {
        border: 1px solid #dedede;
        padding: 5px;
    }

    .slider-nav {
        margin-top: 5px;
    }

    .fa.fa-star {
        color: #6e6e6e;
        font-size: 15px;
    }

    .fa.fa-star.checked {
        color: #fccb34;
    }

    .panel-option-card {
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        transition: all ease-in-out .2s;
    }

    .panel-option-card:hover {
        box-shadow: 0 0.175rem 0.75rem rgba(0, 0, 0, 0.075);
    }

    .boxed label {
        display: inline-block;
        min-width: 50px;
        padding: 10px;
        border: solid 1px #ccc;
        border-radius: 10px;
        transition: all 0.3s;
    }

    .boxed label.color-options {
        display: inline-block;
        margin-right: 5px;
        min-width: 0;
        width: 40px;
        height: 40px;
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

    @media (max-width: 767px) {
        .mx-auto-sm {
            margin: 0 auto;
        }

        .justify-center-sm {
            justify-content: center;
        }
    }

    .box {
        position: relative;
        background: #EEE;
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

    .ribbon span {
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

    .ribbon span::before {
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

    .ribbon span::after {
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
</style>
@endpush

@push('script')
<script>
    $(document).ready(function() {
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
    });
</script>
@endpush