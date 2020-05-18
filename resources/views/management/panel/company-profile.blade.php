@extends('layouts.management.main-customer')



@section('content')

<br>

 


    @if(Session::has('successful_message'))
    <div class="alert alert-success">
    {{ Session::get('successful_message') }}
    </div>
    @endif
    
    @if(Session::has('error_message'))
    <div class="alert alert-danger">
    {{ Session::get('error_message') }}
    </div>
    @endif
    

    {{---Desktop Layout----}}

    <div class="hidden-sm font-family">
        <div class="row">
            <div class="col-12 offset-1 col-md-10">  
                
                <div class="row">
                    <div class="col-2">
                     <i class="fa fa-user mr-1"></i> <a href="{{route('shop.dashboard.customer.profile')}}" class="text-color-header font-family"
                     ><strong>User Profile</strong></a>
                    </div>
                    @hasrole('dealer')
                    <div class="col-2">
                     <i class="fa fa-address-book-o mr-1"></i> <a href="{{route('shop.dashboard.dealer.profile')}}" class="text-color-header font-family" ><strong>Dealer Information</strong></a>
                    </div>
                    @endhasrole
                    @hasrole('panel')
                    <div class="col-4">
                     <i class="fa fa-building-o mr-1"></i><a href="{{route('management.company.profile')}}" class="text-color-header font-family" style="border-bottom: 2px solid rgb(250, 172, 24);" ><strong>Panel: Company Information</strong></a>
                    </div>
                    @endhasrole          
                </div>
                <hr>

                <div class="card shadow-sm">
                    <div class="card-body">


                        {{-- <div class="form-group row ">
                            <label for="company_propaganda" class="col-md-2 col-form-label">Company Propaganda</label>
                            <div class="col-md-9">
                                <input type="text" name="company_propaganda" id="company_propaganda" value="WIP"
                                    class="form-control @error('company_propaganda') is-invalid @enderror"
                                    value="{{ old('company_propaganda') }}" readonly>
                            </div>


                            @error('company_propaganda')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div> --}}




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
                            <label for="company_address" class="col-md-2 col-form-label">Company Address</label>
                            <div class="col-md-9">
                                <input type="text" name="company_address" id="company_address"
                                    value="{{$companyProfile->correspondenceAddress->address_1}},{{$companyProfile->correspondenceAddress->address_2}},{{$companyProfile->correspondenceAddress->address_3}},{{$companyProfile->correspondenceAddress->postcode}},{{$companyProfile->correspondenceAddress->city}},Malaysia"
                                    class="form-control @error('company_address') is-invalid @enderror"
                                    value="{{ old('company_address') }}" readonly>

                            </div>
                            <div class="col-md-1 col-form-label">
                               <a href="{{route('management.company.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a> 
                            </div>


                            @error('company_address')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            <label for="postcode" class="col-md-2 col-form-label">Postcode</label>
                            <div class="col-md-4">
                                <input type="text" name="postcode"
                                    value="{{$companyProfile->correspondenceAddress->postcode}}" id="postcode"
                                    class="form-control @error('postcode') is-invalid @enderror"
                                    value="{{ old('postcode') }}" readonly>
                            </div>


                            @error('postcode')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="company_billing_address" class="col-md-2 col-form-label">Billing Address</label>
                            <div class="col-md-9">
                                <input type="text" name="company_billing_address" id="company_billing_address"
                                    value="{{$companyProfile->billingAddress->address_1}},{{$companyProfile->billingAddress->address_2}},{{$companyProfile->billingAddress->address_3}},{{$companyProfile->billingAddress->city}},Malaysia"
                                    class="form-control @error('company_billing_address') is-invalid @enderror"
                                    value="{{ old('company_billing_address') }}" readonly>
                            </div>
                            <div class="col-md-1 col-form-label">
                                <a href="{{route('management.company.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a> 
                            </div>



                            @error('company_billing_address')
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
                                    value="{{ old('company_billing_postcode') }}" readonly>
                            </div>

   
                            @error('company_billing_postcode')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            <label for="company_phone_number" class="col-md-2 col-form-label">Company Number</label>
                            <div class="col-md-4">
                                <input type="text" name="company_phone_number" id="company_phone_number"
                                    value="{{$companyProfile->company_phone}}"
                                    class="form-control @error('company_phone_number') is-invalid @enderror"
                                    value="{{ old('company_phone_number') }}" readonly>
                            </div>
                            <div class="col-md-1 col-form-label">
                                <a href="{{route('management.company.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a> 
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


                    </div>
                </div>
            </div>


        </div>

</div>


