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
                                <img class="navigation-logo" style="margin-right: 30px;" src="{{ asset('storage/logo/Bujishu-logo.png') }}" alt="">
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
                                            <a class="dropdown-item" href="/shop/dashboard/profile/index"><i class="fa fa-user"></i> Profile</a>
                                            <a class="dropdown-item" href="/shop/dashboard/orders/index"><i class="fa fa-credit-card"></i> Value Records</a>
                                            <a href="/shop/cart" class="dropdown-item"><i class="fa fa-shopping-cart"></i> My Cart</a>
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
                                    <a class="dropdown-item" href="/shop/dashboard/profile/index"><i class="fa fa-user" style="color: #fbcc34;"></i> Profile</a>
                                    <a class="dropdown-item" href="/shop/dashboard/orders/index"><i class="fa fa-credit-card" style="color: #fbcc34;"></i> Value Records</a>
                                    @hasrole('panel')
                                    <a href="/management" class="dropdown-item"><i class="fa fa-user-check" style="color:#fbcc34;"></i> Panel</a>
                                    @endhasrole
                                    @hasrole('dealer')
                                    <a href="/management" class="dropdown-item"><i class="fa fa-user-check" style="color:#fbcc34;"></i> Dealer</a>
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
                                <img style="width: 72px; height: 72px;" src="{{ asset('storage/icons/payments/payment-card.png') }}" alt="">
                                <p class="mt-2 mb-0">Credit/Debit Card</p>
                                <p>(Not Available)</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center disabled" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                <img style="width: 72px; height: 72px;" src="{{ asset('storage/icons/payments/payment-fpx.png') }}" alt="">
                                <p class="mt-2 mb-0">Online Banking</p>
                                <p>(Not Available)</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                <img style="width: 72px; height: 72px;" src="{{ asset('storage/icons/payments/payment-offline.png') }}" alt="">
                                <p class="mt-2">Offline Payment</p>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent" style="border: 0;">
                        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div>
                                        <div class="form-row">
                                            <div class="col-12 form-group">
                                                <label>Name</label>
                                                <p id="attention_to_tag" class="mb-0" style="border: 2px solid #f4f4f4; border-radius: 5px; padding: 10px;">
                                                    {{ $user->userInfo->full_name }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-12 form-group">
                                                <label>Contact (Mobile)</label>
                                                <p id="attention_contact_tag" class="mb-0" style="border: 2px solid #f4f4f4; border-radius: 5px; padding: 10px;">
                                                    {{ $user->userInfo->mobileContact->contact_num }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-12 form-group">
                                                <label>Shipping Address</label>
                                                <p id="attention_address_tag" class="mb-0" style="border: 2px solid #f4f4f4; border-radius: 5px; padding: 10px;">
                                                    {{ $user->userInfo->shippingAddress->address_1 }},
                                                    <br>
                                                    {{ $user->userInfo->shippingAddress->address_2 }},
                                                    <br>
                                                    {{ $user->userInfo->shippingAddress->address_3 }},
                                                    <br>
                                                    {{ $user->userInfo->shippingAddress->postcode }}, {{ $user->userInfo->shippingAddress->city }}
                                                    <br>
                                                    {{ $user->userInfo->shippingAddress->state->name }}, Malaysia
                                                </p>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-info d-block w-100" data-toggle="modal" data-target="#exampleModal">Edit</button>
                                    </div>

                                </div>


                                <div class="col-12 col-md-6">
                                    <form id="card-form" action="/payment?orderId={{ $purchase->purchase_number }}" method="POST">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-12 mb-1 form-group">
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
                                            <div class="col-12 mb-1 form-group">
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
                                            <div class="col-12 col-md-6 mb-1 form-group">
                                                <label for="expiry_date">Expiration Date <small class="text-danger">*</small></label>
                                                <input type="text" class="form-control" name="expiry_date" id="expiry_date" placeholder="MMYY">
                                                <div class="valid-feedback feedback-icon">
                                                    <i class="fa fa-check"></i>
                                                </div>
                                                <div class="invalid-feedback feedback-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 mb-1 form-group">
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
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="save_payment_info" id="save_payment_info" value="true">
                                                    <label class="custom-control-label" for="save_payment_info">Save Card</label>
                                                    <small class="form-text text-muted">I acknowledge that my card information is saved in my Bujishu account (You will still need to provide CVV for each transaction).</small>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row mt-2">
                                            <div class="col-12">
                                                <input type="hidden" name="payment_option" value="card">
                                                <button class="btn btn-warning btn-block" type="submit">Pay Now</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="text-center text-muted">
                                Coming Soon!
                            </div>
                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <div>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div>
                                            <div class="form-row">
                                                <div class="col-12 form-group">
                                                    <label>Name</label>
                                                    <p id="attention_to_tag" class="mb-0" style="border: 2px solid #f4f4f4; border-radius: 5px; padding: 10px;">
                                                        {{ $user->userInfo->full_name }}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-12 form-group">
                                                    <label>Contact (Mobile)</label>
                                                    <p id="attention_contact_tag" class="mb-0" style="border: 2px solid #f4f4f4; border-radius: 5px; padding: 10px;">
                                                        {{ $user->userInfo->mobileContact->contact_num }}
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-12 form-group">
                                                    <label>Shipping Address</label>
                                                    <p id="attention_address_tag" class="mb-0" style="border: 2px solid #f4f4f4; border-radius: 5px; padding: 10px;">
                                                        {{ $user->userInfo->shippingAddress->address_1 }},
                                                        <br>
                                                        {{ $user->userInfo->shippingAddress->address_2 }},
                                                        <br>
                                                        {{ $user->userInfo->shippingAddress->address_3 }},
                                                        <br>
                                                        {{ $user->userInfo->shippingAddress->postcode }}, {{ $user->userInfo->shippingAddress->city }}
                                                        <br>
                                                        {{ $user->userInfo->shippingAddress->state->name }}, Malaysia
                                                    </p>
                                                </div>
                                            </div>

                                            <button type="button" class="btn btn-info d-block w-100" data-toggle="modal" data-target="#exampleModal">Edit</button>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <form id="offline-form" action="/payment?orderId={{ $purchase->purchase_number }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-12 mb-1 form-group">
                                                    <label for="reference_number">Reference Number <small class="text-danger">*</small></label>
                                                    <input type="text" class="form-control" name="reference_number" id="reference_number" placeholder="Payment Reference Number">
                                                    <div class="valid-feedback feedback-icon">
                                                        <i class="fa fa-check"></i>
                                                    </div>
                                                    <div class="invalid-feedback feedback-icon">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-12 mb-1 form-group">
                                                    <label for="payment_proof">Upload Payment Proof <small>*</small></label>
                                                    <div class="custom-file">
                                                        <input type="file" name="payment_proof" class="custom-file-input" id="payment_proof_input" required>
                                                        <label class="custom-file-label" for="payment_proof">Choose File <small>(.jpg, .png)</small></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="col-12 mb-1 form-group">
                                                    <label for="payment_amount">Payment Amount <small>*</small></label>
                                                    <input type="number" class="form-control" name="payment_amount" id="payment_amount" placeholder="Payment amount">
                                                </div>
                                            </div>

                                            <div class="form-row mt-2">
                                                <div class="col-12">
                                                    <input type="hidden" name="payment_option" value="offline">
                                                    <button class="btn btn-warning btn-block" type="submit">Submit Payment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="update-customer-detail" action="/payment/update-customer-details/{{ $user->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Shipping Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-row">
                                    <div class="col-12 form-group">
                                        <label for="attention_to">Name</label>
                                        <input type="text" name="attention_to" id="attention_to" class="form-control" value="{{ $user->userInfo->full_name }}">
                                        <div class="valid-feedback feedback-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="invalid-feedback feedback-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 form-group">
                                        <label for="attention_contact">Contact</label>
                                        <input type="text" name="attention_contact" id="attention_contact" class="form-control" value="{{ $user->userInfo->mobileContact->contact_num }}">
                                        <div class="valid-feedback feedback-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="invalid-feedback feedback-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 form-group">
                                        <label for="attention_address_1">Address Line 1</label>
                                        <input type="text" name="attention_address_1" id="attention_address_1" class="form-control" value="{{ $user->userInfo->shippingAddress->address_1 }}">
                                        <div class="valid-feedback feedback-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="invalid-feedback feedback-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 form-group">
                                        <label for="attention_address_2">Address Line 2</label>
                                        <input type="text" name="attention_address_2" id="attention_address_2" class="form-control" value="{{ $user->userInfo->shippingAddress->address_2 }}">
                                        <div class="valid-feedback feedback-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="invalid-feedback feedback-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 form-group">
                                        <label for="attention_address_3">Address Line 3</label>
                                        <input type="text" name="attention_address_3" id="attention_address_3" class="form-control" value="{{ $user->userInfo->shippingAddress->address_3 }}">
                                        <div class="valid-feedback feedback-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="invalid-feedback feedback-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-6 form-group">
                                        <label for="attention_postcode">Postcode</label>
                                        <input type="text" name="attention_postcode" id="attention_postcode" class="form-control" value="{{ $user->userInfo->shippingAddress->postcode }}">
                                        <div class="valid-feedback feedback-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="invalid-feedback feedback-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>

                                    <div class="col-6 form-group">
                                        <label for="attention_city">City</label>
                                        <input type="text" name="attention_city" id="attention_city" class="form-control" value="{{ $user->userInfo->shippingAddress->city }}">
                                        <div class="valid-feedback feedback-icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="invalid-feedback feedback-icon">
                                            <i class="fa fa-times"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-12 form-group">
                                        <label for="state">State</label>
                                        <select name="state" id="state" class="form-control @error('state') is-invalid @enderror">
                                            <option disabled selected>Choose your state..</option>
                                            @foreach($states as $state)
                                            <option class="text-capitalize" value="{{ $state->id }}" {{ ($state->id == $user->userInfo->shippingAddress->state_id) ? 'selected' : '' }}>{{ $state->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="hidden" name="orderId" value="{{ $purchase->purchase_number }}">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            /* Author: Wan Shahruddin */
            // Display tab pane when anchor tag is clicked.
            $('.nav-link').on('click', function() {
                $('#myTabContent').css('border', '1px solid #dee2e6');
            });

            // Edit Details JS
            console.log($('#attention_to'));

            $('#attention_to').on('keyup', function() {
                if ($(this).val().length == 0) {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });

            $('#attention_contact').on('keyup', function() {
                if ($(this).val().length > 14 || $(this).val().length < 10) {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });

            $('#attention_address_1').on('keyup', function() {
                if ($(this).val().length == 0) {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });

            $('#attention_address_2').on('keyup', function() {
                if ($(this).val().length == 0) {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });

            $('#attention_address_3').on('keyup', function() {
                if ($(this).val().length == 0) {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });

            $('#attention_postcode').on('keyup', function() {
                if ($(this).val().length < 5 || $(this).val().length > 5) {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });

            $('#attention_city').on('keyup', function() {
                if ($(this).val().length == 0) {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });

            $('#update-customer-detail').on('submit', function(e) {
                let error = 0;

                if ($('#attention_to').val().length == 0) {
                    error = error + 1;
                }

                if ($('#attention_contact').val().length > 14 || $('#attention_contact').val().length < 10) {
                    error = error + 1;
                }

                if ($('#attention_address_1').val().length == 0) {
                    error = error + 1;
                }

                if ($('#attention_address_2').val().length == 0) {
                    error = error + 1;
                }

                if ($('#attention_address_3').val().length == 0) {
                    error = error + 1;
                }

                if ($('#attention_postcode').val().length < 5 || $('#attention_postcode').val().length > 5) {
                    error = error + 1;
                }

                if ($('#attention_city').val().length == 0) {
                    error = error + 1;
                }

                if (error == 0) {
                    return true;
                } else {
                    return false;
                }
            });
            // End Edit Details JS

            // Credit/Debit Card JS
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

            // Form Validation - Credit/Debit Card.
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

            $('#card-form').on('submit', function(e) {
                let error = 0;

                if (
                    $('#card_number').val().length < 7 ||
                    cardType == undefined
                ) {
                    error = error + 1;
                    $('#card_number').addClass('is-invalid');
                    $('#card_number').focus();
                }
                if ($('#name_on_card').val().length == 0) {
                    error = error + 1;
                    $('#name_on_card').addClass('is-invalid');
                    $('#name_on_card').focus();
                }
                if ($('#expiry_date').val().length != 4 || !$.isNumeric($('#expiry_date').val())) {
                    error = error + 1;
                    $('#expiry_date').addClass('is-invalid');
                    $('#expiry_date').focus();
                }
                if ($('#cvv').val().length < 3 || !$.isNumeric($('#cvv').val())) {
                    error = error + 1;
                    $('#cvv').addClass('is-invalid');
                    $('#cvv').focus();
                }

                if (error == 0) {
                    return true;
                } else {
                    return false;
                }
            });

            // End Form Validation - Credit/Debit Card
            // End Credit/Debit Card JS

            // Form Validation - FPX

            // End Form Validation - FPX


            // Offline JS
            let fileName = null;
            let nextSibling = null;

            // Change file input label to filename when a file has been selected.
            $('.custom-file-input').on('change', function(e) {
                fileName = $('#payment_proof_input').val().split('\\').pop();
                nextSibling = e.target.nextElementSibling;
                nextSibling.innerText = fileName
            });

            $('#reference_number').on('keyup', function() {
                if ($(this).val().length < 1 || $(this).val() == '') {
                    $(this).removeClass('is-valid');
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                    $(this).addClass('is-valid');
                }
            });

            // Form Validation - Offline
            $('#offline-form').on('submit', function(e) {
                let error = 0;

                if (
                    $('#reference_number').val().length < 1 ||
                    $('#reference_number').val() == ''
                ) {
                    error = error + 1;
                    $('#reference_number').addClass('is-invalid');
                }

                if (error == 0) {
                    return true;
                } else {
                    return false;
                }
            });
            // End Offline JS
            // End Form Validation - Offline

            /* End Author */

        });
    </script>
</body>

</html>