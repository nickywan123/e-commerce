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

        .nav-link .hide-inactive {
            display: none;
        }

        .nav-link .hide-active {
            display: block;
        }

        .nav-link.active .hide-active {
            display: none;
        }

        .nav-link.active .hide-inactive {
            display: block;
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
                                            <a class="dropdown-item" href="{{route('shop.dashboard.customer.home')}}"><i class="fa fa-credit-card"></i> My Dashboard</a>
                                            <a href="/shop/cart" class="dropdown-item"><i class="fa fa-shopping-cart"></i> My Cart</a>
                                            @hasrole('panel')
                                            <a href="{{route('management.panel.home')}}" class="dropdown-item"><i class="fa fa-user-check"></i> Panel Dashboard</a>
                                            @endhasrole
                                            @hasrole('dealer')
                                            <a href="/management/dealer/home" class="dropdown-item"><i class="fa fa-user-check"></i>Dealer Dashboard</a>
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
                                    <a class="dropdown-item" href="{{route('shop.dashboard.customer.home')}}"><i class="fa fa-credit-card" style="color: #fbcc34;"></i>My Dashboard</a>
                                    @hasrole('panel')
                                    <a href="{{route('management.panel.home')}}" class="dropdown-item"><i class="fa fa-user-check" style="color:#fbcc34;"></i>Panel Dashboard</a>
                                    @endhasrole
                                    @hasrole('dealer')
                                    <a href="/management/dealer/home" class="dropdown-item"><i class="fa fa-user-check" style="color:#fbcc34;"></i>Dealer Dashboard</a>
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
                                <img class="hide-active mx-auto" style="width: 64px; height: 64px;" src="{{ asset('storage/icons/payments/credit-debit-card-02.png') }}" alt="">
                                <img class="hide-inactive mx-auto" style="width: 64px; height: 64px;" src="{{ asset('storage/icons/payments/credit-debit-card-01.png') }}" alt="">
                                <p class="mt-2 mb-0">Credit/Debit Card</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center disabled" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                <img class="hide-active mx-auto" style="width: 64px; height: 64px;" src="{{ asset('storage/icons/payments/online-banking-02.png') }}" alt="">
                                <img class="hide-inactive mx-auto" style="width: 64px; height: 64px;" src="{{ asset('storage/icons/payments/online-banking-01.png') }}" alt="">
                                <p class="mt-2 mb-0">Online Banking</p>
                                <p>(Not Available)</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-center" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                <img class="hide-active mx-auto" style="width: 64px; height: 64px;" src="{{ asset('storage/icons/payments/offline-payment-02.png') }}" alt="">
                                <img class="hide-inactive mx-auto" style="width: 64px; height: 64px;" src="{{ asset('storage/icons/payments/offline-payment-01.png') }}" alt="">
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
                                                    <input type="checkbox" class="custom-control-input" id="credit-debit-agree">
                                                    <label class="custom-control-label" for="credit-debit-agree">
                                                        I agree to the <a href="" data-toggle="modal" data-target="#purchaseAgreementModal">terms and conditions</a>.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="form-row mt-2">
                                            <div class="col-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" name="save_payment_info" id="save_payment_info" value="true">
                                                    <label class="custom-control-label" for="save_payment_info">Save Card</label>
                                                    <small class="form-text text-muted">I acknowledge that my card information is saved in my Bujishu account (You will still need to provide CVV for each transaction).</small>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="form-row mt-2">
                                            <div class="col-12">
                                                <input type="hidden" name="payment_option" value="card">
                                                <button id="pay-now-button" class="btn btn-warning btn-block" type="submit" disabled>Pay Now</button>
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
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="offline-agree">
                                                        <label class="custom-control-label" for="offline-agree">
                                                            I agree to the <a href="" data-toggle="modal" data-target="#purchaseAgreementModal">terms and conditions</a>.
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-row mt-2">
                                                <div class="col-12">
                                                    <input type="hidden" name="payment_option" value="offline">
                                                    <button id="submit-payment-button" class="btn btn-warning btn-block" type="submit" disabled>Submit Payment</button>
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

                    <div>
                        <h5 class="mb-1 font-weight-bold" style="font-size: 1.1rem;">We Accept: </h5>
                        <!-- <img src="{{ asset('storage/icons/payments/visa-logo.png') }}" class="w-100" alt=""> -->
                        <div class="row">
                            <div class="col-4 my-auto">
                                <img src="{{ asset('storage/icons/payments/visa-logo.png') }}" class="w-100 p-2" alt="">
                            </div>
                            <div class="col-4 my-auto">
                                <img src="{{ asset('storage/icons/payments/mastercard-logo.png') }}" class="w-100 p-2" alt="">
                            </div>
                            <!-- <div class="col-4 my-auto">
                                <img src="{{ asset('storage/icons/payments/fpx-logo.png') }}" class="w-100 p-2" alt="">
                            </div> -->
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

    <!-- Modal -->
    <div class="modal fade" id="purchaseAgreementModal" tabindex="-1" role="dialog" aria-labelledby="purchaseAgreementModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row ">
                        <div class="col-12 mb-0">
                            <div class="overflow-auto" style="max-height: 70vh; background-color: #ffffff; border: 2px solid #e6e6e6; padding: 0.75rem;">
                                <h5 class="header">Bujishu Terms & Condition</h5>

                                <p class="paragraph">
                                    The following terms and conditions shall govern the service(s) to be provided
                                    and/or product(s) to be sold to you by the approved vendors of DC Signature Living
                                    Style Sdn Bhd ("the Company") under our programme/platform known as
                                    <strong>"BUJISHU"</strong>. Please read through the following terms and conditions before
                                    placing your order. Any payment made to us shall be construed as your
                                    acceptance to all terms and conditions stated below:
                                </p>

                                <ol>
                                    <li>
                                        <p class="paragraph">
                                            The Company shall only serve as a platform provider to assist their
                                            customers to source/search for suitable suppliers of product(s) and
                                            providers of service(s) to cater their needs. The Company clearly state that
                                            they neither act as the customers nor the suppliers of product(s)/providers
                                            of service(s). All purchases made by the customers through <strong>BUJISHU</strong> are
                                            a direct sale and purchase between you and the Vendor. As such, we are
                                            not a party to such transaction and will only facilitate the transaction
                                            between you and the Vendor by providing this platform.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            All product(s) and/or service(s) made available through <strong>BUJISHU</strong> may be
                                            designed for, and only appropriate for, specialized uses; accordingly, you
                                            may only use them as intended by, and in compliance with all instructions
                                            provided by the Company and its approved vendors.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            Upon receiving an order form/invoice from you, the Company will forward
                                            your request to the relevant approved vendor, indicating specific product(s)
                                            and service(s), quantity, price, total purchase price, method of delivery,
                                            requested delivery dates, intended commencement and completion dates
                                            (for services), and any other special instructions (collectively be reffered to
                                            as "Purchase Order"). Thereafter, the approved vendor will liase with the
                                            customer directly to confirm the order and to resolve technical and/or other
                                            relevant issues (if any). Then the Company shall receive and order
                                            confirmation from both the approved vendor and the customer.
                                            <strong>
                                                No cancellation shall be allowed after an order has been confirmed by the
                                                approved vendor. All payments made by the customers are strictly
                                                non-refundable and non-trasnferable for any reason whatsoever.
                                            </strong>
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            Upon receiving full payment from the customer, the Company will notify the
                                            relevant approved vendor to arrange for delivery of product(s) or commence
                                            of the service(s) based on the good terms agreed between parties. Where
                                            product(s) are delivered to you directly by the approved vendor, the
                                            product(s) will generally take a minimum of fourteen (14) working days.
                                            Delivery of larger product(s) is made between Monday to Friday during
                                            normal working hours. Therefore, it is your responsibility to ensure the
                                            delivery address is ready and able to accept delivery of the product(s), in
                                            particular that there is space for any delivery vehicle to make the delivery.
                                            As such, the customer shall cooperate with the approved vendor at all times.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            The approved vendor will use all reasonable endeavours to meet any
                                            delivery dates for the service(s) to be provided to you but such dates are
                                            estimates only and, unless otherwise expressly agreed by the approved
                                            vendor in writing, are not binding on the approved vendor.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            The customer shall at all times during continuance of the agreement:-
                                            <ol class="sub-list">
                                                <li>
                                                    <p class="paragraph">
                                                        obtain and maintain all consents, permissions and licenses
                                                        necessary to enable the approved vendor (which includes its
                                                        employees, agents and the sub-contractors) to perform its obligations
                                                        under this confirmed order;
                                                    </p>
                                                </li>

                                                <li>
                                                    <p class="paragraph">
                                                        provide sufficient and accurate information and materials to the
                                                        approved vendor as reasonably requested by the approved vendor
                                                        (which include its employees, agents and sub-contractors) in the
                                                        provisions of the service(s) and performance of its obligation under
                                                        this confirmed order;
                                                    </p>
                                                </li>

                                                <li>
                                                    <p class="paragraph">
                                                        provide access to premises, systems and other facilities which may
                                                        be reasonably required by the approved vendor (which includes its
                                                        employees, agents and sub-contractors); and
                                                    </p>
                                                </li>

                                                <li>
                                                    <p class="paragraph">
                                                        ensure that all necessary safety and security precautions are in place.
                                                    </p>
                                                </li>
                                            </ol>
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            All product(s) and service(s) are subject to inspection and test by the
                                            Company to ensure that they comply with the requirements/specifications
                                            set by the Company.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            The Company reserves the right to request the approved vendors to
                                            change/reschedule any delivery of goods or performance of service(s), or
                                            cancel any confirmed order fourteen (14) days before confirmed
                                            delivery/performance date. In such event, the Company shall not be subject
                                            to any changes, compensation or damages as a result of such cancellation
                                            or changes.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            Futher, the Company reserves the right to cancel an order at any time the
                                            approved vendor fails to comply with the terms and conditions hereof, the
                                            specific instructions as per the confirmed order, the approved vendor
                                            becomes bankcrupt or insolvent, the business of the approved vendor is
                                            placed under a receiver, assignee or trustee.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            Any complaints in relation to the product(s) and/or service(s) shall be made
                                            directly to the approved vendor in writing within fourteen (14) dats from the
                                            date of acceptance of the product(s) and/or completion of the service(s).
                                            The customer shall give sufficient details of any manufacturing defects on
                                            the product(s) or errors to the approved vendor and the approved vendor
                                            shall use its reasonable endeavours to remedy such manufacturing defects
                                            based on the same standard provided to all customers or errors within
                                            agreed period of time provided that the customer shall have complied with
                                            these terms and conditions at all times.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            Except as expressly otherwise provided herein, no warranty, condition
                                            undertaking or term, expressed or implied, statutory or otherwise as to the
                                            condition, quality, effect, performance or fitness for purpose of the product(s)
                                            or service(s) is given by the approved vendor and the Company.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            The company shall not be responsible/liable for all matters in relation to
                                            purchase, manufacture, fabricate, produce, provide, supply and delivery of
                                            all product(s) and/or service(s) purchase by the customers through
                                            <strong>BUJISHU</strong>. Futher, the Company shall not be held liable for ay claims due
                                            to delays, defects, disputes arising between the customers and the
                                            approved vendors. All risk of loss, cost of repair, replacement, make good,
                                            damages (if any) shall not be borne by the Company.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            We respect your privacy and therefore, we will use the information you
                                            provided to use for purposes of fulfillment of this order, accounting, billing and
                                            auditing, checking credit or other payment cards, administrative and legal
                                            purposes, statistical analysis, and helping in any future dealings with you
                                            only. For these purposes, by placing this order with us, you authorise is to
                                            retain and use your personal information and to transmit it to our offices,
                                            authorized dealers and third party business associates, government
                                            agencies or the providers of the services mentioned above. In any event,
                                            we will not disclose your personal information to any other third party (other
                                            than the above mentioned) unless required to do so under the law.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            The terms and conditions set forth the entire agreement between the parties
                                            pertaining to the subject matter hereof and supersedes all other oral and/or
                                            written agreements and understandings, express or implied. If any of the
                                            terms and conditions above is determined to be invalid, illegal, or
                                            unenforceable, such provisions will be modified only to the extent
                                            necessarily to make such provices enforcable, and the remaining
                                            provisions are still valid, legal, and enforcable.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            The Company reserves the right, without any liability, to amend, vary or add
                                            any of these terms and conditions without prior notice to you. Therefore, we
                                            recommend our customers to contact us directly should they have any
                                            queries.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            These terms and conditions shall be read together with the order
                                            form/invoice submittd or to be submitted by you and other relevant
                                            documents of the Company, if any. These terms and conditions shall be
                                            supplemental to our order form/invoice.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            Neither party shall be liable for any delay or failure in performance or
                                            obligations due to events outside the defaulting party's reasonable control
                                            under this Agreement due to any Act of God, fire, casualty, flood,
                                            earthquake, war, strike, terrorism, lockout, epidemic, destruction of
                                            production facilities, riot, actions of government entities, insurrection,
                                            material unavailability, or any other cause beyond the reasonable control of
                                            the party invoking this section, and if such party shall have used its
                                            commercially reasonable efforts to mitigate its effects, such party shall give
                                            prompt written notice to the other, its performance shall be excused, and
                                            the time for performance shall be extended for the period of delay or
                                            inability to perform due to such occurences. Regardless of the excuse of
                                            Force Majure, if a party is not able to perform within ninety (90) calendar
                                            days after such event, the other may terminate this Agreement. This does
                                            not apply to oustanding invoices.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            All requests or complaints shall be made to us in writing and the same shall
                                            be served at our main office as follows:-
                                            <p class="paragraph ml-2">
                                                <strong>DC Signature Living Style Sdn Bhd</strong>
                                                <br>
                                                Menara Bangkok Bank
                                                <br>
                                                1-26-5 Menara Bangkok Bank,
                                                <br>
                                                Laman Sentral Berjaya,
                                                <br>
                                                No. 105, Jalan Ampang,
                                                <br>
                                                50540 Kuala Lumpur
                                            </p>
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            You may not assign or sub-contract any of your rights or obligations under
                                            these terms to any person without our prior consent. No third party
                                            shall be entitled to enforce any of these terms.
                                        </p>
                                    </li>

                                    <li>
                                        <p class="paragraph">
                                            The terms and conditions stated above shall be governed by and intepreted
                                            in accordance with the laws of Malaysia and each party hereby agress to
                                            submit to the exclusive jurisdiction of the Courts of Malaysia.
                                        </p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
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

            $('#credit-debit-agree').on('change', function() {
                if ($('#credit-debit-agree').prop('checked', true)) {
                    $('#pay-now-button').prop('disabled', false);
                } else {
                    $('#pay-now-button').prop('disabled', true);
                }
            });

            $('#offline-agree').on('change', function() {
                if ($('#offline-agree').prop('checked', true)) {
                    $('#submit-payment-button').prop('disabled', false);
                } else {
                    $('#submit-payment-button').prop('disabled', true);
                }
            });

            /* End Author */

        });
    </script>
</body>

</html>