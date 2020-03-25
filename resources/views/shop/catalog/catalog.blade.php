@extends('layouts.shop.main')

@section('content')
<div class="container-fluid pt-3 pb-3">
    <div class="row">
        <div class="col-2 hidden-sm">
            <div class="p-3 shadow-sm" style="background-color: #ffffff;">
                <h5 class="text-dark">Panel <small>(WIP)</small></h5>
                <ul class="list-unstyled pl-2 pr-2">
                    <li>
                        <a class="text-dark" href="">Company A</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">Company B</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">Company C</a>
                    </li>
                </ul>

                <h5 class="text-dark">Price <small>(WIP)</small></h5>
                <ul class="list-unstyled pl-2 pr-2">
                    <li>
                        <a class="text-dark" href="">Under RM25</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">RM25 - RM50</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">RM50 - RM100</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">RM100 - RM200</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">RM200 & Above</a>
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

                <h5 class="text-dark">Color <small>(WIP)</small></h5>
                <ul class="list-unstyled pl-2 pr-2">
                    <li>
                        <a class="text-dark" href="">White</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">Beige</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">Red</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">Maroon</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">Grey</a>
                    </li>
                    <li>
                        <a class="text-dark" href="">Black</a>
                    </li>
                </ul>

                <h5 class="text-dark">Rating <small>(WIP)</small></h5>
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
            <div class="row">
                <div class="col-12 mb-1">
                    @if($categoryLevel == 1)
                    {{ Breadcrumbs::view('partials.breadcrumbs.breadcrumbs', 'shop.category.first', $category) }}
                    @endif

                    @if($categoryLevel == 2)
                    {{ Breadcrumbs::view('partials.breadcrumbs.breadcrumbs', 'shop.category.second', $category) }}
                    @endif

                    @if($categoryLevel == 3)
                    {{ Breadcrumbs::view('partials.breadcrumbs.breadcrumbs', 'shop.category.third', $category, $parentCategory) }}
                    @endif
                </div>
            </div>
            <div class="row pb-4">
                <div class="col-12 mb-1">
                    <h3 class="text-muted">{{ $category->name }} <small>(WIP)</small></h3>
                </div>
            </div>

            @if($childCategories->count() > 0)
            <div class="row pb-1">
                <div class="col-12 mb-1">
                    <h3 class="text-dark font-weight-bold">Featured Categories</h3>
                    <hr>
                </div>
            </div>

            <!-- Child Categories -->
            <div class="row custom-mb-5">
                @foreach($childCategories as $childCategory)
                @if($childCategory->childCategories->count() != 0)
                <div class="col-6 col-md-2 text-center">
                    <div class="animated-category-container">
                        <div class="animated-category-image-container">
                            <img src="{{ asset('storage/' . $childCategory->image->path . '/' . $childCategory->image->filename) }}" alt="{{ $childCategory->name }}">
                            <p>{{ $childCategory->name }}</p>
                        </div>
                        <div class="animated-category-list-container">
                            <hr class="w-50 mt-1 mb-1">
                            <ul class="list-unstyled">
                                @foreach($childCategory->childCategories as $anotherChildCategory)
                                <li>
                                    <a class="animated-category-list-container-item" href="/shop/category/{{ $category->slug }}/{{ $childCategory->slug }}/{{ $anotherChildCategory->slug }}">{{ $anotherChildCategory->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-6 col-md-2 text-center">
                    <a class="category-item" href="/shop/category/{{ $category->slug }}/{{ $childCategory->slug }}">
                        <div class="category-container">
                            <div class="category-image-container">
                                <img src="{{ asset('storage/' . $childCategory->image->path . '/' . $childCategory->image->filename) }}" alt="{{ $childCategory->name }}" alt="{{ $childCategory->name }}">
                                <p>{{ $childCategory->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endif
                @endforeach
            </div>
            @endif

            <div class="row pb-1">
                <div class="col-12 mb-1">
                    <h3 class="text-dark font-weight-bold">Featured Deals</h3>
                    <hr>
                </div>
            </div>

            @if($category->products->count() > 0)
            <!-- Products -->
            <div class="row no-gutters">
                @foreach($category->products as $product)
                <div class="col-6 col-md-2 pl-2 pr-2 pb-3">
                    <a style="text-decoration: none; color: #212529;" href="/shop/product/{{ $product->slug }}">
                        <div class="animated-product-container">
                            <div class="animated-product-image-container">
                                <img src="{{ asset('storage/' . $product->images[0]->path . '/' . $product->images[0]->filename) }}" alt="{{ $product->name }}">
                            </div>

                            <div class="animated-product-information-container">
                                <p class="product-name">{{ $product->name }}</p>
                                <div>
                                    <p class="mb-1 product-price">
                                        RM {{ $product->getDecimalPrice() }}
                                    </p>
                                </div>
                                <div>
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
                                    <p class="mb-1">120 ratings</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
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
@endsection

@push('style')
<style>
    .product-rating li {
        display: inline;
    }

    .radius-100 {
        border-radius: 100%;
    }

    .item-info {
        color: rgb(91, 91, 91);
    }

    .item-info h5 {
        font-weight: 600;
        margin: 0;
    }

    .item-info p {
        font-weight: 450;
        font-family: sans-serif;
        font-size: 1rem;
    }

    .item-info .item-price {
        font-size: 1.3rem;
        font-weight: 650;
    }

    .slide-right-overlay {
        position: absolute;
        bottom: 0;
        left: 100%;
        right: 0;
        background-color: rgba(255, 255, 255, 0.4);
        overflow: hidden;
        width: 0;
        height: 100%;
        transition: .5s ease;
        padding-top: 1rem;
    }

    .item-overlay-container:hover .slide-right-overlay {
        width: 100%;
        left: 0;
        padding-left: 1rem;
    }

    .item-overlay-container {
        position: relative;
    }

    .item-overlay {
        position: absolute;
        top: 10px;
        right: 0;
        background: rgb(91, 91, 91);
        background: rgba(91, 91, 91, 0.9);
    }

    .item-quality {
        padding: .25rem;
        font-size: 1rem;
        color: #ffffff;
    }

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