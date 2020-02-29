@if($cart != null)
<div class="dropdownmenu-wrapper">
    <div class="dropdown-cart-header">
        <span class="item-no">
            <span class="cart-quantity">
                {{$cart->count()}}
            </span> Items in cart
        </span>
        <a class="view-cart" href="#">
            Manage Cart
        </a>
    </div>
    <ul class="dropdown-cart-products">
        @foreach($cart as $cartItem)
        <li class="product cremove">
            <div class="product-details">
                <div class="content">
                    <a href="#">
                        <h4 class="product-title">{{ $cartItem->product->name }}</h4>
                    </a>

                    <span class="cart-product-info">
                        <span class="cart-product-qty" id="">{{ $cartItem->quantity }}</span>
                        x <span id="">{{ $cartItem->product->price }}</span>
                    </span>
                </div>
            </div><!-- End .product-details -->

            <figure class="product-image-container">
                <a href="" class="product-image">
                    <img src="https://via.placeholder.com/512" alt="product">
                </a>
            </figure>
        </li><!-- End .product -->
        @endforeach
    </ul><!-- End .cart-product -->

    <div class="dropdown-cart-total">
        <span>Total</span>

        <span class="cart-total-price">
            <span class="cart-total">0.00
            </span>
        </span>
    </div><!-- End .dropdown-cart-total -->

    <div class="dropdown-cart-action">
        <a href="#" class="mybtn1">Checkout</a>
    </div>
</div>
@else
<p class="mt-1 mb-1 pl-2 pr-2 text-left my-auto">There's no item in your shopping cart.</p>
@endif