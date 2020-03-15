@extends('layouts.guest.main')

@section('content')
<div class="bg-md bg-sm">
    <div>
        <div class="card border-rounded-0 bg-bujishu-gold">
            <h5 class="text-center bujishu-gold form-card-title">Dealer Registration</h5>
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="true">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#information" role="tab" aria-controls="profile" aria-selected="false">Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#introducer" role="tab" aria-controls="contact" aria-selected="false">Introducer</a>
                </li>
            </ul>
            <div class="card-body">

                <!-- Dealer Registration Form -->
                <form>
                    <div class="tab-content" id="myTabContent">
                        <!-- Registration  Tab-->
                        <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab">
                            <h5 class="text-center" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Account Particulars</h5>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="email">Email (Used for bujishu login)</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
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
                                <div class="form-group col-md-8">
                                    <label for="full_name">Full Name (as per NRIC)</label>
                                    <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Full Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nric">NRIC Number (810212-10-3345)</label>
                                    <input type="text" name="nric" class="form-control" id="nric" placeholder="NRIC Number">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="date_of_birth">Date Of Birth</label>
                                    <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="Date of birth">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="gender">Gender</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option disabled selected>Choose your gender..</option>
                                        @foreach($genders as $gender)
                                        <option class="text-capitalize" value="{{ $gender->id }}">{{ $gender->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="race">Race</label>
                                    <select name="race" id="race" class="form-control">
                                        <option disabled selected>Choose your race..</option>
                                        @foreach($races as $race)
                                        <option class="text-capitalize" value="{{ $race->id }}">{{ $race->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="marital">Marital Status</label>
                                    <select name="marital" id="marital" class="form-control">
                                        <option disabled selected>Choose your marital status..</option>
                                        @foreach($maritals as $marital)
                                        <option class="text-capitalize" value="{{ $marital->id }}">{{ $marital->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="address_1">Residential Address Line 1</label>
                                    <input type="text" name="address_1" id="address_1" class="form-control" placeholder="Residential Address Line 1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="address_1">Residential Address Line 2</label>
                                    <input type="text" name="address_2" id="address_2" class="form-control" placeholder="Residential Address Line 1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="address_1">Residential Address Line 3</label>
                                    <input type="text" name="address_3" id="address_3" class="form-control" placeholder="Residential Address Line 1">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="postcode">Postcode</label>
                                    <input type="text" name="postcode" id="postcode" class="form-control" placeholder="Postcode">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="city">City</label>
                                    <input type="text" name="city" id="city" class="form-control" placeholder="City">
                                </div>
                                <div class="form-group col-md-4">
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
                                <div class="form-group col-md-4">
                                    <label for="contact_number_home">Contact Number (Home)</label>
                                    <input type="text" name="contact_number_home" class="form-control" placeholder="Home Contact Number">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="contact_number_mobile">Contact Number (Mobile)</label>
                                    <input type="text" name="contact_number_mobile" class="form-control" placeholder="Mobile Contact Number">
                                </div>
                            </div>

                            <!-- Spouse's Particular -->
                            <h5 class="text-center" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Spouse's Particulars</h5>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="spouse_full_name">Spouse's Full Name (as per NRIC)</label>
                                    <input type="text" name="spouse_full_name" class="form-control" id="spouse_full_name" placeholder="Full Name">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="spouse_nric">Spouse's NRIC Number (810212-10-3345)</label>
                                    <input type="text" name="spouse_nric" class="form-control" id="spouse_nric" placeholder="NRIC Number">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="spouse_date_of_birth">Spouse's Date Of Birth</label>
                                    <input type="text" name="spouse_date_of_birth" class="form-control" id="spouse_date_of_birth" placeholder="Spouse's Date Of Birth">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="spouse_occupation">Spouse's Occupation</label>
                                    <input type="text" name="spouse_occupation" class="form-control" id="spouse_occupation" placeholder="Spouse's Occupation">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="spouse_contact_office">Contact Number (Office)</label>
                                    <input type="text" name="spouse_contact_office" class="form-control" id="spouse_contact_office" placeholder="Spouse's Office Contact">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="spouse_contact_mobile">Contact Number (Mobile)</label>
                                    <input type="text" name="spouse_contact_mobile" class="form-control" id="spouse_contact_mobile" placeholder="Spouse's Mobile Contact">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="spouse_email">Email Address</label>
                                    <input type="text" name="spouse_email" id="spouse_email" class="form-control" placeholder="Spouse's Email Address">
                                </div>
                            </div>

                            <!-- Employment History -->
                            <h5 class="text-center" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Employment History</h5>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    @foreach($employments as $employment)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="employment_id" id="employment_id" value="{{ $employment->id }}">
                                        <label class="form-check-label text-capitalize">{{ $employment->name }}</label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="employment_name">Name Of Company</label>
                                    <input type="text" name="employment_name" id="employment_name" class="form-control" placeholder="Name of company">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="company_address_1">Company Address Line 1</label>
                                    <input type="text" name="company_address_1" id="company_address_1" class="form-control" placeholder="Company Address Line 1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="company_address_1">Company Address Line 2</label>
                                    <input type="text" name="company_address_2" id="company_address_2" class="form-control" placeholder="Company Address Line 1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="company_address_1">Company Address Line 3</label>
                                    <input type="text" name="company_address_3" id="company_address_3" class="form-control" placeholder="Company Address Line 1">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="company_postcode">Postcode</label>
                                    <input type="text" name="postcode" id="company_postcode" class="form-control" placeholder="Postcode">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="company_city">City</label>
                                    <input type="text" name="company_city" id="company_city" class="form-control" placeholder="City">
                                </div>
                                <div class="form-group col-md-4">
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
                                <a class="btn btn-secondary" id="profile-tab" data-toggle="tab" href="#introducer" role="tab" aria-controls="profile" aria-selected="false">Next</a>
                            </div>
                        </div>

                        <!-- Introducer Tab -->
                        <div class="tab-pane fade" id="introducer" role="tabpanel" aria-labelledby="introducer-tab">
                            <!-- Introducer Particular -->
                            <h5 class="text-center" style="background-color: #303030; color: #ffffff; padding: .5rem; border: 1px solid #e5e5e5;">Introducer Particular</h5>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="introducer_name">Introducer's Name (as per NRIC)</label>
                                    <input type="text" name="introducer_name" id="introducer_name" class="form-control" placeholder="Introducer's Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="introducer_account_id">Introducer ID</label>
                                    <input type="text" name="introducer_account_id" id="introducer_account_id" class="form-control" placeholder="Introducer's ID">
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary text-right">Sign up</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection