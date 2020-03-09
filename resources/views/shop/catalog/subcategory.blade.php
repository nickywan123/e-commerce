@extends('layouts.shop.main')

@section('content')


<style>
    .checked {
  color: orange;
}
</style>



<div>
    {{ Breadcrumbs::render('shop.category.subcategory', $category, $subcategory) }}
    <div class="container">
        <div class="row">
            <!-- Options / Recommendation -->
            <div class="col-md-3 col-sm-12 hidden-sm" style="border: 1px solid #e5e5e5; padding: 10px; right:33%; ">
                <!-- Related Categories -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <h6><strong>BEDDING</strong></h6>
                        <ul class="list-group">

                            @foreach ($allCategories as $relatedCategory)
                            <li class="list-group-item">
                                {{-- <a class="text-capitalize" style="font-weight: 520;" href="/shop/category/{{ $relatedCategory->slug }}">{{ $relatedCategory->name }}</a> --}}

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
                                </ul> <br>
                                <ul>
                             <strong>PRICE</strong>
                                <li>Under RM25 </li> 
                                <li>RM 25 to RM 50 </li>
                                <li>RM50 to RM100 </li>
                                <li>RM100 to RM200 </li>
                                <li>RM200 & Above </li>
                                
                                <input type="number" placeholder="Min" id="quantity" name="quantity" min="1" max="300">
                                <input type="number" placeholder="Max" id="quantity" name="quantity" min="1" max="300">
                                </ul> <br>
                                
                                <ul>
                                <strong>COLOR</strong>
                                <li><input type="checkbox" id="white" name="white" value="white">
                                    <label for="white">WHITE</label>
                                </li><br>
                                <li><input type="checkbox" id="beige" name="beige" value="beige">
                                    <label for="beige">BEIGE</label>
                                </li><br>
                                <li><input type="checkbox" id="red" name="red" value="red">
                                    <label for="red">RED</label>
                                </li><br>
                                <li><input type="checkbox" id="maroon" name="maroon" value="maroon">
                                    <label for="beige">MAROON</label>
                                </li><br>
                                <li><input type="checkbox" id="grey" name="grey" value="grey">
                                    <label for="grey">GREY</label>
                                </li><br>
                                <li><input type="checkbox" id="black" name="black" value="black">
                                    <label for="black">BLACK</label>
                                </li><br>
                                </ul>

                                <ul>
                                   <strong>RATINGS</strong> 
                                   <li>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                           
                                </li>
                                <li>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                           and up
                                </li>
                                <li>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                           and up
                                </li>
                                <li>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                           and up
                                </li>
                                <li>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star"></span>
                                           and up
                                </li>
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
                <div class="pt-1" style="margin: 20px auto; ">
              <!-- Product cards -->
                    <div class="row" >
                        @foreach($subcategory->products as $product)
                        <div class="col-md-3 col-6 pb-3 pl-1 pr-1">
                            <div class="item"  >
                                <div class="item-img" >
                                    <div class="sell-area">
                                        <span class="sale" style="background-color:white;">{{ $product->quality->name }}</span>
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
                                        <form method="POST" action="{{ route('shop.cart.add-item') }}">
                                            @method('POST')
                                            @csrf
                                            <input type="hidden" name="productId" value="{{ $product->id }}">
                                            <input type="hidden" name="productQuantity" value="1">
                                            <button type="submit" class="btn btn-primary float-right-md w-100-sm">Add to cart</button>
                                        </form>
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