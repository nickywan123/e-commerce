@extends('layouts.shop.main')

@section('content')
<div>
    {{ Breadcrumbs::render('shop.category.subcategory', $category, $subcategory) }}
    <div class="container">
        <div class="row">
            <!-- Options / Recommendation -->
            <div class="col-md-3 col-sm-12 hidden-sm" style="border: 1px solid #e5e5e5; padding: 10px;">
                <!-- Related Categories -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <h6>Related Categories</h6>
                        <ul class="list-group">

                            @foreach ($allCategories as $relatedCategory)
                            <li class="list-group-item">
                                <a class="text-capitalize" style="font-weight: 520;" href="/shop/category/{{ $relatedCategory->slug }}">{{ $relatedCategory->name }}</a>

                                @if($relatedCategory->id == $category->id)
                                <ul class="list-group">
                                    @foreach($category->subcategories as $childCategory)
                                    <li class="list-group-item">
                                        <a class="text-capitalize" style="font-weight: 490;" href="/shop/category/{{ $category->slug }}/{{ $childCategory->slug }}">{{ $childCategory->name }}</a>
                                        @if($childCategory->id == $subcategory->id)
                                        <ul class="list-group">
                                            @foreach($subcategory->types as $childType)
                                            <li class="list-group-item">
                                                <a class="text-capitalize" style="font-weight: 400;" href="/shop/category/{{ $category->slug }}/{{ $childCategory->slug }}/{{ $childType->slug }}">{{ $childType->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>

                    </li>
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
                        @foreach($subcategory->products as $product)
                        <div class="col-md-4 col-6 pb-3 pl-1 pr-1">
                            <div class="item">
                                <div class="item-img">
                                    <div class="sell-area">
                                        <span class="sale" style="background-color: #000000;">Standard</span>
                                    </div>
                                    <div class="extra-list">
                                        <ul>
                                            <li>
                                                <span rel-toggle="tooltip" title="" data-toggle="modal" id="wish-btn" data-target="#comment-log-reg" data-placement="right" data-original-title="Add To Wishlist">
                                                    <i class="icofont-favourite"></i>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <img src="{{ asset('storage/' . $product->images[0]->path . $product->images[0]->filename) }}" alt="">
                                </div>
                                <div class="info">
                                    <a href="/shop/product/{{ $product->slug }}" class="price text-capitalize">{{ $product->name }}</a>
                                    <h5 class="name">${{ $product->price }}</h5>
                                    <div class="item-cart-area">
                                        <!-- <a id="addToCartBtn" href="#exampleModal" data-toggle="modal" data-target="#exampleModal">Add to cart</a> -->
                                        <a class="btn btn-primary" href="/shop/add-to-cart/{{ $product->id }}">Add to cart</a>
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
@endsection

@push('style')
<style>
    .list-group-item {
        border: 0;
        padding: .15rem .75rem;
    }
</style>
@endpush