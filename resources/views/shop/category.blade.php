@extends('layouts.shop.main')

@section('content')
<div>
    {{ Breadcrumbs::render('shop.category', $category) }}

    <div class="container">
        <div class="row">

            <!-- Options / Recommendation -->
            <div class="col-md-3 col-sm-12 hidden-sm" style="border: 1px solid #e5e5e5; padding: 10px;">
                <!-- Related Categories -->
                <ul class="list-unstyled">
                    <li class="font-weight-bold pb-1">Related Categories</li>
                    @foreach ($relatedCategories as $relatedCategory)
                    <li class="pb-1">
                        <a class="p-2 text-capitalize" style="font-weight: 520;" href="/shop/category/{{ $relatedCategory->slug }}">{{ $relatedCategory->name }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Products -->
            <div class="col-md-9 col-sm-12">
                <div class="pt-1">
                    <!-- Sort by select button -->
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group w-100-sm w-50-md">
                                <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                    <option>Sort by</option>
                                    <option>Popularity</option>
                                    <option>Price low to high</option>
                                    <option>Price high to low</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Product cards -->
                    <div class="row">
                        @foreach($category->products as $product)
                        <div class="col-md-4 col-6 pb-3 pl-1 pr-1">
                            <div class="item">
                                <div class="item-img">
                                    <div class="extra-list">
                                        <ul>
                                            <li>
                                                <span rel-toggle="tooltip" title="" data-toggle="modal" id="wish-btn" data-target="#comment-log-reg" data-placement="right" data-original-title="Add To Wishlist">
                                                    <i class="icofont-favourite"></i>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <img src="https://via.placeholder.com/512" alt="">
                                </div>
                                <div class="info">
                                    <a href="" class="price text-capitalize">{{ $product->name }}</a>
                                    <h5 class="name">${{ $product->price }}</h5>
                                    <div class="item-cart-area">
                                        <a id="addToCartBtn" href="#exampleModal" data-toggle="modal" data-target="#exampleModal">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">1 New item(s) has been added to your cart.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="border-top: 1px solid #e5e5e5;">
                <div class="row">
                    <div class="col" style="border-right: 1px solid grey;">
                        <div class="row">
                            <div class="col-4">
                                <img src="https://via.placeholder.com/512" alt="">
                            </div>
                            <div class="col-8">
                                <p class="pt-2" style="line-height: 0.5; font-weight: 550;">Product 1</p>
                                <p style="line-height: 0.5; font-size: 0.85rem;">Panel 1, Color-family: Black</p>
                                <p style="font-size: 1.2rem; color: #000111; font-weight: 580; letter-spacing: 2px;">RM 30</p>
                                <p>Qty: 1</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <p class="pt-2" style="line-height: 0.5; font-weight: 550;">My Shopping Cart <small>(5 items)</small></p>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <p>Sub-total --</p>
                            </div>
                            <div class="col-6 text-right">
                                <p>RM 15.00</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p>Shipping fee --</p>
                            </div>
                            <div class="col-6 text-right">
                                <p>RM 4.00</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p style="font-weight: 530; font-size: 1.15rem;">Total<p>
                            </div>
                            <div class="col-6 text-right">
                                <p style="font-weight: 530; font-size: 1.15rem;">RM 19.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="dismissModal" type="button" class="btn btn-secondary" data-dismiss="modal">Continue shopping</button>
                <button type="button" class="btn btn-primary text-uppercase">Go to cart</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
<style>
    @media (max-width: 576px) {
        .hidden-sm {
            display: none;
        }

        .w-100-sm {
            width: 100%;
        }
    }

    @media (min-width: 768px) {
        .hidden-md {
            display: none;
        }

        .w-50-md {
            width: 50%;
        }
    }

    .item:hover .info {
        top: -70px;
        -webkit-transition: all linear .3s;
        -moz-transition: all linear .3s;
        -o-transition: all linear .3s;
        transition: all linear .3s;
    }

    .item .item-img .extra-list ul li span {
        width: 30px;
        height: 30px;
        line-height: 30px;
        border-radius: 50px;
        font-size: 14px;
        margin-bottom: 7px;
        border: 1px solid #ff5500;
        display: inline-block;
        text-align: center;
        color: #fff;
        background: #ff5500;
        -webkit-transition: 0.3s ease-in;
        -moz-transition: 0.3s ease-in;
        -o-transition: 0.3s ease-in;
        transition: 0.3s ease-in;
        border: 1px solid #0f78f2;
        background: #0f78f2;
    }

    .item:hover .info {
        z-index: 10;
        top: -70px;
        -webkit-transition: all linear .3s;
        -moz-transition: all linear .3s;
        -o-transition: all linear .3s;
        transition: all linear .3s;
    }

    .modal-title {
        padding-top: 10px;
        padding-bottom: 10px;
    }
</style>
@endpush

@push('script')
<script>
    $("a").each(function() {
        this.onmouseup = this.blur();
    });
    $('#dismissModal').click(function() {
        $('#addToCartBtn').blur(); // or $(this).blur();
        //...  
    });

    $("a").keypress(function() {
        this.blur();
        this.hideFocus = false;
        this.style.outline = null;
    });
    $("a").mousedown(function() {
        this.blur();
        this.hideFocus = true;
        this.style.outline = 'none';
    });
</script>
@endpush