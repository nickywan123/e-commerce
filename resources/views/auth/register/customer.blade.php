@extends('layouts.guest.main')

@section('content')
<div class="bg-md bg-sm">
    <div>
        <div class="card border-rounded-0 bg-bujishu-gold guests-card">
            <h5 class="text-center bujishu-gold form-card-title">Registration</h5>
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="true">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#information" role="tab" aria-controls="profile" aria-selected="false">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="agreement-tab" data-toggle="tab" href="#agreement" role="tab" aria-controls="agreement" aria-selected="false">Agreement</a>
                </li>
            </ul>
            <div class="card-body">

                <!-- Dealer Registration Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="tab-content" id="myTabContent">
                        <!-- Registration  Tab-->
                        <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                            <h5 class="text-center" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Account Particulars</h5>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <!-- Next Button -->
                            <div class="text-right">
                                <a class="btn btn-secondary" id="profile-tab" data-toggle="tab" href="#information" role="tab" aria-controls="profile" aria-selected="false">Next</a>
                            </div>
                        </div>

                        <!-- Information Tab -->
                        <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                            <!-- Personal Particulars -->
                            <h5 class="text-center" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Personal Particulars</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="full_name">Full Name (as per NRIC)</label>
                                    <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Full Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nric">NRIC Number</label>
                                    <input type="text" name="nric" class="form-control" id="nric" placeholder="NRIC Number">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="address_1">Address Line 1</label>
                                    <input type="text" name="address_1" id="address_1" class="form-control" placeholder="Residential Address Line 1">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="address_1">Address Line 2</label>
                                    <input type="text" name="address_2" id="address_2" class="form-control" placeholder="Residential Address Line 1">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="address_1">Address Line 3</label>
                                    <input type="text" name="address_3" id="address_3" class="form-control" placeholder="Residential Address Line 1">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="postcode">Postcode</label>
                                    <input type="text" name="postcode" id="postcode" class="form-control" placeholder="Postcode">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">City</label>
                                    <input type="text" name="city" id="city" class="form-control" placeholder="City">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="state">State</label>
                                    <select name="state" id="state" class="form-control">
                                        <option disabled selected>Choose your state..</option>
                                        @foreach($states as $state)
                                        <option class="text-capitalize" value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="contact_number_home">Contact Number (Home)</label>
                                    <input type="text" name="contact_number_home" class="form-control" placeholder="Home Contact Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="contact_number_mobile">Contact Number (Mobile)</label>
                                    <input type="text" name="contact_number_mobile" class="form-control" placeholder="Mobile Contact Number">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-12">
                                    <label style="display: block;" for="existing_customer_options">Are you an existing Destiny Code customer?</label>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="existing_customer" value="0" checked>
                                        <label class="form-check-label" for="existing_customer">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="existing_customer" value="1">
                                        <label class="form-check-label" for="existing_customer">Yes</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Next Button -->
                            <div class="text-right">
                                <a class="btn btn-secondary" id="agreement-tab" data-toggle="tab" href="#agreement" role="tab" aria-controls="profile" aria-selected="false">Next</a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="agreement" role="tabpanel" aria-labelledby="agreement-tab">
                            <h5 class="text-center" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Agreement</h5>

                            <!-- Registration Agreement -->
                            <div class="row">
                                <div class="col-12 mb-0">
                                    <div class="overflow-auto agreement">
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

                            <div class="row">
                                <div class="col-12 col-md-8 offset-md-2 pl-3 pr-3 pt-2 mb-0">
                                    <canvas class="display-block signature-pad" style="touch-action: none;"></canvas>
                                    <p id="signatureError" style="color: red; display: none;">Please provide your signature.</p>
                                    <div class="p-1 text-right">
                                        <button id="resetSignature" class="btn btn-sm" style="background-color: lightblue;">Reset</button>
                                        <button id="saveSignature" class="btn btn-sm" style="background-color: #fbcc34;">Save</button>
                                    </div>
                                    <input type="hidden" name="signature" id="signatureInput">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-0 pt-2">
                                    <!-- Submit Button -->
                                    <div class="text-right">
                                        <input type="hidden" name="registrationFor" value="customer">
                                        <button type="submit" class="btn btn-primary text-right">Sign up</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
<style>
    .agreement {
        background-color: #ffffff;
        border: 2px solid #e6e6e6;
        padding: 0.75rem;
        font-family: Arial, Helvetica, sans-serif;
        max-height: 85vh;
    }

    .header {
        font-weight: 700;
        text-decoration: underline;
    }

    .paragraph {
        text-align: justify;
        text-justify: inter-word;
        line-height: 1.5;
        font-weight: 450;
    }

    .sub-list {
        counter-reset: list;
    }

    .sub-list>li {
        list-style: none;
        position: relative;
    }

    .sub-list>li:before {
        counter-increment: list;
        content: "("counter(list, lower-alpha) ") ";
        position: absolute;
        left: -1.7em;
    }

    .display-block {
        display: block;
    }

    .signature-pad {
        width: 100%;
        border: 1px solid #e5e5e5;
    }
</style>
@endpush

@push('script')
<script>
    // Variablie initialization.
    var canvas = document.querySelector("canvas");
    const signatureSaveButton = document.getElementById("saveSignature");
    const signatureResetButton = document.getElementById("resetSignature");
    const signatureError = document.getElementById("signatureError");
    const signatureInput = document.getElementById("signatureInput");

    // Initialize a new signaturePad instance.
    var signaturePad = new SignaturePad(canvas);

    // Clear signature pad.
    signatureResetButton.addEventListener("click", function(event) {
        signaturePad.clear();
    })

    // Save signature pad as data url.
    signatureSaveButton.addEventListener("click", function(event) {
        if (signaturePad.isEmpty()) {
            signatureError.style.display = "block";
        } else {
            signatureUrl = signaturePad.toDataURL();
            signatureInput.value = signatureUrl;
        }
    })
</script>
@endpush