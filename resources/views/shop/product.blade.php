@extends('layouts.shop.main')

@section('content')
<div>
    <!-- Breadcrumb here -->
    <?php
    $companyname = 'Bujishu';

    if ($product->categories->last()->name == 'Curtains') {
        $companyname = 'Lafayette Industries';
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 hidden-md pt-1 pl-1 pr-1 mb-2">
                <h1 class="pl-0 pr-0 text-capitalize text-left" style="font-size: 1.5rem; margin: 0;">{{ $product->name }}</h1>
                <div class="text-left my-auto mt-1">
                    @php $rating = $product->product_rating; @endphp

                    @foreach(range(1,5) as $i)
                    <span class="fa-stack" style="width:1em">
                        <i class="far fa-star fa-stack-1x"></i>

                        @if($rating >0)
                        @if($rating >0.5)
                        <i class="fas fa-star fa-stack-1x checked"></i>
                        @else
                        <i class="fas fa-star-half fa-stack-1x checked"></i>
                        @endif
                        @endif
                        @php $rating--; @endphp
                    </span>
                    @endforeach
                    <!-- TODO: Calculate average ratings -->
                    <!-- <span class="ml-1 align-middle">(60 ratings) <small>(WIP)</small></span> -->
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
                                <i class="far fa-star fa-stack-1x"></i>

                                @if($rating >0)
                                @if($rating >0.5)
                                <i class="fas fa-star fa-stack-1x"></i>
                                @else
                                <i class="fas fa-star-half fa-stack-1x"></i>
                                @endif
                                @endif
                                @php $rating--; @endphp
                            </span>
                            @endforeach
                            <!-- TODO: Calculate average ratings -->
                            <!-- <span class="ml-1 align-middle">(60 ratings) <small>(WIP)</small></span> -->
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

                @if($product->colorAttributes->count() > 0)
                <div class="row">
                    <div class="col-12">
                        <p class="mb-1">Colors <small>(WIP)</small></p>
                        <div class="boxed">
                            <input type="radio" id="color0" name="color" value="120cm x 200cm">
                            <label for="color0">All colors</label>
                        </div>

                        <div class="boxed">
                            @foreach($product->colorAttributes as $colorAttribute)
                            <input type="radio" id="color-{{ $colorAttribute->id }}" name="color" value="{{ $colorAttribute->id }}">
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
                            <input type="radio" id="size0" name="size" value="all">
                            <label for="size0">All</label>

                            @foreach($product->sizeAttributes as $sizeAttribute)
                            <input type="radio" id="size-{{ $sizeAttribute->id }}" name="size" value="{{ $sizeAttribute->id }}">
                            <label for="size-{{ $sizeAttribute->id }}">{{ $sizeAttribute->attribute_name }}</label>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                <!-- Color Temperatures -->
                @if($product->lightTemperatureAttributes->count() > 0)
                <div class="row">
                    <div class="col-12">
                        <p class="mb-1">Color Temperatures <small>(WIP)</small></p>
                        <div class="boxed">
                            <input type="radio" id="size0" name="size" value="all">
                            <label for="size0">All</label>

                            @foreach($product->lightTemperatureAttributes as $lightTemperatureAttribute)
                            <input type="radio" id="temperature-{{ $lightTemperatureAttribute->id }}" name="size" value="{{ $lightTemperatureAttribute->id }}">
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
                        <div class="row no-gutters">
                            <div class="col-12 col-md-6 pl-1 pr-1 mb-1">
                                <a style="text-decoration: none; color: #212529;" href="#exampleModal1" data-toggle="modal" data-target="#exampleModal1">
                                    <div class="card panel-option-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 mb-0">
                                                    <img class="mw-100" src="https://www.logodesign.net/logo/line-art-car-with-swoosh-5986ld.png" alt="">
                                                </div>
                                                <div class="col-8 mb-0 text-left">
                                                    <p class="mb-1 font-weight-bold">{{ $companyname }} Sdn Bhd</p>
                                                    <p class="mb-0">Rating by panel: </p>
                                                    <p class="mb-1">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                    </p>
                                                    <p class="mb-0">Rating by customers: </p>
                                                    <p class="mb-1">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                    </p>
                                                    <p class="mb-0">Quality: </p>
                                                    <p class="mb-1">Moderate</p>
                                                    <p class="mb-0">Price: </p>
                                                    <p class="mb-1 font-weight-bold">RM 120</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-md-6 pl-1 pr-1 mb-1">
                                <a style="text-decoration: none; color: #212529;" href="#exampleModal1" data-toggle="modal" data-target="#exampleModal1">
                                    <div class="card panel-option-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 mb-0">
                                                    <img class="mw-100" src="https://www.logodesign.net/logo/line-art-car-with-swoosh-5986ld.png" alt="">
                                                </div>
                                                <div class="col-8 mb-0 text-left">
                                                    <p class="mb-1 font-weight-bold">{{ $companyname }} Sdn Bhd 1</p>
                                                    <p class="mb-0">Rating by panel: </p>
                                                    <p class="mb-1">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </p>
                                                    <p class="mb-0">Rating by customers: </p>
                                                    <p class="mb-1">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </p>
                                                    <p class="mb-0">Quality: </p>
                                                    <p class="mb-1">Moderate</p>
                                                    <p class="mb-0">Price: </p>
                                                    <p class="mb-1 font-weight-bold">RM 90</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">{{ $companyname }} - {{ $product->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <img class="mw-100" style="border: 1px solid #ededed; padding: 5px;" src="{{ asset('storage/' . $product->images[0]->path . '/' . $product->images[0]->filename) }}" alt="">
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="mb-4">
                            <p>{{ $product->summary }}</p>
                        </div>
                        <div>
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        Material
                                    </td>
                                    <td>
                                        Cotton, Polyester Fiber
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Quality
                                    </td>
                                    <td>
                                        Moderate
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Price
                                    </td>
                                    <td class="font-weight-bold">
                                        RM 120
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                @if($product->categories->last()->name == 'Curtains')
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-4 text-center text-md-left">
                        <p class="mb-1">Sizes <small>(WIP)</small></p>
                        <hr class="mt-1">
                        <div class="boxed">
                            <input type="radio" id="size1Modal" name="sizeModal" value="120cm x 200cm">
                            <label for="size1Modal">112cm</label>

                            <input type="radio" id="size2Modal" name="sizeModal" value="120cm x 200cm">
                            <label for="size2Modal">167cm</label>

                            <input type="radio" id="size3Modal" name="sizeModal" value="120cm x 200cm">
                            <label for="size3Modal">228cm</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-4 text-center text-md-left">
                        <p class="mb-1">Color <small>(WIP)</small></p>
                        <hr class="mt-1">
                        <div class="boxed">
                            <input type="radio" id="redModal" name="colorModal" value="Red">
                            <label class="color-options" for="redModal" style="background-color: red;"></label>

                            <input type="radio" id="greyModal" name="colorModal" value="Grey">
                            <label class="color-options" for="greyModal" style="background-color: grey;"></label>

                            <input type="radio" id="beigeModal" name="colorModal" value="Beige">
                            <label class="color-options" for="beigeModal" style="background-color: #f5f5dc;"></label>
                        </div>
                    </div>
                </div>
                @endif

                @if($product->categories->last()->name == 'Bedsheets')
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-4 text-center text-md-left">
                        <p class="mb-1">Sizes <small>(WIP)</small></p>
                        <hr class="mt-1">
                        <div class="boxed">
                            <input type="radio" id="size1Modal" name="sizeModal" value="120cm x 200cm">
                            <label for="size1Modal">Single</label>

                            <input type="radio" id="size2Modal" name="sizeModal" value="120cm x 200cm">
                            <label for="size2Modal">Queen</label>

                            <input type="radio" id="size3Modal" name="sizeModal" value="120cm x 200cm">
                            <label for="size3Modal">King</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-4 text-center text-md-left">
                        <p class="mb-1">Color <small>(WIP)</small></p>
                        <hr class="mt-1">
                        <div class="boxed">
                            <input type="radio" id="redModal" name="colorModal" value="Red">
                            <label class="color-options" for="redModal" style="background-color: red;"></label>

                            <input type="radio" id="greyModal" name="colorModal" value="Grey">
                            <label class="color-options" for="greyModal" style="background-color: grey;"></label>

                            <input type="radio" id="whiteModal" name="colorModal" value="White">
                            <label class="color-options" for="whiteModal" style="background-color: #ffffff;"></label>
                        </div>
                    </div>
                </div>
                @endif

                @if($product->categories->first()->name == 'Lightings')
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-4 text-center text-md-left">
                        <p class="mb-1">Color Temperature <small>(WIP)</small></p>
                        <hr class="mt-1">
                        <div class="boxed">
                            <input type="radio" id="size1Modal" name="sizeModal" value="120cm x 200cm">
                            <label for="size1Modal">Daylight 6000k</label>

                            <input type="radio" id="size2Modal" name="sizeModal" value="120cm x 200cm">
                            <label for="size2Modal">Warm White 3000k</label>
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
                    <button style="color: #000; background-color: #fccb34;" type="button" class="btn btn-primary">Add to wishlist <br> <small>(WIP)</small></button>
                    <form method="POST" action="{{ route('shop.cart.add-item') }}">
                        @method('POST')
                        @csrf
                        <input type="hidden" name="productId" value="{{ $product->id }}">
                        <input type="hidden" name="productQuantity" value="1">
                        <button style="color: #000; background-color: #fccb34;" type="submit" class="btn btn-primary">Add to cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function() {
        $('.slider-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            dots: true,
        });
        // Function to change slick script based on media query state.
        function changeSlickScriptOnSmScreen(smScreen) {
            if (smScreen.matches) {
                $('.slider-single').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: false,
                    dots: true,
                });
            } else {
                $('.slider-single').slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: false,
                    asNavFor: '.slider-nav'
                });
                $('.slider-nav').slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    asNavFor: '.slider-single',
                    centerMode: true,
                    focusOnSelect: true
                });
            }
        }

        // Set media query.
        var smScreen = window.matchMedia("(max-width: 576px)");

        // Call function at runtime.
        changeSlickScriptOnSmScreen(smScreen);

        // Attach listener function on state changes.
        smScreen.addListener(changeSlickScriptOnSmScreen);

        // Assign a variable to element with the class input-number.
        const productQuantity = $('.input-number');
        // Assign a variable to input with the name productQuantity.
        const postProductQuantity = $('input[name$="productQuantity"]')

        // On change event of productQuantity..
        productQuantity.on('change', function() {
            // change the value of postProductQuantity to match productQuantity.
            // postProductQuantity.val(productQuantity.val());
            postProductQuantity.val() = productQuantity.val();
        });

        $('.select2').select2({
            width: 'resolve'
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
</style>
@endpush

@push('script')
<script>
    //plugin bootstrap minus and plus
    //http://jsfiddle.net/laelitenetwork/puJ6G/
    $('.btn-number').click(function(e) {
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
    $('.input-number').change(function() {

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
</script>
@endpush