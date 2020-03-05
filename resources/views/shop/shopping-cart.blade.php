@extends('layouts.shop.main')

@section('content')
<div>
    <!-- Breadcrumb here -->
    <div class="container">
        <h1 class="mt-2 pl-0 pr-0" style="font-size: 2.3rem; color: #000;">Your Shopping Cart</h1>
        <hr>
        <div class="row" id="cart-container">
            <!-- AJAX response will be loaded here -->
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function() {
        const ItemContainer = $('#cart-container');

        // Run function
        onPageLoad();
        totalPrice();

        function onPageLoad() {
            // Make an AJAX request to /shop/shopping-cart
            $.ajax({
                url: '/shop/shopping-cart',
                type: "get",
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        }

        function totalPrice() {
            $.ajax({
                url: '/api/shop/cart',
                type: "get",
                success: function(result) {
                    console.log(result)
                },
                error: function(result) {
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        }

        ItemContainer.on('click', '#DeleteCartItem', function() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: '/shop/cart/delete-item/' + this.value,
                type: 'PUT',
                contentType: 'application/json',
                success: function(result) {
                    onPageLoad();
                },
                error: function(result) {
                    //
                }
            });
        });
    });
</script>
@endpush