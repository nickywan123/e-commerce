@if($cartItems->count() == 0)
<div class="col-7">
    <div class="card">
        <div class="card-body">
            <h4>There's no item(s) in your cart.</h4>
            <p>Visit our <a href="/shop">shop</a> to start adding items to your cart.</p>
        </div>
    </div>
</div>
<div class="col-5">
    <div class="card">
        <div class="card-body">
            <h4>Cart Summary</h4>
            <div class="row mb-2">
                <div class="col-6 my-auto">
                    Total:
                </div>

                <div class="col-6 text-right my-auto">
                    <h4 class="my-auto">RM 0.00</h4>
                </div>
            </div>
            <div class="text-right">
                <button class="btn btn-primary" disabled>Checkout</button>
            </div>
        </div>
    </div>
</div>
@else
<div class="col-7">
    @foreach($cartItems as $cartItem)
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">

                <div class="col-4">
                    <img class="responsive-img" src="{{ asset('storage/' . $cartItem->product->images[0]->path . $cartItem->product->images[0]->filename) }}" alt="">
                </div>

                <div class="col-8">
                    <button class="btn btn-sm btn-danger float-right" id="DeleteCartItem" value="{{ $cartItem->id }}">Delete</button>
                    <h4 style="width: 80%;">{{ $cartItem->product->name }}</h4>
                    <p>x {{ $cartItem->quantity }}</p>
                    <h5>RM {{ $cartItem->total_price }}</h5>

                    <div>
                        <ul class="list-unstyled">
                            @if($cartItem->color)
                            <li class="text-capitalize">Color: {{ $cartItem->color->color_name }}</li>
                            @endif
                            @if($cartItem->dimension)
                            <li class="text-capitalize">Dimensions: {{ $cartItem->dimension->width }} x {{ $cartItem->dimension->height }} x {{ $cartItem->dimension->depth }} {{ $cartItem->dimension->measurement_unit }}</li>
                            @endif
                            @if($cartItem->length)
                            <li class="text-capitalize">Length: {{ $cartItem->length->length }} {{ $cartItem->length->measurement_unit }}</li>
                            @endif
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="col-5">
    <div class="card">
        <div class="card-body">
            <h4>Cart Summary</h4>
            <div class="row mb-2">
                <div class="col-6 my-auto">
                    Total:
                </div>

                <div class="col-6 text-right my-auto">
                    <h4 class="my-auto">RM
                        <?php
                        $totalPrice = 0;
                        foreach ($cartItems as $cartItem) {
                            $totalPrice = $totalPrice + $cartItem->total_price;
                        }
                        echo $totalPrice;
                        ?>
                    </h4>
                </div>
            </div>
            <div class="text-right">
                <form method="POST" action="/shop/cart/checkout">
                    @csrf
                    <?php
                    foreach ($cartItems as $cartItem) {
                        echo '<input type="hidden" name="cartItemId[]" value="' . $cartItem->id . '">';
                    }
                    ?>
                    <button class="btn btn-primary" type="submit">Checkout</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endif