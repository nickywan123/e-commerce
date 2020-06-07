@extends('layouts.guest.v1.main')

@section('content')
<div class="bg-md bg-sm ">
    <div class="row">
        <div class="col-6 offset-3 col-md-2 offset-md-5 mb-0 pt-2 pb-3">
            <img class="mw-100" src="{{ asset('storage/logo/bujishu-logo-2020.png') }}" alt="">
        </div>
    </div>
    <div>
        <div class="card border-rounded-0 bg-bujishu-gold guests-card " style="border-radius: 10px;">
            <h5 class="text-center bujishu-gold form-card-title " style="border-radius: 10px;">Agent Registration</h5>
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link register-tab-active active " id="home-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="true">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link register-tab-active " id="profile-tab" data-toggle="tab" href="#information" role="tab" aria-controls="profile" aria-selected="false">Agent Package</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link register-tab-active " id="contact-tab" data-toggle="tab" href="#introducer" role="tab" aria-controls="contact" aria-selected="false">Payment Information</a>
                </li>
            </ul>
            <div class="card-body ">
                <!-- Dealer Registration Form -->
                <form method="POST" action="" id="register-form" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content" id="myTabContent">
                        <!-- Registration  Tab-->
                        <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                            <h5 class="text-center font-weight-bold" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Account Particulars</h5>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{ old('email') }}">
                                    @error('email')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                </div>
                            </div>

                            <!-- Next Button -->
                            <div class="text-right">
                                <a class="btn btn-secondary next-button bjsh-btn-gradient " id="next-btn"><b>Next</b></a>
                            </div>
                        </div>

                        <!-- Information Tab -->
                        <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                            <!-- Personal Particulars -->
                            <h5 class="text-center" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Agent Package</h5>
                            <div class="card p-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="package1" name="customRadio" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="package1">
                                        <p class="font-weight-bold">Package 1</p>
                                        <div>
                                            <ul>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                            </ul>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="card p-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="package2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="package2">
                                        <p class="font-weight-bold">Package 2</p>
                                        <div>
                                            <ul>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                            </ul>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="card p-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="package3" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="package3">
                                        <p class="font-weight-bold">Package 3</p>
                                        <div>
                                            <ul>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                            </ul>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="card p-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="package4" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="package4">
                                        <p class="font-weight-bold">Package 4</p>
                                        <div>
                                            <ul>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                            </ul>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="card p-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="package5" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="package5">
                                        <p class="font-weight-bold">Package 5</p>
                                        <div>
                                            <ul>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                            </ul>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <div class="card p-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="package6" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="package6">
                                        <p class="font-weight-bold">Package 6</p>
                                        <div>
                                            <ul>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet.
                                                </li>
                                            </ul>
                                        </div>
                                    </label>
                                </div>
                            </div>

                            <!-- Next Button -->
                            <div class="text-right">
                                <!-- <a class="btn btn-secondary" id="profile-tab" data-toggle="tab" href="#introducer" role="tab" aria-controls="profile" aria-selected="false">Next</a> -->
                                <a class="btn btn-secondary next-button bjsh-btn-gradient " id="next-btn2"><b>Next</b></a>
                            </div>
                        </div>

                        <!-- Introducer Tab -->
                        <div class="tab-pane fade" id="introducer" role="tabpanel" aria-labelledby="introducer-tab">
                            <!-- Introducer Particular -->
                            <h5 class="text-center" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Payment Information</h5>
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
                            </div>

                            <!-- Submit Button -->
                            <div class="text-right mt-2">
                                <input type="hidden" name="registrationFor" value="dealer">
                                <button type="submit" id="pay-now-button" class="btn next-button bjsh-btn-gradient text-right" disabled><b>Sign Up</b></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
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
                                        (for services), and any other special instructions (collectively be referred to
                                        as "Purchase Order"). Thereafter, the approved vendor will liaise with the
                                        customer directly to confirm the order and to resolve technical and/or other
                                        relevant issues (if any). Then the Company shall receive and order
                                        confirmation from both the approved vendor and the customer.
                                        <strong>
                                            No cancellation shall be allowed after an order has been confirmed by the
                                            approved vendor. All payments made by the customers are strictly
                                            non-refundable and non-transferable for any reason whatsoever.
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
                                        Further, the Company reserves the right to cancel an order at any time the
                                        approved vendor fails to comply with the terms and conditions hereof, the
                                        specific instructions as per the confirmed order, the approved vendor
                                        becomes bankrupt or insolvent, the business of the approved vendor is
                                        placed under a receiver, assignee or trustee.
                                    </p>
                                </li>

                                <li>
                                    <p class="paragraph">
                                        Any complaints in relation to the product(s) and/or service(s) shall be made
                                        directly to the approved vendor in writing within fourteen (14) days from the
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
                                        <strong>BUJISHU</strong>. Further, the Company shall not be held liable for any claims due
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
                                        necessarily to make such provinces enforceable, and the remaining
                                        provisions are still valid, legal, and enforceable.
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
                                        form/invoice submitted or to be submitted by you and other relevant
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
                                        inability to perform due to such occurrences. Regardless of the excuse of
                                        Force Majure, if a party is not able to perform within ninety (90) calendar
                                        days after such event, the other may terminate this Agreement. This does
                                        not apply to outstanding invoices.
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
                                        The terms and conditions stated above shall be governed by and interpreted
                                        in accordance with the laws of Malaysia and each party hereby agrees to
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
@endsection

