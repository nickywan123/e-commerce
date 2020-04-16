@extends('layouts.shop.main')

@section('content')
<div class="min-vh-100">
    <!-- Breadcrumb here -->
    <div class="container">
        <h1 class="mt-2 pl-1 pr-1" style="font-size: 1.5rem; color: #000;">Shopping Cart</h1>

        <div class="row no-gutters" id="cart-container">
            <div class="col-12">

                <!-- Loading Spinners -->
                <div class="row no-gutters">
                    <div class="col-12 p-1 m-0">
                        <div id="loadingSpinnerDiv" class="card border-radius-0 mb-2 p-2">
                            <div class="row no-gutters py-2">
                                <div class="col-12 px-1 text-center">
                                    <div class="spinner-border text-warning" role="status" style="width: 150px; height: 150px;">
                                        <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form method="POST" action="/shop/cart/checkout">
                    @csrf
                    <div id="cart-item-container" class="row no-gutters">
                        <!-- Ajax response will be loaded here. -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
<style>
    .border-radius-0 {
        border-radius: 0;
    }
</style>
@endpush

@push('script')
<script>
    $(document).ready(function() {
        /* Author: Wan Shahruddin */

        // Assign the div with the id of loadingSpinnerDiv into a variable.
        // Then hide the Div.
        var loading = $('#loadingSpinnerDiv').hide();

        // Assign the element with cart-item-container as its id into a variable.
        // Element to load ajax response into.
        const ItemContainer = $('#cart-item-container');

        // Setup ajax to include csrf token.
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Function that make an ajax request to get cart items after the page loads.
        function onPageLoad() {
            $.ajax({
                async: true,
                beforeSend: function() {
                    // Show loading spinner.
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    // Hide loading spinner.
                    loading.hide();
                    ItemContainer.show();
                },
                url: "{{ route('web.shop.cart')}}",
                type: "GET",
                success: function(result) {
                    // Load response into specified element.
                    ItemContainer.html(result);

                    buttonNumber = $(result).filter('.btn-number');
                },
                error: function(result) {
                    // Log into console if there's an error.
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        }

        // Call onPageLoad function on document ready.
        onPageLoad();

        //plugin bootstrap minus and plus
        //http://jsfiddle.net/laelitenetwork/puJ6G/
        ItemContainer.on('click', '.btn-number', function(e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });

        ItemContainer.on('focusin', '.input-number', function() {
            $(this).data('oldValue', $(this).val());
        });

        ItemContainer.on('change', '.input-number', function() {

            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }

            newQuantity = $(this).val();
            console.log(newQuantity);

            $.ajax({
                async: true,
                beforeSend: function() {
                    // Show loading spinner.
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    // Hide loading spinner.
                    loading.hide();
                    ItemContainer.show();
                },
                url: '/web/cart/update-quantity/' + $(this).data('item-id'),
                type: "POST",
                data: {
                    // POST data.
                    quantity: newQuantity,
                },
                success: function(result) {
                    onPageLoad();
                },
                error: function(result) {
                    // Log into console if there's an error.
                    console.log(result.status + ' ' + result.statusText);
                }
            });

        });

        ItemContainer.on('keydown', '.input-number', function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
        // End Plugin

        ItemContainer.on('click', '#DeleteCartItem', function() {
            $.ajax({
                url: '/web/cart/remove/' + $(this).data('value'),
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

        // web.shop.cart.update - quantity

        /* End Author */


    });
</script>
@endpush