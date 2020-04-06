<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .nav-tabs {
            border-bottom: 0;
        }

        .valid-feedback.feedback-icon {
            position: absolute;
            width: auto;
            bottom: 10px;
            right: 15px;
            margin-top: 0;
        }

        .valid-feedback.feedback-icon.with-cc-icon {
            position: absolute;
            width: auto;
            bottom: 3px;
            right: 10px;
            margin-top: 0;
        }

        .invalid-feedback.feedback-icon {
            position: absolute;
            width: auto;
            bottom: 10px;
            right: 15px;
            margin-top: 0;
        }

        .invalid-feedback.feedback-icon.with-helper {
            position: absolute;
            width: auto;
            bottom: 32px;
            right: 15px;
            margin-top: 0;
        }
    </style>
</head>

<body>
    <div class="middleBar" style="border-bottom: 3px solid #fccb34;">
        <div class="container-90">
            <div class="row d-flex">
                <div class="col-sm-2 vertical-align mt-2 mb-3">
                    <div class="row">
                        <div class="col-4 col-md-6 text-right my-auto">
                            <a href="/shop">
                                <img class="navigation-logo" style="margin-right: 30px;" src="{{ asset('storage/logo/Bujishu_logo.png') }}" alt="">
                            </a>
                        </div>
                        <div class="col-4 hidden-md my-auto">
                            <ul class="nav justify-content-center-sm float-right pt-2">
                                @guest
                                <li class="nav-item m-1">
                                    <div class="dropdown show">
                                        <!-- TODO: Create a class for the style -->
                                        <a class="btn btn-secondary dropdown-toggle my-account-button" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FBCC34; background-color: #000000; border: 1px solid #FBCC34; padding-right: 40px;">
                                            Menu
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="/login">Login</a>
                                            <a class="dropdown-item" href="/register">Register</a>
                                        </div>
                                    </div>
                                </li>
                                @else
                                <li class="nav-item m-1">
                                    <div class="dropdown show">
                                        <!-- TODO: Create a class for the style -->
                                        <a class="btn btn-secondary dropdown-toggle my-account-button" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FBCC34; background-color: #000000; border: 1px solid #FBCC34; padding-right: 40px;">
                                            My Account
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item" href="/shop/profile"><i class="fa fa-user"></i> Profile <small>(WIP)</small></a>
                                            <a class="dropdown-item" href="/shop/order"><i class="fa fa-credit-card"></i> My Orders <small>(WIP)</small></a>
                                            <a href="/shop/cart" class="dropdown-item"><i class="fa fa-shopping-cart"></i> My Cart(WIP)</a>
                                            @hasrole('panel')
                                            <a href="/management" class="dropdown-item"><i class="fa fa-user-check"></i> Panel</a>
                                            @endhasrole
                                            @hasrole('dealer')
                                            <a href="/management" class="dropdown-item"><i class="fa fa-user-check"></i> Dealer</a>
                                            @endhasrole
                                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out-alt" style="color: #fbcc34;"></i> {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- end col -->
                <div class="col-sm-8 vertical-align text-center my-auto">

                </div>
                <div class="col-sm-2 vertical-align my-auto">
                    <ul class="nav justify-content-center-sm float-right pt-2 hidden-sm">
                        @guest
                        <li class="nav-item m-1">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                        @else
                        <li class="nav-item m-1">
                            <div class="dropdown show">
                                <!-- TODO: Create a class for the style -->
                                <a class="btn btn-secondary dropdown-toggle my-account-button nav-content-sidebar-collapse" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FBCC34; background-color: #000000; border: 1px solid #FBCC34; padding-right: 40px;">
                                    My Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="/shop/profile"><i class="fa fa-user " style="color:#fbcc34;"></i> Profile <small>(WIP)</small></a>
                                    <a class="dropdown-item" href="/shop/order"><i class="fa fa-credit-card " style="color:#fbcc34;"></i> My Orders <small>(WIP)</small></a>
                                    <a href="/shop/cart" class="dropdown-item"><i class="fa fa-shopping-cart " style="color:#fbcc34;"></i> My Cart <small>(WIP)</small></a>
                                    @hasrole('panel')
                                    <a href="/management/panel" class="dropdown-item"><i class="fa fa-user-check " style="color:#fbcc34;"></i> Panel</a>
                                    @endhasrole
                                    @hasrole('dealer')
                                    <a href="/management/dealer" class="dropdown-item"><i class="fa fa-user-check" style="color:#fbcc34;"></i> Dealer</a>
                                    @endhasrole
                                    <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out-alt" style="color:#fbcc34;"></i> {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
                <!-- end col -->
            </div>
            <!-- end  row -->
        </div>
    </div>
    <main class="mt-3 ml-3 mr-3" id="body-content-collapse-sidebar">
        <div class="container">

            <div class="row">
                <div class="col-12 col-md-8">
                    <h3>Select Payment Method</h3>

                    <!-- Payment options tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link text-center" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                <img src="https://via.placeholder.com/72" alt="">
                                <p class="mt-2">Credit/Debit Card</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                <img src="https://via.placeholder.com/72" alt="">
                                <p class="mt-2">Online Banking</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                <img src="https://via.placeholder.com/72" alt="">
                                <p class="mt-2">Offline Payment</p>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent" style="border: 0;">
                        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div>
                                <form id="card-form" action="/payment?orderId={{ $purchase->purchase_number }}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="col-12 col-md-5 mb-1 form-group">
                                            <label for="card_number">Card Number <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control" name="card_number" id="card_number" placeholder="Card Number">
                                            <input type="hidden" name="card_type" id="card_type" value="">
                                            <div class="valid-feedback feedback-icon with-cc-icon">
                                                <i class="fa"></i>
                                            </div>
                                            <div class="invalid-feedback feedback-icon with-helper">
                                                <i class="fa fa-times"></i>
                                            </div>
                                            <div class="invalid-feedback invalid-helper">
                                                <small class="text-danger">Card number must be 16.</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-12 col-md-5 mb-1 form-group">

                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-12 col-md-5 mb-1 form-group">
                                            <label for="name_on_card">Name On Card <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control" name="name_on_card" id="name_on_card" placeholder="Name On Card">
                                            <div class="valid-feedback feedback-icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="invalid-feedback feedback-icon with-helper">
                                                <i class="fa fa-times"></i>
                                            </div>
                                            <div class="invalid-feedback invalid-helper">
                                                <small class="text-danger">Please enter card owner name.</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-12 col-md-3 mb-1 form-group">
                                            <label for="expiry_date">Expiration Date <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control" name="expiry_date" id="expiry_date" placeholder="MMYY">
                                            <div class="valid-feedback feedback-icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="invalid-feedback feedback-icon">
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-2 mb-1 form-group">
                                            <label for="cvv">CVV <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control" name="cvv" id="cvv" placeholder="CVV">
                                            <div class="valid-feedback feedback-icon">
                                                <i class="fa fa-check"></i>
                                            </div>
                                            <div class="invalid-feedback feedback-icon">
                                                <i class="fa fa-times"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row mt-2">
                                        <div class="col-12 col-md-5">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="save_payment_info" id="save_payment_info" value="true">
                                                <label class="custom-control-label" for="save_payment_info">Save Card</label>
                                                <small class="form-text text-muted">I acknowledge that my card information is saved in my Bujishu account (You will still need to provide CVV for each transaction).</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row mt-2">
                                        <div class="col-12 col-md-5">
                                            <input type="hidden" name="payment_option" value="card">
                                            <button class="btn btn-warning btn-block" type="submit">Pay Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="text-center text-muted">
                                Coming Soon!
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="text-center text-muted">
                                Coming Soon!
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card" style="border-radius: 0;">
                        <div class="card-body">
                            <h4>Order Summary</h4>
                            <?php
                            $totalItem = 0;

                            foreach ($purchase->orders as $order) {
                                $totalItem = $totalItem + $order->items->count();
                            }
                            ?>
                            <div>
                                <p class="text-muted">Subtotal ({{ $totalItem }} item(s) and shipping fee included)</p>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <h5>Total Amount</h5>
                                </div>
                                <div class="col-6 text-right">
                                    <h4 class="text-danger font-weight-bold">RM{{ number_format(($purchase->purchase_amount / 100), 2) }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        $(document).ready(function() {
            // Display tab pane when anchor tag is clicked.
            $('.nav-link').on('click', function() {
                $('#myTabContent').css('border', '1px solid #dee2e6');
            });

            // Credit card pattern recognition algorithm.
            function detectCardType(number) {
                var re = {
                    // electron: /^(4026|417500|4405|4508|4844|4913|4917)\d+$/,
                    // maestro: /^(5018|5020|5038|5612|5893|6304|6759|6761|6762|6763|0604|6390)\d+$/,
                    // dankort: /^(5019)\d+$/,
                    // interpayment: /^(636)\d+$/,
                    // unionpay: /^(62|88)\d+$/,
                    visa: /^4[0-9]{12}(?:[0-9]{3})?$/,
                    mastercard: /^(5[1-5]|222[1-9]|22[3-9]|2[3-6]|27[01]|2720)[0-9]{0,}$/,
                    // amex: /^3[47][0-9]{13}$/,
                    // diners: /^3(?:0[0-5]|[68][0-9])[0-9]{11}$/,
                    // discover: /^6(?:011|5[0-9]{2})[0-9]{12}$/,
                    // jcb: /^(?:2131|1800|35\d{3})\d{11}$/
                }

                for (var key in re) {
                    if (re[key].test(number)) {
                        return key
                    }
                }
            }

            // Form Validation.
            let cardNumber = null;
            let ccIcon = $('.valid-feedback.feedback-icon.with-cc-icon i');
            // Card Number.
            $('#card_number').on('keyup', function() {
                cardNumber = $(this).val();
                cardType = detectCardType(cardNumber);

                if ($(this).val().length < 7 || cardType == undefined) {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                    ccIcon.removeClass();
                    ccIcon.addClass('fa fa-cc-' + cardType).css('font-size', '30px');
                    $('#card_type').val(cardType);
                }
            });

            $('#name_on_card').on('keyup', function() {
                if ($(this).val().length == 0) {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });

            $('#expiry_date').on('keyup', function() {
                if ($(this).val().length != 4 || !$.isNumeric($(this).val())) {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });

            $('#cvv').on('keyup', function() {
                if ($(this).val().length < 3 || !$.isNumeric($(this).val())) {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });


            let error;

            $('#card-form').on('submit', function(e) {
                error = 0;

                if (
                    $('#card_number').val().length < 7 ||
                    cardType == undefined
                ) {
                    error = error + 1;
                    $(this).focus();
                }
                if ($('#name_on_card').val().length == 0) {
                    error = error + 1;
                    $(this).focus();
                }
                if ($('#expiry_date').val().length != 4 || !$.isNumeric($('#expiry_date').val())) {
                    error = error + 1;
                    $(this).focus();
                }
                if ($('#cvv').val().length < 3 || !$.isNumeric($('#cvv').val())) {
                    error = error + 1;
                    $(this).focus();
                }

                if (error == 0) {
                    return true;
                } else {
                    return false;
                }
            });

        });
    </script>
</body>

</html>