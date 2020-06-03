@extends('layouts.management.main-customer')



@section('content')



@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}
</div>
@endif

{{--Desktop Layout--}}
<div class="hidden-sm ">

<div class="row">
    <div class="col-12 offset-1 col-md-10">   
    <div class="row">
        <div class="col-4">
         <i class="fa fa-user mr-1"></i> <a href="{{route('shop.dashboard.customer.profile.edit')}}" class="text-color-header "
         ><strong>Edit Profile</strong></a>
        </div>
        @hasrole('dealer')
        <div class="col-4">
         <i class="fa fa-address-book-o mr-1"></i> <a href="{{route('shop.dashboard.dealer.profile.edit')}}" class="text-color-header " ><strong>Edit Dealer Information</strong></a>
        </div>
        @endhasrole
        @hasrole('panel')
        <div class="col-4">
         <i class="fa fa-building-o mr-1"></i><a href="{{route('management.company.profile.edit')}}" class="text-color-header "  style="border-bottom: 2px solid rgb(250, 172, 24);" ><strong> Edit Panel Information</strong></a>
        </div>
        @endhasrole          
    </div> 
    <hr>

    <form action="{{route('management.company.profile.update',[$companyProfile->account_id])}}" method="POST">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
                <div class="card shadow-sm">
                    <div class="card-body">

                        <div class="form-group row ">
                            <label for="company_name" class="col-md-2 col-form-label">Company Name</label>
                            <div class="col-md-4">
                                <input type="text" name="company_name" id="company_name"
                                    value="{{$companyProfile->company_name}}"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" readonly>
                            </div>
                            <label for="company_ssm" class="col-md-2 col-form-label">Company SSM</label>
                            <div class="col-md-3">
                                <input type="text" name="company_ssm" id="company_ssm"
                                    value="{{$companyProfile->ssm_number}}"
                                    class="form-control @error('company_ssm') is-invalid @enderror"
                                    value="{{ old('company_ssm') }}" readonly>
                            </div>

                            @error('company_ssm')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>




                        <div class="form-group row ">
                            <label for="company_address_1" class="col-md-2 col-form-label">Company Address</label>
                            <div class="col-md-9">
                                <input type="text" name="company_address_1" id="company_address_1"
                                    value="{{$companyProfile->correspondenceAddress->address_1}}"
                                    class="form-control @error('company_address_1') is-invalid @enderror"
                                    value="{{ old('company_address_1') }}">

                            </div>
                          


                            @error('company_address_1')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            {{-- <label for="company_address" class="col-md-2 col-form-label">Company Address</label> --}}
                            <div class="offset-2 col-md-9">
                                <input type="text" name="company_address_2" id="company_address_2"
                                    value="{{$companyProfile->correspondenceAddress->address_2}}"
                                    class="form-control @error('company_address_2') is-invalid @enderror"
                                    value="{{ old('company_address_2') }}">

                            </div>
                          


                            @error('company_address_2')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            {{-- <label for="company_address" class="col-md-2 col-form-label">Company Address</label> --}}
                            <div class="offset-2 col-md-9">
                                <input type="text" name="company_address_3" id="company_address_3"
                                    value="{{$companyProfile->correspondenceAddress->address_3}}"
                                    class="form-control @error('company_address_3') is-invalid @enderror"
                                    value="{{ old('company_address_3') }}">

                            </div>
                          


                            @error('company_address_3')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            <label for="postcode" class="col-md-2 col-form-label">Postcode</label>
                            <div class="col-md-4">
                                <input type="text" name="postcode"
                                    value="{{$companyProfile->correspondenceAddress->postcode}}" id="postcode"
                                    class="form-control @error('postcode') is-invalid @enderror"
                                    value="{{ old('postcode') }}">
                            </div>
                          


                            @error('postcode')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="city" class="col-md-2 col-form-label">City</label>
                            <div class="col-md-4">
                                <input type="text" name="city" value="{{$companyProfile->correspondenceAddress->city}}"
                                    id="city" class="form-control @error('city') is-invalid @enderror"
                                    value="{{ old('city') }}">
                            </div>
                          


                            @error('city')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            <label for="company_billing_address_1" class="col-md-2 col-form-label">Billing
                                Address</label>
                            <div class="col-md-9">
                                <input type="text" name="company_billing_address_1" id="company_billing_address_1"
                                    value="{{$companyProfile->billingAddress->address_1}}"
                                    class="form-control @error('company_billing_address_1') is-invalid @enderror"
                                    value="{{ old('company_billing_address_1') }}">
                            </div>
                          


                            @error('company_billing_address_1')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            {{-- <label for="company_billing_address" class="col-md-2 col-form-label">Billing Address</label> --}}
                            <div class="offset-2 col-md-9">
                                <input type="text" name="company_billing_address_2" id="company_billing_address_2"
                                    value="{{$companyProfile->billingAddress->address_2}}"
                                    class="form-control @error('company_billing_address_2') is-invalid @enderror"
                                    value="{{ old('company_billing_address_2') }}">
                            </div>
                          


                            @error('company_billing_address_2')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            {{-- <label for="company_billing_address" class="col-md-2 col-form-label">Billing Address</label> --}}
                            <div class="offset-2 col-md-9">
                                <input type="text" name="company_billing_address_3" id="company_billing_address_3"
                                    value="{{$companyProfile->billingAddress->address_3}}"
                                    class="form-control @error('company_billing_address_3') is-invalid @enderror"
                                    value="{{ old('company_billing_address_3') }}">
                            </div>
                          


                            @error('company_billing_address_3')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            <label for="company_billing_postcode" class="col-md-2 col-form-label">Billing
                                Postcode</label>
                            <div class="col-md-4">
                                <input type="text" name="company_billing_postcode" id="company_billing_postcode"
                                    value="{{$companyProfile->billingAddress->postcode}}"
                                    class="form-control @error('company_billing_postcode') is-invalid @enderror"
                                    value="{{ old('company_billing_postcode') }}">
                            </div>
                          


                            @error('company_billing_postcode')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="company_billing_city" class="col-md-2 col-form-label">Billing
                                City</label>
                            <div class="col-md-4">
                                <input type="text" name="company_billing_city" id="company_billing_city"
                                    value="{{$companyProfile->billingAddress->city}}"
                                    class="form-control @error('company_billing_city') is-invalid @enderror"
                                    value="{{ old('company_billing_city') }}">
                            </div>
                          


                            @error('company_billing_city')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            <label for="company_phone_number" class="col-md-2 col-form-label">Company Number</label>
                            <div class="col-md-4">
                                <input type="text" name="company_phone_number" id="company_phone_number"
                                    value="{{$companyProfile->company_phone}}"
                                    class="form-control @error('company_phone_number') is-invalid @enderror"
                                    value="{{ old('company_phone_number') }}">
                            </div>
                          


                            @error('company_phone_number')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">

                            <label for="company_email" class="col-md-2 col-form-label">Company Email</label>
                            <div class="col-md-4">
                                <input type="text" name="company_email" id="company_email"
                                    value="{{$companyProfile->company_email}}"
                                    class="form-control @error('company_email') is-invalid @enderror"
                                    value="{{ old('company_email') }}" readonly>
                            </div>

                            @error('company_email')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="company_information" class="col-md-2 col-form-label">ID Information</label>
                            <div class="col-md-9">
                                <input type="text" name="company_information" id="company_information" value="WIP"
                                    class="form-control @error('company_information') is-invalid @enderror"
                                    value="{{ old('company_information') }}" readonly>
                            </div>


                            @error('company_information')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>



                        <div class="form-group row ">

                            <div class="offset-10 col-md-2 " >
                                <input type="submit" class="bjsh-btn-gradient" value="Update Profile">
                            </div>

                        </div>

                    </div>
                </div>         
    </form>
  </div>
 </div>
