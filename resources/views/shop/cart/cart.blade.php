@extends('layouts.shop.main')

@section('content')
<div>
    <!-- Breadcrumb here -->
    <div class="container" style="margin-top: 20px;">
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
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const ItemContainer = $('#cart-container');

        // Run function
        onPageLoad();

        function onPageLoad() {
            // Make an AJAX request to /shop/shopping-cart
            $.ajax({
                url: '/web/cart',
                type: "get",
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        }

        // function totalPrice() {
        //     $.ajax({
        //         url: '/api/shop/cart',
        //         type: "get",
        //         success: function(result) {
        //             console.log(result)
        //         },
        //         error: function(result) {
        //             console.log(result.status + ' ' + result.statusText);
        //         }
        //     });
        // }

        ItemContainer.on('click', '#DeleteCartItem', function() {
            $.ajax({
                url: '/web/cart/remove/' + this.value,
                type: 'PUT',
                contentType: 'application/json',
                success: function(result) {
                    console.log(result);
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