@extends('layouts.management.main-panel')



@section('content')

 <br>
<div>
    <h4 class="text-capitalize text-dark">Company Profile</h4>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
    <form action="{{ route('management.user.panel.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" id="company_name" placeholder="e.g Delhub Digital Sdn Bhd" class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}">

                            @error('company_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class=" form-group">
                            <label for="company_ssm">Company SSM</label>
                            <input type="text" name="company_ssm" id="company_ssm" placeholder="e.g 105015-K" class="form-control @error('company_ssm') is-invalid @enderror" value="{{ old('company_ssm') }}">

                            @error('company_ssm')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="e.g bujishu@bujishu.com" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">

                                @error('email')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <label for="company_phone">Company Phone Number</label>
                                <input type="text" name="company_phone" id="company_phone" placeholder="e.g 0194039056" class="form-control @error('company_phone') is-invalid @enderror" value="{{ old('company_phone') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="correspondence_address_1">Correspondence Address Line 1</label>
                            <input type="text" name="correspondence_address_1" id="correspondence_address_1" placeholder="e.g  Lot 6, Tingkat 1" class="form-control @error('correspondence_address_1') is-invalid @enderror" value="{{ old('correspondence_address_1') }}">

                            @error('correspondence_address_1')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="correspondence_address_2">Correspondence Address Line 2</label>
                            <input type="text" name="correspondence_address_2" id="correspondence_address_2" placeholder="e.g  Lorong Seri Idaman, Taman Seri Idaman" class="form-control @error('correspondence_address_2') is-invalid @enderror" value="{{ old('correspondence_address_2') }}">

                            @error('correspondence_address_2')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <label for="correspondence_address_postcode">Correspondence Address Postcode</label>
                                <input type="text" name="correspondence_address_postcode" id="correspondence_address_postcode" placeholder="e.g 55610" class="form-control @error('correspondence_address_postcode') is-invalid @enderror" value="{{ old('correspondence_address_postcode') }}">

                                @error('correspondence_address_postcode')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <label for="correspondence_address_city">Correspondence Address City</label>
                                <input type="text" name="correspondence_address_city" id="correspondence_address_city" placeholder="e.g Kuala Lumpur" class="form-control @error('correspondence_address_city') is-invalid @enderror" value="{{ old('correspondence_address_city') }}">

                                @error('correspondence_address_city')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="correspondence_state_id">Correspondence Address State</label>
                            <select name="correspondence_state_id" id="correspondence_state_id" class="form-control text-capitalize">
                                <option value="default">Please choose state</option>
                              
                            </select>

                            @error('correspondence_state_id')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        {{-- <div id="billing-address">
                            <div class="form-group">
                                <label for="billing_address_1">Billing Address Line 1</label>
                                <input type="text" name="billing_address_1" id="billing_address_1" placeholder="e.g  Lot 6, Tingkat 1" class="form-control @error('billing_address_1') is-invalid @enderror" value="{{ old('billing_address_1') }}">
                                <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                @error('billing_address_1')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="billing_address_2">Billing Address Line 2</label>
                                <input type="text" name="billing_address_2" id="billing_address_2" placeholder="e.g  Lorong Seri Idaman, Taman Seri Idaman" class="form-control @error('billing_address_2') is-invalid @enderror" value="{{ old('billing_address_2') }}">
                                <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                @error('billing_address_2')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class=" form-row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="billing_address_postcode">Billing Address Postcode</label>
                                    <input type="text" name="billing_address_postcode" id="billing_address_postcode" placeholder="e.g 55610" class="form-control @error('billing_address_postcode') is-invalid @enderror" value="{{ old('billing_address_postcode') }}">
                                    <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                    @error('billing_address_postcode')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label for="billing_address_city">Billing Address City</label>
                                    <input type="text" name="billing_address_city" id="billing_address_city" placeholder="e.g Kuala Lumpur" class="form-control @error('billing_address_city') is-invalid @enderror" value="{{ old('billing_address_city') }}">
                                    <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                    @error('billing_address_city')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="billing_state_id">Billing Address State</label>
                                <select name="billing_state_id" id="billing_state_id" class="form-control text-capitalize">
                                    <option value="default">Please choose state</option>
                                  
                                </select>
                                <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                @error('billing_state_id')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">

                        <div id="billing-address">
                            <div class="form-group">
                                <label for="billing_address_1">Billing Address Line 1</label>
                                <input type="text" name="billing_address_1" id="billing_address_1" placeholder="e.g  Lot 6, Tingkat 1" class="form-control @error('billing_address_1') is-invalid @enderror" value="{{ old('billing_address_1') }}">
                                <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                @error('billing_address_1')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="billing_address_2">Billing Address Line 2</label>
                                <input type="text" name="billing_address_2" id="billing_address_2" placeholder="e.g  Lorong Seri Idaman, Taman Seri Idaman" class="form-control @error('billing_address_2') is-invalid @enderror" value="{{ old('billing_address_2') }}">
                                <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                @error('billing_address_2')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class=" form-row">
                                <div class="form-group col-12 col-md-6">
                                    <label for="billing_address_postcode">Billing Address Postcode</label>
                                    <input type="text" name="billing_address_postcode" id="billing_address_postcode" placeholder="e.g 55610" class="form-control @error('billing_address_postcode') is-invalid @enderror" value="{{ old('billing_address_postcode') }}">
                                    <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                    @error('billing_address_postcode')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group col-12 col-md-6">
                                    <label for="billing_address_city">Billing Address City</label>
                                    <input type="text" name="billing_address_city" id="billing_address_city" placeholder="e.g Kuala Lumpur" class="form-control @error('billing_address_city') is-invalid @enderror" value="{{ old('billing_address_city') }}">
                                    <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                    @error('billing_address_city')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="billing_state_id">Billing Address State</label>
                                <select name="billing_state_id" id="billing_state_id" class="form-control text-capitalize">
                                    <option value="default">Please choose state</option>
                                  
                                </select>
                                <small class="form-text text-muted">Leave blank if same with correspondence address.</small>

                                @error('billing_state_id')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="pic_name">PIC Name</label>
                            <input type="text" name="pic_name" id="pic_name" placeholder="e.g Robert Kiyosaki" class="form-control @error('pic_name') is-invalid @enderror" value="{{ old('pic_name') }}">

                            @error('pic_name')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="pic_nric">PIC NRIC</label>
                            <input type="text" name="pic_nric" id="pic_nric" placeholder="e.g 951119106505" class="form-control @error('pic_nric') is-invalid @enderror" value="{{ old('pic_nric') }}">

                            @error('pic_nric')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12 col-md-6">
                                <label for="pic_contact">PIC Contact Number</label>
                                <input type="text" name="pic_contact" id="pic_contact" placeholder="e.g 0194039056" class="form-control @error('pic_contact') is-invalid @enderror" value="{{ old('pic_contact') }}">

                                @error('pic_contact')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-12 col-md-6">
                                <label for="pic_email">PIC Email</label>
                                <input type="text" name="pic_email" id="pic_email" placeholder="e.g robert@gmail.com" class="form-control @error('pic_email') is-invalid @enderror" value="{{ old('pic_email') }}">

                                @error('pic_email')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-12 text-right">
                                <button type="submit" class="btn bjsh-btn-gradient">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>




@endsection