</div>

{{------Mobile Layout----}}




<div class="mt-4 hidden-md">
    <div class="row">
        <div class="col-4">
         <i class="fa fa-user mr-1"></i> <a href="{{route('shop.dashboard.customer.profile.edit')}}" class="text-color-header "
         ><strong>Edit Profile</strong></a>
        </div>
        @hasrole('dealer')
        <div class="col-4">
         <i class="fa fa-address-book-o mr-1"></i> <a href="{{route('shop.dashboard.dealer.profile.edit')}}" class="text-color-header " ><strong>Edit Dealer Information</strong></a>
        </div>
        @endhasrole
        @hasrole('panel')
        <div class="col-4">
         <i class="fa fa-building-o mr-1"></i><a href="{{route('management.company.profile.edit')}}" class="text-color-header "  style="border-bottom: 2px solid rgb(250, 172, 24);" ><strong> Edit Panel Information</strong></a>
        </div>
        @endhasrole          
    </div> 

    <form action="{{route('management.company.profile.update',[$companyProfile->account_id])}}" method="POST">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-12 col-md-10">
                <div class="card shadow-sm">
                    <div class="card-body">

                        <div class="form-group row ">
                            <label for="company_name" class="col-12 col-form-label">Company Name</label>
                            <div class="col-12">
                                <input type="text" name="company_name" id="company_name"
                                    value="{{$companyProfile->company_name}}"
                                    class="form-control @error('company_name') is-invalid @enderror"
                                    value="{{ old('company_name') }}" readonly>
                            </div>
                            <label for="company_ssm" class="col-12 col-form-label">Company SSM</label>
                            <div class="col-12">
                                <input type="text" name="company_ssm" id="company_ssm"
                                    value="{{$companyProfile->ssm_number}}"
                                    class="form-control @error('company_ssm') is-invalid @enderror"
                                    value="{{ old('company_ssm') }}" readonly>
                            </div>

                            @error('company_ssm')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>




                        <div class="form-group row ">
                            <label for="company_address_1" class="col-12 col-form-label">Company Address</label>
                            <div class="col-12">
                                <input type="text" name="company_address_1" id="company_address_1"
                                    value="{{$companyProfile->correspondenceAddress->address_1}}"
                                    class="form-control @error('company_address_1') is-invalid @enderror"
                                    value="{{ old('company_address_1') }}">

                            </div>
                          

                            @error('company_address_1')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                           
                            <div class="col-12">
                                <input type="text" name="company_address_2" id="company_address_2"
                                    value="{{$companyProfile->correspondenceAddress->address_2}}"
                                    class="form-control @error('company_address_2') is-invalid @enderror"
                                    value="{{ old('company_address_2') }}">

                            </div>
                          


                            @error('company_address_2')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                          
                            <div class="col-12">
                                <input type="text" name="company_address_3" id="company_address_3"
                                    value="{{$companyProfile->correspondenceAddress->address_3}}"
                                    class="form-control @error('company_address_3') is-invalid @enderror"
                                    value="{{ old('company_address_3') }}">

                            </div>
                           


                            @error('company_address_3')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            <label for="postcode" class="col-12 col-form-label">Postcode</label>
                            <div class="col-12">
                                <input type="text" name="postcode"
                                    value="{{$companyProfile->correspondenceAddress->postcode}}" id="postcode"
                                    class="form-control @error('postcode') is-invalid @enderror"
                                    value="{{ old('postcode') }}">
                            </div>
                         


                            @error('postcode')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="city" class="col-12 col-form-label">City</label>
                            <div class="col-12">
                                <input type="text" name="city" value="{{$companyProfile->correspondenceAddress->city}}"
                                    id="city" class="form-control @error('city') is-invalid @enderror"
                                    value="{{ old('city') }}">
                            </div>
                        


                            @error('city')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            <label for="company_billing_address_1" class="col-12 col-form-label">Billing
                                Address</label>
                            <div class="col-12">
                                <input type="text" name="company_billing_address_1" id="company_billing_address_1"
                                    value="{{$companyProfile->billingAddress->address_1}}"
                                    class="form-control @error('company_billing_address_1') is-invalid @enderror"
                                    value="{{ old('company_billing_address_1') }}">
                            </div>
                          


                            @error('company_billing_address_1')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                           
                            <div class="col-12">
                                <input type="text" name="company_billing_address_2" id="company_billing_address_2"
                                    value="{{$companyProfile->billingAddress->address_2}}"
                                    class="form-control @error('company_billing_address_2') is-invalid @enderror"
                                    value="{{ old('company_billing_address_2') }}">
                            </div>
                          


                            @error('company_billing_address_2')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                          
                            <div class="col-12">
                                <input type="text" name="company_billing_address_3" id="company_billing_address_3"
                                    value="{{$companyProfile->billingAddress->address_3}}"
                                    class="form-control @error('company_billing_address_3') is-invalid @enderror"
                                    value="{{ old('company_billing_address_3') }}">
                            </div>
                          


                            @error('company_billing_address_3')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>



                        <div class="form-group row ">
                            <label for="company_billing_postcode" class="col-12 col-form-label">Billing
                                Postcode</label>
                            <div class="col-12">
                                <input type="text" name="company_billing_postcode" id="company_billing_postcode"
                                    value="{{$companyProfile->billingAddress->postcode}}"
                                    class="form-control @error('company_billing_postcode') is-invalid @enderror"
                                    value="{{ old('company_billing_postcode') }}">
                            </div>
                          


                            @error('company_billing_postcode')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="company_billing_city" class="col-12 col-form-label">Billing
                                City</label>
                            <div class="col-12">
                                <input type="text" name="company_billing_city" id="company_billing_city"
                                    value="{{$companyProfile->billingAddress->city}}"
                                    class="form-control @error('company_billing_city') is-invalid @enderror"
                                    value="{{ old('company_billing_city') }}">
                            </div>
                          


                            @error('company_billing_city')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            <label for="company_phone_number" class="col-12 col-form-label">Company Number</label>
                            <div class="col-12">
                                <input type="text" name="company_phone_number" id="company_phone_number"
                                    value="{{$companyProfile->company_phone}}"
                                    class="form-control @error('company_phone_number') is-invalid @enderror"
                                    value="{{ old('company_phone_number') }}">
                            </div>
                          


                            @error('company_phone_number')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">

                            <label for="company_email" class="col-12 col-form-label">Company Email</label>
                            <div class="col-12">
                                <input type="text" name="company_email" id="company_email"
                                    value="{{$companyProfile->company_email}}"
                                    class="form-control @error('company_email') is-invalid @enderror"
                                    value="{{ old('company_email') }}" readonly>
                            </div>

                            @error('company_email')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="company_information" class="col-12 col-form-label">ID Information</label>
                            <div class="col-12">
                                <input type="text" name="company_information" id="company_information" value="WIP"
                                    class="form-control @error('company_information') is-invalid @enderror"
                                    value="{{ old('company_information') }}" readonly>
                            </div>


                            @error('company_information')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>



                        
                <div class="form-group row ">
                    <div class="offset-6 col-2">

                        <input type="submit" class="btn grad2 bjsh-btn-gradient btn-small-screen"
                            value="Update Profile">

                    </div>
                </div>




                    </div>
                </div>
            </div>


        </div>
    </form>
</div>




<style>

.text-color-header{
    color:black;
    font-size: 12pt;
}

  .text-bold{
      font-weight: bold;
    }
  .font-family-style{
      font-family:cursive;
    }
     @media(max-width:767px) {
            .hidden-sm {
               display: none;
                    }
    
                           }
    
    @media(min-width:767px) {
         .hidden-md {
            display: none;
              }
            }
    
    </style>
@endsection
