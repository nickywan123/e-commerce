@extends('layouts.shop.main')

@section('content')





<div class="min-vh-100">
    <!-- Breadcrumb here -->
    <div class="container">
        <h1 class="mt-2 pl-1 pr-1 font-family-lato" style="font-size: 1.5rem; color: #000;"><b>Shopping Cart</b></h1>
        {{ app('request')->query('name') }}
        <div class="row no-gutters" id="cart-container">
            <div class="col-12">

                <form id="checkout-form" method="POST" action="/shop/cart/checkout">
                    @csrf
                    <div class="row no-gutters">
                        <div class="col-12 col-md-8 p-1 m-0">
                            <div id="loadingSpinnerDiv" class="card border-radius-0 mb-2 p-2" style="position: absolute; top: 0.25rem; left: 0; width: 100%;">
                                <div class="row no-gutters py-2">
                                    <div class="col-12 px-1 text-center">
                                        <div class="spinner-border text-warning" role="status" style="width: 150px; height: 150px;">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="cart-item-container" class="col-12 col-md-8 p-1 m-0">

                        </div>

                        <div class="col-12 col-md-4 p-1 m-0">
                            <div class="card border-radius-0">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p class="h5 mb-2">Order Summary</p>
                                            <hr class="my-1">
                                        </div>
                                    </div>

                                    <div class="row mt-2 mb-1">
                                        <div class="col-6">
                                            <p style="font-size: 1.05rem;" class="text-muted m-0">Subtotal <span>( Items)</span></p>
                                        </div>
                                        <div class="col-6 text-right">
                                            <p id="subtotal_price_tag" style="font-size: 1.05rem;" class="m-0">RM</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <p style="font-size: 1.05rem;" class="text-muted">Shipping Fee</p>
                                        </div>
                                        <div class="col-6 text-right">
                                            <p id="shipping_price_tag" style="font-size: 1.05rem;">RM</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <p style="font-size: 1.05rem;" class="text-muted">Installation Fee</p>
                                        </div>
                                        <div class="col-6 text-right">
                                            <p id="installation_price_tag" style="font-size: 1.05rem;">RM</p>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <p style="font-size: 1.1rem;">Total</p>
                                        </div>
                                        <div class="col-6 text-right">
                                            <p id="grand_total_tag" style="font-size: 1.15rem;">RM</p>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col-12">
                                            <button id="proceed-to-checkout-button" class="btn bjsh-btn-gradient d-block w-100 text-uppercase disabled" type="submit">Proceed To Checkout</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ajax response will be loaded here. -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Please select at least 1 item to checkout.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Oops, please select at least 1 item to checkout.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

        const subtotalPriceTag = $('#subtotal_price_tag');
        const shippingPriceTag = $('#shipping_price_tag');
        const installationPriceTag = $('#installation_price_tag');
        const grandTotalPriceTag = $('#grand_total_tag');

        // Setup ajax to include csrf token.
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // Function that make an ajax request to get cart items after the page loads.
        function onPageLoad() {
            let checkedCartItem = [];
            let subtotalPrice = 0;
            let shippingPrice = 0;
            let installationPrice = 0;

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

                    if ($("input[name='cartItemId[]']:checked")) {
                        $.each($("input[name='cartItemId[]']:checked"), function() {
                            checkedCartItem.push($(this).val());
                            subtotalPrice = subtotalPrice + $(this).data('unit-price') * $(this).data('quantity');
                            shippingPrice = shippingPrice + $(this).data('shipping-price');
                            installationPrice = installationPrice + $(this).data('installation-price');
                        });

                        updatePrice(subtotalPrice, shippingPrice, installationPrice);
                    }
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

        function number_format(number, decimals, dec_point, thousands_sep) {
            // Strip all characters but numerical ones.
            number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
            var n = !isFinite(+number) ? 0 : +number,
                prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
                sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
                dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
                s = '',
                toFixedFix = function(n, prec) {
                    var k = Math.pow(10, prec);
                    return '' + Math.round(n * k) / k;
                };
            // Fix for IE parseFloat(0.55).toFixed(0) = 0;
            s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
            if (s[0].length > 3) {
                s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
            }
            if ((s[1] || '').length < prec) {
                s[1] = s[1] || '';
                s[1] += new Array(prec - s[1].length + 1).join('0');
            }
            return s.join(dec);
        }

        function updatePrice(subtotalPrice, totalShipping, totalInstallation) {
            let grandTotal = 0;

            grandTotal = subtotalPrice + totalShipping + totalInstallation;

            subtotalPrice = number_format(subtotalPrice / 100, 2, '.', ',');
            totalShipping = number_format(totalShipping / 100, 2, '.', ',');
            totalInstallation = number_format(totalInstallation / 100, 2, '.', ',');
            grandTotal = number_format(grandTotal / 100, 2, '.', ',');

            subtotalPriceTag.text((subtotalPrice == 0) ? 'RM 0.00' : 'RM ' + subtotalPrice);
            shippingPriceTag.text((totalShipping == 0) ? 'RM 0.00' : 'RM ' + totalShipping);
            installationPriceTag.text((totalInstallation == 0) ? 'RM 0.00' : 'RM ' + totalInstallation);
            grandTotalPriceTag.text((grandTotal == 0) ? 'RM 0.00' : 'RM ' + grandTotal);
        }

        let checkedCartItem = [];

        ItemContainer.on('change', '.item-checkbox', function() {
            checkedCartItem = [];


            let subtotalPrice = 0;
            let shippingPrice = 0;
            let installationPrice = 0;

            $.each($("input[name='cartItemId[]']:checked"), function() {
                checkedCartItem.push($(this).val());
                subtotalPrice = subtotalPrice + $(this).data('unit-price') * $(this).data('quantity');
                shippingPrice = shippingPrice + $(this).data('shipping-price');
                installationPrice = installationPrice + $(this).data('installation-price');
            });

            console.log(checkedCartItem.length);

            if (checkedCartItem.length == 0) {
                $('#proceed-to-checkout-button').addClass('disabled')
            } else {
                $('#proceed-to-checkout-button').removeClass('disabled')
            }

            updatePrice(subtotalPrice, shippingPrice, installationPrice);
        });

        $('#checkout-form').on('submit', function() {
            if (checkedCartItem.length == 0) {
                $('#exampleModal').modal('show')
                return false;
            } else {
                return true;
            }
        });


        /* End Author */

    });
</script>
@endpush