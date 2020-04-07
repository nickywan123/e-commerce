@extends('layouts.shop.main')

@section('content')
<div class="container-fluid pt-3 pb-3">
    <div class="row">
        <div class="col-2 hidden-sm">
            <div class="p-3 shadow-sm" style="background-color: #ffffff;">

                <h5 class="text-dark ">Panel <small>(WIP)</small></h5>

                <ul class="list-unstyled pl-2 pr-2 ">
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
                        <a class="text-dark">Under RM25</a>
                    </li>
                    <li>
                        <a class="text-dark">RM25 - RM50</a>
                    </li>
                    <li>
                        <a class="text-dark">RM50 - RM100</a>
                    </li>
                    <li>
                        <a class="text-dark">RM100 - RM200</a>
                    </li>
                    <li>
                        <a class="text-dark">RM200 & Above</a>
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
                        <a class="text-dark" id="white" href="javascript:void(0)">White</a>
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
                                    <a class="animated-category-list-container-item category-link" data-value="{{ $anotherChildCategory->slug }}" data-name="{{ $anotherChildCategory->name }}" href="javascript:void(0)">{{ $anotherChildCategory->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-6 col-md-2 text-center">
                    <a class="category-item category-link" data-value="{{ $childCategory->slug }}" data-name="{{ $childCategory->name }}" href="javascript:void(0)">
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
                    <h3 class="text-dark font-weight-bold">Featured Deals <small id="child-category-indicator" class='text-muted text-capitalize'></small></h3>
                    <div class="boxed">
                        <input type="radio" class="catalog-quality" id="catalog-quality-all" name="catalog-quality" value="all">
                        <label class="catalog-quality" for="catalog-quality-all">All</label>

                        <input type="radio" class="catalog-quality" id="catalog-quality-standard" name="catalog-quality" value="standard">
                        <label class="catalog-quality" for="catalog-quality-standard">Standard</label>

                        <input type="radio" class="catalog-quality" id="catalog-quality-moderate" name="catalog-quality" value="moderate">
                        <label class="catalog-quality" for="catalog-quality-moderate">Moderate</label>

                        <input type="radio" class="catalog-quality" id="catalog-quality-premium" name="catalog-quality" value="premium">
                        <label class="catalog-quality" for="catalog-quality-premium">Premium</label>
                    </div>
                    <hr style="margin-top: 0.2rem;">
                </div>
            </div>

            <div id="loadingDiv" class="text-center">
                <div class="spinner-border text-warning" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>

            <!-- <div id="category-product-container">
                
            </div> -->

            <div id="category-product-container">

                <div class="row no-gutters">
                    <div class="col-6 col-md-2 pl-2 pr-2 pb-3">
                        <div class="tooltip-container">
                            <a data-toggle="modal" data-target="#exampleModal">
                                <div class="animated-product-container">
                                    <div class="animated-product-image-container">
                                        <img src="http://placehold.jp/250x250.png" alt="#">
                                    </div>

                                    <div class="animated-product-information-container">
                                        <p class="product-name">Product 1</p>
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

                                <div class="right">
                                    <div class="text-content">
                                        <h6>Product 1 - <small>Sold By</small></h6>
                                        <div class="row">
                                            <div class="col-12">
                                                <a href="" style="text-decoration: none;">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="text-dark">Panel 1</h5>
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
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-12">
                                                <a href="" style="text-decoration: none;">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="text-dark">Panel 1</h5>
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
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="col-12">
                                                <a href="" style="text-decoration: none;">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="text-dark">Panel 1</h5>
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
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <i></i>
                                </div>
                            </a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade d-md-none" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2 pl-2 pr-2 pb-3">
                        <div class="tooltip-container">
                            <div class="animated-product-container">
                                <div class="animated-product-image-container">
                                    <img src="http://placehold.jp/250x250.png" alt="#">
                                </div>

                                <div class="animated-product-information-container">
                                    <p class="product-name">Product 2</p>
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

                            <div class="right">
                                <div class="text-content">
                                    <h6>Product 2 - <small>Sold By</small></h6>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <i></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2 pl-2 pr-2 pb-3">
                        <div class="tooltip-container">
                            <div class="animated-product-container">
                                <div class="animated-product-image-container">
                                    <img src="http://placehold.jp/250x250.png" alt="#">
                                </div>

                                <div class="animated-product-information-container">
                                    <p class="product-name">Product 3</p>
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

                            <div class="right">
                                <div class="text-content">
                                    <h6>Product 3 - <small>Sold By</small></h6>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <i></i>
                            </div>
                        </div>
                    </div>

                    <!-- Right -->
                    <div class="col-6 col-md-2 pl-2 pr-2 pb-3">
                        <div class="tooltip-container">
                            <div class="animated-product-container">
                                <div class="animated-product-image-container">
                                    <img src="http://placehold.jp/250x250.png" alt="#">
                                </div>

                                <div class="animated-product-information-container">
                                    <p class="product-name">Product 4</p>
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

                            <div class="left">
                                <div class="text-content">
                                    <h6>Product 4 - <small>Sold By</small></h6>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <i></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2 pl-2 pr-2 pb-3">
                        <div class="tooltip-container">
                            <div class="animated-product-container">
                                <div class="animated-product-image-container">
                                    <img src="http://placehold.jp/250x250.png" alt="#">
                                </div>

                                <div class="animated-product-information-container">
                                    <p class="product-name">Product 5</p>
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

                            <div class="left">
                                <div class="text-content">
                                    <h6>Product 5 - <small>Sold By</small></h6>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <i></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-2 pl-2 pr-2 pb-3">
                        <div class="tooltip-container">
                            <div class="animated-product-container">
                                <div class="animated-product-image-container">
                                    <img src="http://placehold.jp/250x250.png" alt="#">
                                </div>

                                <div class="animated-product-information-container">
                                    <p class="product-name">Product 6</p>
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

                            <div class="left">
                                <div class="text-content">
                                    <h6>Product 6 - <small>Sold By</small></h6>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                        <div class="col-12">
                                            <a href="" style="text-decoration: none;">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="text-dark">Panel 1</h5>
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
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <i></i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('style')
<style>
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

    .spinner-border {
        display: inline-block;
        width: 7rem;
        height: 7rem;
        vertical-align: text-bottom;
        border: 0.75em solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner-border 0.75s linear infinite;
        animation: spinner-border 0.75s linear infinite;
    }

    .tooltip-container {
        position: relative;
        border-bottom: 1px dotted #666;
        text-align: left;
    }

    .tooltip-container .right {
        width: 300px;
        top: 50%;
        left: 90%;
        margin-left: 20px;
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
        margin-right: 20px;
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

    @media (max-width: 767px) {
        .tooltip-container .right {
            display: none;
        }

        .tooltip-container .left {
            display: none;
        }
    }
</style>
@endpush

@push('script')
<script>
    $(document).ready(function() {
        $('#exampleModal').on('show.bs.modal', function(e) {
            if ($(window).width() > 375) {
                return e.preventDefault();
            }
        });

        // Variable Initialization
        var loading = $('#loadingDiv').hide();
        const ItemContainer = $('#category-product-container');
        let categorySlug;
        let chidCategoryIndicator = $('#child-category-indicator');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Run function
        // onPageLoad();

        //Run query search function
        // onQueryLoad();

        // onFilterLoad();

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
                url: "{{ route('web.shop.category', ['categorySlug' => $category->slug])}}",
                type: "get",
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {

                    console.log(result.status + ' ' + result.statusText);
                }
            });
        }

        $('.category-link').on('click', function(e) {
            e.preventDefault();

            categorySlug = $(this).data('value');
            categoryName = $(this).data('name');

            $.ajax({
                async: true,
                beforeSend: function() {
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    loading.hide();
                    chidCategoryIndicator.text('/ ' + categoryName)
                    ItemContainer.show();

                },
                url: "/web/shop/category/" + categorySlug,
                type: "get",
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        });

        /*Author Nicholas*/

        function onQueryLoad() {
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
                url: "{{ route('web.shop.category', ['categorySlug' =>" + query + "])}}",
                type: "get",
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        }



        $('#search-button').on('click', function(e) {
            e.preventDefault();
            var query = document.getElementById('search-box').value;
            query = query.replace(/\s+/g, '-').toLowerCase();


            $.ajax({
                async: true,
                beforeSend: function() {
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    loading.hide();
                    chidCategoryIndicator.text('/ ' + query)
                    ItemContainer.show();

                },
                url: "/web/shop/category/" + query,
                type: "get",
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        });

        /*Filter section*/


        function onFilterLoad() {
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
                url: "{{ route('web.shop.category', ['categorySlug' => $category->slug])}}",
                type: "get",
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {

                    console.log(result.status + ' ' + result.statusText);
                }
            });
        }

        $('#white').on('click', function(e) {
            e.preventDefault();
            // var query=document.getElementById('search-box').value;
            // query = query.replace(/\s+/g, '-').toLowerCase();


            $.ajax({
                async: true,
                beforeSend: function() {
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    loading.hide();
                    chidCategoryIndicator.text('/ ' + categoryName)
                    ItemContainer.show();

                },
                url: "/web/shop/category/" + categorySlug,
                type: "get",
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        });






    });
</script>
@endpush