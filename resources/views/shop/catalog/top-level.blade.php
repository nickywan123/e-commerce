@extends('layouts.shop.main')

@section('content')
<div class="container-fluid pt-3 pb-3">


    <div class="row">
        <div class="col-2 hidden-sm">
            <div class="p-3 shadow-sm" style="background-color: #ffffff;">
                <h5 class="text-dark">Panel</h5>
                <ul class="list-unstyled pl-2 pr-2">
                    <li>
                        <a href="">Company A</a>
                    </li>
                    <li>
                        <a href="">Company B</a>
                    </li>
                    <li>
                        <a href="">Company C</a>
                    </li>
                </ul>

                <h5 class="text-dark">Price</h5>
                <ul class="list-unstyled pl-2 pr-2">
                    <li>
                        <a href="">Under RM25</a>
                    </li>
                    <li>
                        <a href="">RM25 - RM50</a>
                    </li>
                    <li>
                        <a href="">RM50 - RM100</a>
                    </li>
                    <li>
                        <a href="">RM100 - RM200</a>
                    </li>
                    <li>
                        <a href="">RM200 & Above</a>
                    </li>
                    <li class="p-1">
                        <form action="" class="form-inline">
                            <div class="form-inline row">
                                <input type="text" class="form-control col-4 border-rounded-0" id="price_min" placeholder="Min">
                                <input type="text" class="form-control col-4 border-rounded-0" id="price_max" placeholder="Max">
                                <button class="btn border-rounded-0 bg-bujishu-gold"><i class="fa fa-play"></i></button>
                            </div>
                        </form>
                    </li>
                </ul>

                <h5 class="text-dark">Color</h5>
                <ul class="list-unstyled pl-2 pr-2">
                    <li>
                        <a href="">White</a>
                    </li>
                    <li>
                        <a href="">Beige</a>
                    </li>
                    <li>
                        <a href="">Red</a>
                    </li>
                    <li>
                        <a href="">Maroon</a>
                    </li>
                    <li>
                        <a href="">Grey</a>
                    </li>
                    <li>
                        <a href="">Black</a>
                    </li>
                </ul>

                <h5 class="text-dark">Rating</h5>
                <ul class="list-unstyled pl-2 pr-2">
                    <li>
                        <a href="">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-12 col-md-10">
            <?php
            $childCategories = App\Models\Categories\Category::find(1)->childCategories->take(6);
            ?>
            <div class="row pb-1">
                <div class="col-12 mb-1">
                    <h3 class="text-dark">Featured Categories</h3>
                    <hr>
                </div>
            </div>
            <div class="row mb-3">
                @foreach($childCategories as $childCategory)
                <div class="col-6 col-md-2 text-center">
                    <div class="slide-up-image-container">
                        <img class="slide-up-image" src="https://via.placeholder.com/640" alt="">
                        <div class="slide-up-overlay">
                            <div class="slide-up-overlay-content">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="">3rd Level 1</a>
                                    </li>
                                    <li>
                                        <a href="">3rd Level 2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <h5 class="pt-2">{{ $childCategory->name }}</h5>
                </div>
                @endforeach
            </div>

            <div class="row pb-1">
                <div class="col-12 mb-1">
                    <h3 class="text-dark">Featured Deals</h3>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-md-2">
                    <div class="item-overlay">
                        <img class="mw-100" src="https://via.placeholder.com/640" alt="">
                    </div>
                </div>
                <div class="col-6 col-md-2">
                    <img class="mw-100" src="https://via.placeholder.com/640" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
<style>
    .fa.fa-star {
        color: #6e6e6e;
    }

    .fa.fa-star.checked {
        color: #fccb34;
    }

    /* Custom animation */
    .slide-up-image-container {
        position: relative;
    }

    .slide-up-image {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 100%;
        transition: all .3s ease-in-out;
    }

    .slide-up-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.99);
        overflow: hidden;
        width: 100%;
        height: 0;
        transition: .5s ease;

    }

    .slide-up-overlay-content {
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .slide-up-image-container:hover .slide-up-image {
        transform: scale(0.65);
    }

    .slide-up-image-container:hover .slide-up-overlay {
        height: 100%;
        border: 1px solid #fccb34;
    }
</style>
@endpush