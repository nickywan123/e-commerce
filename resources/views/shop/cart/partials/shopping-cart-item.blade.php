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
<div class="col-12 col-md-7">
    @foreach($cartItems as $cartItem)
    <div class="card mb-2">
        <div class="card-body">
            <div class="row">

                <div class="col-4">
                    <img class="responsive-img" src="{{ asset('storage/' . $cartItem->product->parentProduct->images[0]->path . $cartItem->product->parentProduct->images[0]->filename) }}" alt="">
                </div>

                <div class="col-8">
                    <button class="btn btn-sm btn-danger float-right" id="DeleteCartItem" value="{{ $cartItem->id }}">Delete</button>
                    <h4 style="width: 80%;">{{ $cartItem->product->parentProduct->name }}</h4>
                    <p>x {{ $cartItem->quantity }}</p>
                    <h5>RM {{ $cartItem->getDecimalTotalPrice() }}</h5>

                    <div>
                        <ul class="list-unstyled">
                            @if(array_key_exists('product_color', $cartItem->product_information))
                            <li class="text-capitalize">Color: {{ $cartItem->product_information['product_color'] }}</li>
                            @endif
                            @if(array_key_exists('product_size', $cartItem->product_information))
                            <li class="text-capitalize">Size: {{ $cartItem->product_information['product_size'] }}</li>
                            @endif
                            @if(array_key_exists('product_temperature', $cartItem->product_information))
                            <li class="text-capitalize">Color Temperature: {{ $cartItem->product_information['product_temperature'] }}</li>
                            @endif
                            @if(array_key_exists('product_temperature', $cartItem->product_information))
                            <li class="text-capitalize">Sold By: {{ $cartItem->product->panel->company_name }}</li>
                            @endif
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    @endforeach
</div>
<div class="col-12 col-md-5">
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
                        echo number_format(($totalPrice / 100), 2);
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
                <!-- Button trigger modal -->
                <!-- <button style="color: #000000;" type="button" class="btn btn-secondary bjsh-btn-gradient" data-toggle="modal" data-target="#exampleModal">
                    Checkout
                </button> -->
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Payment Method</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/shop/cart/checkout">
                <div class="modal-body text-center">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary">
                            <input type="radio" name="options" id="option1" autocomplete="off" value="offline" required> Offline Payment
                        </label>
                        <label class="btn btn-primary disabled">
                            <input type="radio" name="options" id="option2" autocomplete="off" value="fpx" disabled required> FPX Payment
                        </label>
                        <label class="btn btn-primary disabled">
                            <input type="radio" name="options" id="option3" autocomplete="off" value="credit" disabled required> Credit/Debit Payment
                        </label>
                    </div>
                    <p>Payment gateway is still work in progress.</p>
                </div>
                <div class="modal-footer">

                    @csrf
                    <?php
                    foreach ($cartItems as $cartItem) {
                        echo '<input type="hidden" name="cartItemId[]" value="' . $cartItem->id . '">';
                    }
                    ?>
                    <button class="btn btn-secondary bjsh-btn-gradient" style="color: #212529;" type="submit">Checkout</button>

                </div>
            </form>
        </div>
    </div>
</div>
@endif