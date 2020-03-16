@extends('layouts.guest.main')

@section('content')
<div class="bg-md bg-sm">
    <div>
        <div class="card border-rounded-0 bg-bujishu-gold">
            <h5 class="text-center bujishu-gold form-card-title">Registration</h5>
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="true">Registration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#information" role="tab" aria-controls="profile" aria-selected="false">Information</a>
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
                                <div class="form-group col-md-8">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-8"></div>

                                <div class="form-group col-md-4">
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
                                <div class="form-group col-md-4">
                                    <label for="address_1">Address Line 1</label>
                                    <input type="text" name="address_1" id="address_1" class="form-control" placeholder="Residential Address Line 1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="address_1">Address Line 2</label>
                                    <input type="text" name="address_2" id="address_2" class="form-control" placeholder="Residential Address Line 1">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="address_1">Address Line 3</label>
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

                            <!-- Submit Button -->
                            <div class="text-right">
                                <input type="hidden" name="registrationFor" value="customer">
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