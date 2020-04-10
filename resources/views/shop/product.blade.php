@extends('layouts.shop.main')

@section('content')
<div>
    <!-- Breadcrumb here -->
    <div class="container">
        <div class="row">
            <div class="col-12 hidden-md pt-1 pl-1 pr-1 mb-2">
                <h1 class="pl-0 pr-0 text-capitalize text-left" style="font-size: 1.5rem; margin: 0;">{{ $product->name }}</h1>
                <!-- <div class="text-left my-auto mt-1">
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
                </div> -->
            </div>
            <div class="col-12 col-md-4 pl-2 pr-2 mb-1">
                <div class="slider slider-single">
                    @foreach($product->images as $image)
                    <div>
                        <img class="mw-100" src="{{ asset('storage/' . $image->path . '/' . $image->filename) }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-md-8 pt-1 pl-2 pr-2">
                <div class="row hidden-sm">
                    <div class="col-12 text-md-left text-center">
                        <h1 class="pl-0 pr-0 text-capitalize" style="font-size: 1.8rem; margin: 0;">{{ $product->name }}</h1>
                        <!-- <div class="text-left my-auto mt-1">
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
                        </div> -->
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 col-md-8 text-center text-md-left">
                        <h2 style="display: inline-block; border: 1px solid #e5e5e5; padding: 0.8rem; background-color: #FFFFFF; font-weight: 700;color: #474747;" class="shadow-sm">RM {{ $panelProduct->getDecimalPrice() }}</h2>
                    </div>
                    <div class="col-8 offset-2 col-md-4 offset-md-0 my-auto">
                        <div class="input-group mx-auto-sm">
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
                    <div class="col-12 text-md-left text-center mt-2">
                        <!-- <p>{{ $product->description }}</p> -->
                        <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus omnis ut, animi quis praesentium odit quo eligendi illo id sed suscipit enim temporibus recusandae iste repellendus corrupti consequuntur minus delectus voluptatum aliquid amet excepturi? Doloremque sed placeat at, adipisci reiciendis laboriosam, sequi architecto dolorem inventore earum a exercitationem quod ad temporibus provident recusandae aliquid reprehenderit vel, cum nostrum! Itaque harum vitae est ea, provident unde minima sint excepturi cum eius repudiandae repellat dignissimos illum error rem incidunt hic, nam fuga quis sit aperiam mollitia fugit doloribus? Quos similique unde itaque quod quas blanditiis. Aliquam labore ipsum quibusdam. Molestiae aut at consectetur laborum nobis cumque architecto obcaecati sed impedit officia deserunt quas ullam repellendus sapiente vel aperiam veniam distinctio quisquam iure dolore blanditiis, harum porro! Non, nobis fugit cumque quod perferendis soluta quas, ipsum ratione, vero placeat amet quidem ex laudantium.</p>
                    </div>
                </div>

                <!-- Colors -->
                @if($panelProduct->colorAttributes->count() > 0)
                <div class="row">
                    <div class="col-12">
                        <p class="mb-1">Colors</p>
                        <div class="boxed">
                            @foreach($panelProduct->colorAttributes as $key => $colorAttribute)
                            <input type="radio" id="color-{{ $colorAttribute->id }}" class="panel-product-attributes" name="color" value="{{ $colorAttribute->id }}" {{ ($key == 1) ? 'checked' : '' }}>
                            <label class="color-options" for="color-{{ $colorAttribute->id }}" style="background-color: {{ $colorAttribute->color_hex }}"></label>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                <!-- Sizes -->
                @if($panelProduct->sizeAttributes->count() > 0)
                <div class="row">
                    <div class="col-12">
                        <p class="mb-1">Sizes</p>
                        <div class="boxed">
                            @foreach($panelProduct->sizeAttributes as $key => $sizeAttribute)
                            <input type="radio" id="size-{{ $sizeAttribute->id }}" class="panel-product-attributes" name="size" value="{{ $sizeAttribute->id }}" {{ ($key == 0) ? 'checked' : '' }}>
                            <label for="size-{{ $sizeAttribute->id }}">{{ $sizeAttribute->attribute_name }}</label>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                <!-- Light Temperatures -->
                @if($panelProduct->lightTemperatureAttributes->count() > 0)
                <div class="row">
                    <div class="col-12">
                        <p class="mb-1">Color Temperatures</p>
                        <div class="boxed">
                            @foreach($panelProduct->lightTemperatureAttributes as $key => $lightTemperatureAttribute)
                            <input type="radio" id="temperature-{{ $lightTemperatureAttribute->id }}" class="panel-product-attributes" name="temperature" value="{{ $lightTemperatureAttribute->id }}" {{ ($key == 0) ? 'checked' : '' }}>
                            <label for="temperature-{{ $lightTemperatureAttribute->id }}">{{ $lightTemperatureAttribute->attribute_name }}</label>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                <div class="row mt-2 text-center text-md-right">
                    <div class="col-12">
                        <form id="add-to-cart-form" style="display: inline;" method="POST" action="{{ route('shop.cart.add-item') }}">
                            @method('POST')
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $panelProduct->id }}">
                            <input type="hidden" id="product_attribute_color" name="product_attribute_color" value="">
                            <input type="hidden" id="product_attribute_size" name="product_attribute_size" value="">
                            <input type="hidden" id="product_attribute_temperature" name="product_attribute_temperature" value="">

                            <input type="hidden" name="productQuantity" value="1">
                            <button type="submit" class="btn btn-lg bjsh-btn-gradient">Add to cart</button>
                        </form>
                        <button class="btn btn-lg bjsh-btn-gradient">Delivery</button>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Product Details</h2>

                <div class="row">
                    <div class="col-6">
                        <div class="accordion" id="accordionDescription">
                            <div class="card shadow-sm" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                                <div class="card-header" id="headingDescription">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-dark" style="font-size: 1.2rem;" type="button" data-toggle="collapse" data-target="#collapseDescription" aria-expanded="true" aria-controls="collapseDescription">
                                            Product Description
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseDescription" class="collapse" aria-labelledby="headingDescription" data-parent="#accordionDescription">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="accordion" id="accordionMaterial">
                            <div class="card" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                                <div class="card-header" id="headingMaterial">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-dark" style="font-size: 1.2rem;" type="button" data-toggle="collapse" data-target="#collapseMaterial" aria-expanded="true" aria-controls="collapseMaterial">
                                            Product Material
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseMaterial" class="collapse" aria-labelledby="headingMaterial" data-parent="#accordionMaterial">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="accordion" id="accordionAvailability">
                            <div class="card" style="border: 1px solid rgba(0, 0, 0, 0.125);">
                                <div class="card-header" id="headingAvailability">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-dark" style="font-size: 1.2rem;" type="button" data-toggle="collapse" data-target="#collapseAvailability" aria-expanded="true" aria-controls="collapseAvailability">
                                            Product Availability
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseAvailability" class="collapse" aria-labelledby="headingAvailability" data-parent="#accordionAvailability">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Know More</h2>
            </div>

            <div class="row">
                <div class="col-12">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae laborum eos explicabo possimus nulla velit aut, reiciendis consequatur eveniet dignissimos magni, delectus veritatis veniam unde, quae odio distinctio! Sunt magnam nam, deleniti, totam eos perferendis beatae laboriosam veritatis eveniet eum ut nisi provident. Reprehenderit vel quis delectus culpa eos nihil cupiditate fugiat ratione nulla perferendis, eligendi illum consectetur sit adipisci nostrum sequi doloremque. Odio ratione doloremque asperiores saepe rem? Iure numquam labore temporibus quia voluptatibus corporis laborum delectus, eligendi suscipit dolorum alias quod optio, sint laboriosam voluptates quis possimus magnam nobis cum consectetur pariatur modi voluptate ratione. Ducimus consequuntur cum quibusdam unde odit quod deserunt dolor ipsa pariatur enim, dicta explicabo earum non hic esse placeat nobis repellat temporibus. Eum, saepe? Sint corporis expedita voluptate dolore neque error id officiis, quis nesciunt sit eius dolor possimus est eos architecto cumque!
                    </p>
                    <br>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est odio hic, inventore laborum voluptatem vitae nisi iure, velit quasi culpa aliquam ut asperiores ipsum quae delectus ea et dolorum nulla dignissimos. Aut consequuntur, non odio eaque quae possimus nostrum debitis quos atque, veritatis odit dolore provident. Asperiores fuga corrupti dolores repellat ipsam sit nostrum natus? Optio porro ducimus incidunt eius natus vel beatae exercitationem? Perspiciatis, necessitatibus, provident sapiente optio quos, assumenda distinctio aspernatur quia laudantium expedita quis rem illo beatae veniam unde corporis rerum in ratione deleniti? At, beatae eius.
                    </p>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea consequatur aliquid nobis debitis odit, consectetur repellat pariatur libero quam numquam ullam? Ipsam omnis nulla eos quae inventore amet dignissimos ad sequi excepturi dicta tenetur ratione, odio fugit reiciendis. Blanditiis, quis.
                    </p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/5O5NtS-b3y4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Similar Items</h2>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->

@endsection

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

        $('.slider-single').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            dots: true,
        });

        let panelColor;
        let panelSize;
        let panelTemperature;
        let inputColor;
        let inputSize;
        let inputTemperature;

        function onPageload() {
            inputColor = $('#product_attribute_color');
            inputSize = $('#product_attribute_size');
            inputTemperature = $('#product_attribute_temperature');

            console.log($('input[name="temperature"]:checked').val());
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

            inputColor.val(panelColor);
            inputSize.val(panelSize);
            inputTemperature.val(panelTemperature);
        }

        $('.panel-product-attributes').on('click', function(e) {
            inputColor = $('#product_attribute_color');
            inputSize = $('#product_attribute_size');
            inputTemperature = $('#product_attribute_temperature');

            console.log($('input[name="temperature"]:checked').val());
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

            inputColor.val(panelColor);
            inputSize.val(panelSize);
            inputTemperature.val(panelTemperature);
        });

        onPageload();
    });
</script>
@endpush