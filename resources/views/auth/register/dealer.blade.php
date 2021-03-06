@extends('layouts.guest.main')

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
                    <a class="nav-link register-tab-active " id="profile-tab" data-toggle="tab" href="#information" role="tab" aria-controls="profile" aria-selected="false">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link register-tab-active " id="contact-tab" data-toggle="tab" href="#introducer" role="tab" aria-controls="contact" aria-selected="false">Introducer</a>
                </li>
            </ul>
            <div class="card-body ">
                <!-- Dealer Registration Form -->
                <form method="POST" action="{{ route('register') }}" id="register-form" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content" id="myTabContent">
                        <!-- Registration  Tab-->
                        <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                            <h5 class="text-center " style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;"><b>ACCOUNT PARTICULARS</b></h5>
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
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <!-- Next Button -->
                            <div class="text-right">
                                <!-- <a class="btn btn-secondary" id="profile-tab" data-toggle="tab" href="#information" role="tab" aria-controls="profile" aria-selected="false">Next</a> -->
                                <a class="btn btn-secondary next-button bjsh-btn-gradient " id="next-btn"><b>Next</b></a>
                            </div>
                        </div>

                        <!-- Information Tab -->
                        <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">
                            <!-- Personal Particulars -->
                            <h5 class="text-center" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Personal Particulars</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="full_name">Full Name (as per NRIC)</label>
                                    <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" id="full_name" placeholder="Full Name" value="{{ old('full_name') }}">
                                    @error('full_name')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="nric">NRIC Number <small>(Numbers Only)</small></label>
                                    <input type="text" name="nric" class="form-control @error('nric') is-invalid @enderror" id="nric" placeholder="NRIC Number" value="{{ old('nric') }}">
                                    @error('nric')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="date_of_birth">Date Of Birth</label>
                                    <input type="date" class="form-control datepicker @error('date_of_birth') is-invalid @enderror" id="date_of_birth" name="date_of_birth" placeholder="Date of birth" value="{{ old('date_of_birth') }}">
                                    @error('date_of_birth')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gender">Gender</label>
                                    <select class="form-control text-capitalize" id="gender_id" name="gender_id">
                                        <option disabled selected value="default">Choose your gender..</option>
                                        @foreach($genders as $gender)
                                        <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="race_id">Race</label>
                                    <select name="race_id" id="race_id" class="form-control text-capitalize">
                                        <option disabled selected value="default">Choose your race..</option>
                                        @foreach($races as $race)
                                        <option value="{{ $race->id }}">{{$race->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="marital_id">Marital Status</label>
                                    <select name="marital_id" id="marital_id" class="form-control text-capitalize">
                                        <option disabled selected value="default">Choose your marital status..</option>
                                        @foreach($maritals as $marital)
                                        <option value="{{ $marital->id }}">{{ $marital->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="address_1">Residential Address Line 1</label>
                                    <input type="text" name="address_1" id="address_1" class="form-control @error('address_1') is-invalid @enderror" placeholder="Residential Address Line 1" value="{{ old('address_1') }}">
                                    @error('address_1')
                                    <small class="form-text text-danger">{{ $message }}}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="address_1">Residential Address Line 2</label>
                                    <input type="text" name="address_2" id="address_2" class="form-control @error('address_2') is-invalid @enderror" placeholder="Residential Address Line 1" value="{{ old('address_2') }}">
                                    @error('address_2')
                                    <small class="form-text text-danger">{{ $message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="address_1">Residential Address Line 3</label>
                                    <input type="text" name="address_3" id="address_3" class="form-control @error('address_3') is-invalid @enderror" placeholder="Residential Address Line 1" value="{{ old('address_3') }}">
                                    @error('address_3')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="postcode">Postcode</label>
                                    <input type="text" name="postcode" id="postcode" class="form-control @error('postcode') is-invalid @enderror" placeholder="Postcode" value="{{ old('postcode') }}">
                                    @error('postcode')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">City</label>
                                    <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror" placeholder="City" value="{{ old('city') }}">
                                    @error('city')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
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
                                    <input type="text" name="contact_number_home" id="contact_number_home" class="form-control @error('contact_number_home') is-invalid @enderror" placeholder="Home Contact Number" value="{{ old('contact_number_home') }}">
                                    @error('contact_number_home')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="contact_number_mobile">Contact Number (Mobile)</label>
                                    <input type="text" name="contact_number_mobile" id="contact_number_mobile" class="form-control @error('contact_number_mobile') is-invalid @enderror" placeholder="Mobile Contact Number" value="{{ old('contact_number_mobile') }}">
                                    @error('contact_number_mobile')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Spouse's Particular -->
                            <h5 class="text-center" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Spouse's Particulars</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="spouse_full_name">Spouse's Full Name (as per NRIC)</label>
                                    <input type="text" name="spouse_full_name" class="form-control @error('spouse_full_name') is-invalid @enderror" id="spouse_full_name" placeholder="Full Name" value="{{ old('spouse_full_name') }}">
                                    @error('spouse_full_name')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="spouse_nric">Spouse's NRIC Number</label>
                                    <input type="text" name="spouse_nric" class="form-control @error('spouse') is-invalid @enderror" id="spouse_nric" placeholder="NRIC Number" value="{{ old('spouse_nric') }}">
                                    @error('spouse_nric')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="spouse_date_of_birth">Spouse's Date Of Birth</label>
                                    <input type="date" name="spouse_date_of_birth" class="form-control @error('spouse_date_of_birth') is-invalid @enderror" id="spouse_date_of_birth" placeholder="Spouse's Date Of Birth" value="{{ old('spouse_date_of_birth') }}">
                                    @error('spouse_date_of_birth')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="spouse_occupation">Spouse's Occupation</label>
                                    <input type="text" name="spouse_occupation" class="form-control @error('spouse_occupation') is-invalid @enderror" id="spouse_occupation" placeholder="Spouse's Occupation" value="{{ old('spouse_occupation') }}">
                                    @error('spouse_occupation')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="spouse_contact_office">Contact Number (Office)</label>
                                    <input type="text" name="spouse_contact_office" class="form-control @error('spouse_contact_office') is-invalid @enderror" id="spouse_contact_office" placeholder="Spouse's Office Contact" value="{{ old('spouse_contact_office') }}">
                                    @error('spouse_contact_office')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="spouse_contact_mobile">Contact Number (Mobile)</label>
                                    <input type="text" name="spouse_contact_mobile" class="form-control @error('spouse_contact_mobile') is-invalid @enderror" id="spouse_contact_mobile" placeholder="Spouse's Mobile Contact" value="{{ old('spouse_contact_mobile') }}">
                                    @error('spouse_contact_mobile')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="spouse_email">Email Address</label>
                                    <input type="text" name="spouse_email" id="spouse_email" class="form-control @error('spouse_email') is-invalid @enderror" placeholder="Spouse's Email Address" value="{{ old('spouse_email') }}">
                                    @error('spouse_email')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Employment History -->
                            <h5 class="text-center" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Employment History</h5>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    @foreach($employments as $employment)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="employment_id" id="employment_id" value="{{ $employment->id }}">
                                        <label class="form-check-label text-capitalize">{{ $employment->name }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="employment_name">Name Of Company</label>
                                    <input type="text" name="employment_name" id="employment_name" class="form-control @error('employment_name') is-invalid @enderror" placeholder="Name of company" value="{{ old('employment_name') }}">
                                    @error('employment_name')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="company_address_1">Company Address Line 1</label>
                                    <input type="text" name="company_address_1" id="company_address_1" class="form-control @error('company_address_1') is-invalid @enderror" placeholder="Company Address Line 1" value="{{ old('company_address_1') }}">
                                    @error('company_address_1')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="company_address_2">Company Address Line 2</label>
                                    <input type="text" name="company_address_2" id="company_address_2" class="form-control @error('company_address_2') is-invalid @enderror" placeholder="Company Address Line 1" value="{{ old('company_address_2') }}">
                                    @error('company_address_2')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="company_address_3">Company Address Line 3</label>
                                    <input type="text" name="company_address_3" id="company_address_3" class="form-control @error('company_address_3') is-invalid @enderror" placeholder="Company Address Line 1" value="{{ old('company_address_3') }}">
                                    @error('company_address_3')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="company_postcode">Postcode</label>
                                    <input type="text" name="company_postcode" id="company_postcode" class="form-control @error('company_postcode') is-invalid @enderror" placeholder="Postcode" value="{{ old('company_postcode') }}">
                                    @error('company_postcode')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="company_city">City</label>
                                    <input type="text" name="company_city" id="company_city" class="form-control @error('company_city') is-invalid @enderror" placeholder="City" value="{{ old('company_city') }}">
                                    @error('company_city')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="state">State</label>
                                    <select name="company_state" id="company_state" class="form-control">
                                        <option disabled selected>Choose your state..</option>
                                        @foreach($states as $state)
                                        <option class="text-capitalize" value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
                                    </select>
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
                            <h5 class="text-center" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Introducer Particular</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="introducer_name">Introducer's Name (as per NRIC)</label>
                                    <input type="text" name="introducer_name" id="introducer_name @error('introducer_name') is-invalid @enderror" class="form-control" placeholder="Introducer's Name" value="{{ old('introducer_name') }}">
                                    @error('introducer_name')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="introducer_account_id">Introducer ID</label>
                                    <input type="text" name="introducer_account_id" id="introducer_account_id" class="form-control @error('introducer_account_id') is-invalid @enderror" placeholder="Introducer's ID" value="{{ old('introducer_account_id') }}">
                                    @error('introducer_account_id')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-12">
                                    <label for="exampleFormControlFile1">Payment Proof <small>(Please upload payment receipt.)</small></label>
                                    <input type="file" name="payment_proof" id="payment_proof" class="form-control-file @error('payment_proof') is-invalid @enderror">
                                    @error('payment_proof')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-right">
                                <input type="hidden" name="registrationFor" value="dealer">
                                <button type="submit" class="btn next-button bjsh-btn-gradient text-right "><b>Sign Up</b></button>
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
    .nav-fill .nav-link.active.register-tab-active {
        font-weight: 600;
    }

    .btn-submit {
        color: black;
        border-radius: 10px;
        background-color: #fbcc34;
        border-color: #8b878d;
    }

    .error {
        color: red;
    }
</style>
@endpush

@push('script')
<script>
    // Disable spouse information if marital status is single
    $(document).on('change', 'select[name=marital_id]', function(e) {
        var el = $(this);

        if (el.val() == '1' || el.val() == '3') {

            //reset spouse fields to empty if user input changes to 1 or 3
            $('input[name=spouse_full_name').val('');
            $('input[name=spouse_nric').val('');
            $('input[name=spouse_full_name').val('');
            $('input[name=spouse_date_of_birth').val('');
            $('input[name=spouse_occupation').val('');
            $('input[name=spouse_contact_office').val('');
            $('input[name=spouse_contact_mobile').val('');
            $('input[name=spouse_email').val('');

            //disable spouse information if single
            $('#spouse_full_name').prop('readonly', true);
            $('#spouse_nric').prop('readonly', true);
            $('#spouse_date_of_birth').prop('readonly', true);
            $('#spouse_occupation').prop('readonly', true);
            $('#spouse_contact_office').prop('readonly', true);
            $('#spouse_contact_mobile').prop('readonly', true);
            $('#spouse_email').prop('readonly', true);
        } else {
            $('#spouse_full_name').prop('readonly', false);
            $('#spouse_nric').prop('readonly', false);
            $('#spouse_date_of_birth').prop('readonly', false);
            $('#spouse_occupation').prop('readonly', false);
            $('#spouse_contact_office').prop('readonly', false);
            $('#spouse_contact_mobile').prop('readonly', false);
            $('#spouse_email').prop('readonly', false);
        }
    });

    let currentTab = $('.nav-tabs > .active');
    let nextTab = currentTab.next('li');

    // Handles tabs click.
    $('.nav-link').click(function() {
        currentTab = $(this).parent();
        $('.nav-tabs > .active').removeClass('active');
        currentTab.addClass('active');
        nextTab = currentTab.next('li');
    });

    // Handles next button click.
    // $('.next-button').click(function() {
    //     currentTab.removeClass('active');
    //     nextTab.find('a').trigger('click');
    //     nextTab.addClass('active');
    //     currentTab = $('.nav-tabs > .active');
    //     nextTab = currentTab.next('li');
    // });

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
            full_name: {
                required: true,
                minlength: 3
            },
            nric: {
                required: true,
                minlength: 12,
                maxlength: 12
            },
            date_of_birth: {
                required: true,
            },
            gender_id: {
                required: true,
                valueNotEquals: "default"
            },
            race_id: {
                required: true,
                valueNotEquals: "default"
            },
            marital_id: {
                required: true,
                valueNotEquals: "default"
            },
            address_1: {
                required: true,
                minlength: 3
            },

            postcode: {
                required: true,
                postcode: true
            },
            city: {
                required: true
            },
            state: {
                required: true
            },
            contact_number_home: {
                required: false,
                digits: true,
                minlength: 9,
                maxlength: 15
            },
            contact_number_mobile: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 15
            },
            existing_customer: {
                required: true
            },

            employment_id: {
                required: true,
            },
            employment_name: {
                required: true,
                minlength: 3
            },
            company_address_1: {
                required: true,
                minlength: 3
            },
            company_address_2: {
                required: false,
                minlength: 3
            },
            company_address_3: {
                required: false,
                minlength: 3
            },
            company_postcode: {
                required: true,
                postcode: true
            },
            company_city: {
                required: true
            },
            company_state: {
                required: true
            },
            introducer_name: {
                required: true,
                minlength: 3
            },
            introducer_account_id: {
                required: true,
                minlength: 10,
                maxlength: 10
            },
            payment_proof: {
                required: true,
            }
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
            full_name: {
                required: "Please enter your full name.",
                minlength: "Your name must be more than 3 characters."
            },
            nric: {
                required: "Please enter your NRIC number.",
                minlength: "Please enter a valid NRIC number.",
                maxlength: "Please enter a valid NRIC number."
            },
            date_of_birth: {
                required: "Please select your date of birth."
            },
            address_1: {
                required: "Please enter your address"
            },

            postcode: {
                required: "Please enter your postcode"
            },
            city: {
                required: "Please enter your city name."
            },
            state: {
                required: "Please select your state"
            },
            contact_number_home: {
                required: "Please enter your home number.",
                digits: "Please enter number only.",
                minlength: "Contact number must at least be 9 digits.",
                maxlength: "Please enter a valid contact number."
            },
            contact_number_mobile: {
                required: "Please enter your mobile number.",
                digits: "Please enter number only.",
                minlength: "Contact number must at least be 10 digits.",
                maxlength: "Please enter a valid contact number."
            },
            spouse_full_name: {
                required: "Please enter your spouse's full name.",
                minlength: "Your spouse's name must be more than 3 characters."
            },
            spouse_nric: {
                required: "Please enter your spouse's NRIC number.",
                minlength: "Please enter a valid NRIC number.",
                maxlength: "Please enter a valid NRIC number."
            },
            spouse_date_of_birth: {
                required: "Please select your spouse's date of birth."
            },
            spouse_occupation: {
                required: "Please enter your spouse's occupation.",
                minlenght: "Your spouse's occupation must be more than 3 characters."
            },
            spouse_contact_office: {
                required: "Please enter your spouse's home number.",
                digits: "Please enter number only.",
                minlength: "Contact number must at least be 10 digits.",
                maxlength: "Please enter a valid contact number."
            },
            spouse_contact_mobile: {
                required: "Please enter your spouse's mobile number.",
                digits: "Please enter number only.",
                minlength: "Contact number must at least be 10 digits.",
                maxlength: "Please enter a valid contact number."
            },
            spouse_email: {
                required: "Please enter an email.",
                email: "The email is not valid."
            },
            employment_name: {
                required: "Please enter your company name.",
                minlength: "Your company name must be more than 3 characters."
            },
            company_address_1: {
                required: "Please enter your address"
            },
            company_address_2: {
                required: "Please enter your address"
            },
            company_address_3: {
                required: "Please enter your address"
            },
            company_postcode: {
                required: "Please enter your postcode"
            },
            company_city: {
                required: "Please enter your city name."
            },
            company_state: {
                required: "Please select your state"
            },
            introducer_name: {
                required: "Please enter your full name.",
                minlength: "Your introducer's name must be more than 3 characters."
            },
            introducer_account_id: {
                required: "Please enter your introducer's ID.",
                minlength: "Your introducer's ID must be 10 digits.",
                maxlenght: "Your introducer's ID must be 10 digits."
            },
            payment_proof: {
                required: "Please upload a receipt of payment.",
            }
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

    // validate fields in 2nd tab
    $('#next-btn2').click(function() {
        if (
            $("#register-form").validate().element('#full_name') &&
            $("#register-form").validate().element('#nric') &&
            $("#register-form").validate().element('#date_of_birth') &&
            $("#register-form").validate().element('#gender_id') &&
            $("#register-form").validate().element('#race_id') &&
            $("#register-form").validate().element('#marital_id') &&
            $("#register-form").validate().element('#address_1') &&
            $("#register-form").validate().element('#postcode') &&
            $("#register-form").validate().element('#city') &&
            $("#register-form").validate().element('#state') &&
            $("#register-form").validate().element('#contact_number_home') &&
            $("#register-form").validate().element('#contact_number_mobile') &&
            // $("#register-form").validate().element('#spouse_full_name') &&
            // $("#register-form").validate().element('#spouse_nric') &&
            // $("#register-form").validate().element('#spouse_date_of_birth') &&
            // $("#register-form").validate().element('#spouse_occupation') &&
            // $("#register-form").validate().element('#spouse_contact_office') &&
            // $("#register-form").validate().element('#spouse_contact_mobile') &&
            // $("#register-form").validate().element('#spouse_email') &&
            $("#register-form").validate().element('#employment_name') &&
            $("#register-form").validate().element('#company_address_1') &&
            $("#register-form").validate().element('#company_address_2') &&
            $("#register-form").validate().element('#company_address_3') &&
            $("#register-form").validate().element('#company_postcode') &&
            $("#register-form").validate().element('#company_city') &&
            $("#register-form").validate().element('#company_state')
        ) {
            nextTab.find('a').trigger('click');
        }
    });

    // Recheck again before submit.
    $('#submit').click(function(e) {
        if (
            $("#register-form").validate().element('#email') &&
            $("#register-form").validate().element('#password') &&
            $("#register-form").validate().element('#password-confirm') &&
            $("#register-form").validate().element('#full_name') &&
            $("#register-form").validate().element('#nric') &&
            $("#register-form").validate().element('#date_of_birth') &&
            $("#register-form").validate().element('#gender_id') &&
            $("#register-form").validate().element('#race_id') &&
            $("#register-form").validate().element('#marital_id') &&
            $("#register-form").validate().element('#address_1') &&
            $("#register-form").validate().element('#postcode') &&
            $("#register-form").validate().element('#city') &&
            $("#register-form").validate().element('#state') &&
            $("#register-form").validate().element('#contact_number_home') &&
            $("#register-form").validate().element('#contact_number_mobile') &&
            // $("#register-form").validate().element('#spouse_full_name') &&
            // $("#register-form").validate().element('#spouse_nric') &&
            // $("#register-form").validate().element('#spouse_date_of_birth') &&
            // $("#register-form").validate().element('#spouse_occupation') &&
            // $("#register-form").validate().element('#spouse_contact_office') &&
            // $("#register-form").validate().element('#spouse_contact_mobile') &&
            // $("#register-form").validate().element('#spouse_email') &&
            $("#register-form").validate().element('#employment_name') &&
            $("#register-form").validate().element('#company_address_1') &&
            $("#register-form").validate().element('#company_address_2') &&
            $("#register-form").validate().element('#company_address_3') &&
            $("#register-form").validate().element('#company_postcode') &&
            $("#register-form").validate().element('#company_city') &&
            $("#register-form").validate().element('#company_state') &&
            $("#register-form").validate().element('#introducer_name') &&
            $("#register-form").validate().element('#introducer_account_id') &&
            $("#register-form").validate().element('#payment_proof')
        ) {
            return true;
        } else {
            return false;
        }
    });
</script>
@endpush