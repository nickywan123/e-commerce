@extends('layouts.shop.main')

@section('content')
<div>
    <!-- Breadcrumb here -->
    <div class="container">
        <div class="row">
            <div class="col-12 hidden-md pt-1 pl-1 pr-1 mb-2">
                <h1 class="pl-0 pr-0 text-capitalize text-left" style="font-size: 1.5rem; margin: 0;">{{ $product->name }}</h1>
                <div class="text-left my-auto mt-1">
                    <span class="fa fa-star checked align-middle"></span>
                    <span class="fa fa-star checked align-middle"></span>
                    <span class="fa fa-star checked align-middle"></span>
                    <span class="fa fa-star checked align-middle"></span>
                    <span class="fa fa-star align-middle"></span>
                    <span class="ml-1 align-middle">(60 ratings)</span>
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
                            <span class="fa fa-star checked align-middle"></span>
                            <span class="fa fa-star checked align-middle"></span>
                            <span class="fa fa-star checked align-middle"></span>
                            <span class="fa fa-star checked align-middle"></span>
                            <span class="fa fa-star align-middle"></span>
                            <span class="ml-1 align-middle">(60 ratings)</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12 text-md-left text-center">
                        <p>{{ $product->summary }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="mb-1">Size</p>
                        <div class="boxed">
                            <input type="radio" id="size0" name="size" value="all">
                            <label for="size0">All sizes</label>

                            <input type="radio" id="size1" name="size" value="120cm x 200cm">
                            <label for="size1">120cm x 200cm</label>

                            <input type="radio" id="size2" name="size" value="120cm x 200cm">
                            <label for="size2">120cm x 200cm</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="mb-1">Color</p>
                        <div class="boxed">
                            <input type="radio" id="color0" name="color" value="120cm x 200cm">
                            <label for="color0">All colors</label>
                        </div>
                        <div class="boxed">
                            <input type="radio" id="grey" name="color" value="Grey">
                            <label class="color-options" for="grey" data-toggle="tooltip" data-placement="top" title="Tooltip on top" style="background-color: yellow;"></label>

                            <input type="radio" id="white" name="color" value="White">
                            <label class="color-options" for="white" style="background-color: blue;"></label>

                            <input type="radio" id="green" name="color" value="Green">
                            <label class="color-options" for="green" style="background-color: red;"></label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mb-0 text-left">
                        <h4 class="mb-0">Sold By</h4>
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
                                                    <p class="mb-1 font-weight-bold">Panel 1 Sdn Bhd</p>
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
                                <a style="text-decoration: none; color: #212529;" href="#exampleModal2" data-toggle="modal" data-target="#exampleModal2">
                                    <div class="card panel-option-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 mb-0">
                                                    <img class="mw-100" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/corporate-company-logo-design-template-2402e0689677112e3b2b6e0f399d7dc3_screen.jpg?ts=1561532453" alt="">
                                                </div>
                                                <div class="col-8 mb-0 text-left">
                                                    <p class="mb-1 font-weight-bold">Panel 2 Sdn Bhd</p>
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
                                                    <p class="mb-1">Standard</p>
                                                    <p class="mb-0">Price: </p>
                                                    <p class="mb-1 font-weight-bold">RM 100</p>
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
                                                    <img class="mw-100" src="https://dypdvfcjkqkg2.cloudfront.net/original/4841768-7155.jpg" alt="">
                                                </div>
                                                <div class="col-8 mb-0 text-left">
                                                    <p class="mb-1 font-weight-bold">Panel 3 Sdn Bhd</p>
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
                                                    <p class="mb-1">Standard</p>
                                                    <p class="mb-0">Price: </p>
                                                    <p class="mb-1 font-weight-bold">RM 150</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-md-6 pl-1 pr-1 mb-1">
                                <a style="text-decoration: none; color: #212529;" href="#exampleModal2" data-toggle="modal" data-target="#exampleModal2">
                                    <div class="card panel-option-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4 mb-0">
                                                    <img class="mw-100" src="https://cdn6.f-cdn.com/contestentries/1465575/31577979/5c471a44972fb_thumb900.jpg" alt="">
                                                </div>
                                                <div class="col-8 mb-0 text-left">
                                                    <p class="mb-1 font-weight-bold">Panel 4 Sdn Bhd</p>
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
                                                    <p class="mb-1">Standard</p>
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

                <!-- <form method="POST" action="{{ route('shop.cart.add-item') }}">
                    @method('POST')
                    @csrf
                    <input type="hidden" name="productId" value="{{ $product->id }}">
                    @if(!$product->colors->isEmpty())
                    <input type="hidden" name="productColorId" value="{{ $product->getDefaultColor()->id }}">
                    @endif
                    @if(!$product->dimensions->isEmpty())
                    <input type="hidden" name="productDimensionId" value="{{ $product->getDefaultDimension()->id }}">
                    @endif
                    @if(!$product->lengths->isEmpty())
                    <input type="hidden" name="productLengthId" value="{{ $product->getDefaultLength()->id }}">
                    @endif
                    <input type="hidden" name="productQuantity" value="1">
                    <button type="submit" class="btn btn-primary float-right-md w-100-sm">Add to cart</button>
                </form> -->

            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Panel 1 Sdn Bhd - {{ $product->name }}</h5>
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
                            <p class="mb-1">100% Cotton Shell, 100% Polyester Fiber Fill</p>
                            <p>With 15 years experience in manufacturing pillows, with 2 million satisfied customers, we guarantee 100% satisfaction from buying this product.</p>
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

                <div class="row">
                    <div class="col-12 col-md-8 offset-md-4 text-center text-md-left">
                        <p class="mb-1">Size</p>
                        <hr class="mt-1">
                        <div class="boxed">
                            <input type="radio" id="size1Modal" name="sizeModal" value="120cm x 200cm">
                            <label for="size1Modal">120cm x 200cm</label>

                            <input type="radio" id="size2Modal" name="sizeModal" value="120cm x 200cm">
                            <label for="size2Modal">120cm x 200cm</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-4 text-center text-md-left">
                        <p class="mb-1">Color</p>
                        <hr class="mt-1">
                        <div class="boxed">
                            <input type="radio" id="greyModal" name="colorModal" value="Grey">
                            <label class="color-options" for="greyModal" data-toggle="tooltip" data-placement="top" title="Tooltip on top" style="background-color: yellow;"></label>

                            <input type="radio" id="whiteModal" name="colorModal" value="White">
                            <label class="color-options" for="whiteModal" style="background-color: blue;"></label>

                            <input type="radio" id="greenModal" name="colorModal" value="Green">
                            <label class="color-options" for="greenModal" style="background-color: red;"></label>
                        </div>
                    </div>
                </div>

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
                    <button style="color: #000; background-color: #fccb34;" type="button" class="btn btn-primary">Add to cart</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold" id="exampleModalLabel">Panel 2 Sdn Bhd - {{ $product->name }}</h5>
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
                            <p class="mb-1">100% Cotton Shell, 100% Polyester Fiber Fill</p>
                            <p>With 15 years experience in manufacturing pillows, with 2 million satisfied customers, we guarantee 100% satisfaction from buying this product.</p>
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

                <div class="row">
                    <div class="col-12 col-md-8 offset-md-4 text-center text-md-left">
                        <p class="mb-1">Size</p>
                        <hr class="mt-1">
                        <div class="boxed">
                            <input type="radio" id="size1Modal" name="sizeModal" value="120cm x 200cm">
                            <label for="size1Modal">120cm x 200cm</label>

                            <input type="radio" id="size2Modal" name="sizeModal" value="120cm x 200cm">
                            <label for="size2Modal">120cm x 200cm</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8 offset-md-4 text-center text-md-left">
                        <p class="mb-1">Color</p>
                        <hr class="mt-1">
                        <div class="boxed">
                            <input type="radio" id="greyModal" name="colorModal" value="Grey">
                            <label class="color-options" for="greyModal" data-toggle="tooltip" data-placement="top" title="Tooltip on top" style="background-color: yellow;"></label>

                            <input type="radio" id="whiteModal" name="colorModal" value="White">
                            <label class="color-options" for="whiteModal" style="background-color: blue;"></label>

                            <input type="radio" id="greenModal" name="colorModal" value="Green">
                            <label class="color-options" for="greenModal" style="background-color: red;"></label>
                        </div>
                    </div>
                </div>

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
                    <button style="color: #000; background-color: #fccb34;" type="button" class="btn btn-primary">Add to cart</button>
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
            postProductQuantity.val(productQuantity.val());
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