{{--Mobile Layout--}}


 <div class="mt-4 hidden-md">
    <div class="row">
        <div class="col-4">
         <i class="fa fa-user mr-1"></i> <a href="{{route('shop.dashboard.customer.profile')}}" class="text-color-header font-family"  
         ><strong>User Profile</strong></a>
        </div>
        @hasrole('dealer')
        <div class="col-4">
         <i class="fa fa-address-book-o mr-1"></i> <a href="{{route('shop.dashboard.dealer.profile')}}" class="text-color-header font-family" ><strong>Dealer Information</strong></a>
        </div>
        @endhasrole
        @hasrole('panel')
        <div class="col-4">
         <i class="fa fa-building-o mr-1"></i><a href="{{route('management.company.profile')}}" class="text-color-header font-family"  style="border-bottom: 2px solid rgb(250, 172, 24);" ><strong>Panel: Company Information</strong></a>
        </div>
        @endhasrole          
    </div>
    <div class="row">
        <div class="col-12 col-md-10">
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
                        <label for="company_address" class="col-md-2 col-form-label">Company Address</label>
                        <div class="col-md-9">
                            <input type="text" name="company_address" id="company_address"
                                value="{{$companyProfile->correspondenceAddress->address_1}}"
                                class="form-control @error('company_address') is-invalid @enderror"
                                value="{{ old('company_address') }}" readonly>

                        </div>
                                          
                    </div>

                    <div class="form-group row ">
                     
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{$companyProfile->correspondenceAddress->address_2}}"
                                class="form-control @error('company_address') is-invalid @enderror"
                                value="{{ old('company_address') }}" readonly>

                        </div>
                                          
                    </div>

                    <div class="form-group row ">
                       
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{$companyProfile->correspondenceAddress->address_3}}"
                                class="form-control @error('company_address') is-invalid @enderror"
                                value="{{ old('company_address') }}" readonly>

                        </div>
                                          
                    </div>

                    <div class="form-group row">
                        
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{$companyProfile->correspondenceAddress->postcode}},{{$companyProfile->correspondenceAddress->city}},Malaysia"
                                class="form-control @error('company_address') is-invalid @enderror"
                                value="{{ old('company_address') }}" readonly>

                        </div>
                                          
                    </div>



                    <div class="form-group row ">
                        <label for="postcode" class="col-md-2 col-form-label">Postcode</label>
                        <div class="col-md-4">
                            <input type="text" name="postcode"
                                value="{{$companyProfile->correspondenceAddress->postcode}}" id="postcode"
                                class="form-control @error('postcode') is-invalid @enderror"
                                value="{{ old('postcode') }}" readonly>
                        </div>


                     
                    </div>

                    <div class="form-group row ">
                        <label for="company_billing_address" class="col-md-2 col-form-label">Billing Address</label>
                        <div class="col-md-9">
                            <input type="text" name="company_billing_address" id="company_billing_address"
                                value="{{$companyProfile->billingAddress->address_1}}"
                                class="form-control @error('company_billing_address') is-invalid @enderror"
                                value="{{ old('company_billing_address') }}" readonly>
                        </div>
                                       
                    </div>

                    
                    <div class="form-group row ">
                        
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{$companyProfile->billingAddress->address_2}}"
                                class="form-control @error('company_billing_address') is-invalid @enderror"
                                value="{{ old('company_billing_address') }}" readonly>
                        </div>
                                       
                    </div>

                    
                    <div class="form-group row ">
                        
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{$companyProfile->billingAddress->address_3}}"
                                class="form-control @error('company_billing_address') is-invalid @enderror"
                                value="{{ old('company_billing_address') }}" readonly>
                        </div>
                                       
                    </div>

                    
                    <div class="form-group row ">
                       
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{$companyProfile->billingAddress->city}},Malaysia"
                                class="form-control @error('company_billing_address') is-invalid @enderror"
                                value="{{ old('company_billing_address') }}" readonly>
                        </div>
                                       
                    </div>


                    
                    <div class="form-group row ">
                        <label for="company_billing_postcode" class="col-md-2 col-form-label">Billing
                            Postcode</label>
                        <div class="col-md-4">
                            <input type="text" name="company_billing_postcode" id="company_billing_postcode"
                                value="{{$companyProfile->billingAddress->postcode}}"
                                class="form-control @error('company_billing_postcode') is-invalid @enderror"
                                value="{{ old('company_billing_postcode') }}" readonly>
                        </div>


                     
                    </div>


                    <div class="form-group row ">
                        <label for="company_phone_number" class="col-md-2 col-form-label">Company Number</label>
                        <div class="col-md-4">
                            <input type="text" name="company_phone_number" id="company_phone_number"
                                value="{{$companyProfile->company_phone}}"
                                class="form-control @error('company_phone_number') is-invalid @enderror"
                                value="{{ old('company_phone_number') }}" readonly>
                        </div>
                    


                    </div>

                    <div class="form-group row ">

                        <label for="company_email" class="col-md-2 col-form-label">Company Email</label>
                        <div class="col-md-4">
                            <input type="text" name="company_email" id="company_email"
                                value="{{$companyProfile->company_email}}"
                                class="form-control @error('company_email') is-invalid @enderror"
                                value="{{ old('company_email') }}" readonly>
                        </div>

                  
                    </div>

                    <div class="form-group row ">
                        <label for="company_information" class="col-md-2 col-form-label">ID Information</label>
                        <div class="col-md-9">
                            <input type="text" name="company_information" id="company_information" value="WIP"
                                class="form-control @error('company_information') is-invalid @enderror"
                                value="{{ old('company_information') }}" readonly>
                        </div>                    
                    </div>

                    <div class="form-group row ">
                        <div class="offset-5 col-5">
                          <a href="{{route('management.company.profile.edit')}}" class="btn grad2 bjsh-btn-gradient btn-small-screen"><b>Edit Profile</b></a>
                        </div>  
                      </div>


                </div>
            </div>
        </div>


    </div>

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
