@if($category->products->count() > 0)
<!-- Products -->
<div class="row no-gutters">
    @foreach($category->products as $product)
    <div class="col-6 col-md-2 pl-2 pr-2 pb-3">
        <a style="text-decoration: none; color: #212529;" href="/shop/product/{{ $product->name_slug }}">
            <div class="animated-product-container">
                <div class="animated-product-image-container">
                    <img src="{{ asset('storage/' . $product->images[0]->path . '/' . $product->images[0]->filename) }}" alt="{{ $product->name }}">
                </div>

                <div class="animated-product-information-container">
                    <p class="product-name">{{ $product->name }}</p>
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