@push('script')
<script>
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

    // End Form Validation - Credit/Debit Card
    // End Credit/Debit Card JS

    // Form Validation
    let currentTab = $('.nav-tabs > .active');
    let nextTab = currentTab.next('li');

    // Handles tabs click.
    $('.nav-link').click(function() {
        currentTab = $(this).parent();
        $('.nav-tabs > .active').removeClass('active');
        currentTab.addClass('active');
        nextTab = currentTab.next('li');
    });
    // Custom form validation for select.
    $.validator.addMethod("valueNotEquals", function(value, element, arg) {
        return arg !== value;
    }, "Please select an item.");

    // Custom validator for postcode.
    jQuery.validator.addMethod("postcode", function(value, element) {
        return this.optional(element) || /^\d{5}(?:-\d{4})?$/.test(value);
    }, "Please provide a valid postcode.");

    // Form Validation
    $("#register-form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8,
            },
            password_confirmation: {
                required: true,
                minlength: 8,
                equalTo: "#password"
            },
        },
        messages: {
            email: {
                required: "Please enter an email.",
                email: "The email is not valid."
            },
            password: {
                required: "Please enter a password.",
                minlength: "Password must be minimum of 8 characters."
            },
            password_confirmation: {
                required: "Please confirm your password",
                minlength: "Password must must be minimum of 8 characters",
                equalTo: "Password must be same as above"
            },
        }
    });

    // validate fields in 1st tab
    $('#next-btn').click(function() {
        if (
            $("#register-form").validate().element('#email') &&
            $("#register-form").validate().element('#password') &&
            $("#register-form").validate().element('#password-confirm')
        ) {
            nextTab.find('a').trigger('click');
        }
    });

    $('#next-btn2').click(function() {
        nextTab.find('a').trigger('click');
    });

    // Recheck again before submit.
    $('#register-form').on('submit', function(e) {
        let error = 0;

        if (
            $("#register-form").validate().element('#email')
        ) {
            error = error;
        } else {
            error = error + 1;
        }

        if (
            $("#register-form").validate().element('#password')
        ) {
            error = error;
        } else {
            error = error + 1;
        }

        if (

            $("#register-form").validate().element('#password-confirm')
        ) {
            error = error;
        } else {
            error = error + 1;
        }

        if (
            $('#card_number').val().length < 7 ||
            cardType == undefined
        ) {
            error = error + 1;
            $('#card_number').addClass('is-invalid');
            $('#card_number').focus();
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
    // End Form Validation

    $('#credit-debit-agree').on('change', function() {
        if ($('#credit-debit-agree').prop('checked', true)) {
            $('#pay-now-button').prop('disabled', false);
        } else {
            $('#pay-now-button').prop('disabled', true);
        }
    });
</script>
@endpush

@push('style')
<style>
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

    .error {
        color: red;
    }
</style>
@endpush