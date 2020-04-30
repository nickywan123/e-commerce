@extends('layouts.management.main-dealer')



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

    <div class="hidden-sm">
        <form action="{{route('shop.dashboard.dealer.profile.update',[$dealerProfile->account_id])}}" method="POST">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
            <div class="row">
            <div class="offset-1 col-12 col-md-10">
                <h4 class="text-capitalize text-dark">Edit Dealer Profile</h4>
                
                <div class="card shadow-sm">
                    <div class="card-body">

                        <div class="form-group row ">
                            <label for="dealer_name" class="col-md-2 col-form-label">Dealer Name</label>
                            <div class="col-md-4">
                                <input type="text" name="dealer_name" id="dealer_name"
                                    value="{{$dealerProfile->full_name}}"
                                    class="form-control @error('full_name') is-invalid @enderror"
                                    value="{{ old('full_name') }}" >
                            </div>
                           
                          
                        </div>




                        <div class="form-group row ">
                            <label for="gender" class="col-md-2 col-form-label">Gender</label>
                            <div class="col-md-9">
                                <input type="text" name="gender" id="gender"
                                   @if($dealerProfile->gender_id===1)
                                    value="Male"
                                    @else
                                    value="Female"
                                    @endif
                                 class="form-control @error('gender') is-invalid @enderror"
                                 value="{{ old('gender') }}" readonly>

                            </div>
                         


                            @error('gender')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            <label for="user_id" class="col-md-2 col-form-label">User ID</label>
                            <div class="col-md-4">
                                <input type="text" name="user_id"
                                    value="{{$dealerProfile->account_id}}" id="user_id"
                                    class="form-control @error('user_id') is-invalid @enderror"
                                    value="{{ old('user_id') }}" readonly>
                            </div>


                            @error('user_id')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="dealer_billing_address_1" class="col-md-2 col-form-label">Billing Address</label>
                            <div class="col-md-9">
                                <input type="text" name="dealer_billing_address_1" id="dealer_billing_address_1"
                                    value="{{$dealerProfile->billingAddress->address_1}}"
                                    class="form-control @error('dealer_billing_address_1') is-invalid @enderror"
                                    value="{{ old('dealer_billing_address_1') }}" >
                            </div>
                          


                            @error('dealer_billing_address_1')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">                         
                            <div class="offset-2 col-md-9">
                                <input type="text" name="dealer_billing_address_2" id="dealer_billing_address_2"
                                    value="{{$dealerProfile->billingAddress->address_2}}"
                                    class="form-control @error('dealer_billing_address_2') is-invalid @enderror"
                                    value="{{ old('dealer_billing_address_2') }}" >
                            </div>
                          
                            @error('dealer_billing_address_2')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        
                        <div class="form-group row ">                         
                            <div class="offset-2 col-md-9">
                                <input type="text" name="dealer_billing_address_3" id="dealer_billing_address_3"
                                    value="{{$dealerProfile->billingAddress->address_3}}"
                                    class="form-control @error('dealer_billing_address_3') is-invalid @enderror"
                                    value="{{ old('dealer_billing_address_3') }}" >
                            </div>
                          
                            @error('dealer_billing_address_3')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        
                        <div class="form-group row ">
                            <label for="dealer_billing_postcode" class="col-md-2 col-form-label">Billing
                                Postcode</label>
                            <div class="col-md-4">
                                <input type="text" name="dealer_billing_postcode" id="dealer_billing_postcode"
                                    value="{{$dealerProfile->billingAddress->postcode}}"
                                    class="form-control @error('dealer_billing_postcode') is-invalid @enderror"
                                    value="{{ old('dealer_billing_postcode') }}" >
                            </div>

   
                            @error('dealer_billing_postcode')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                            <label for="dealer_billing_city" class="col-md-2 col-form-label">Billing
                                City</label>
                            <div class="col-md-4">
                                <input type="text" name="dealer_billing_city" id="dealer_billing_city"
                                    value="{{$dealerProfile->billingAddress->city}}"
                                    class="form-control @error('dealer_billing_city') is-invalid @enderror"
                                    value="{{ old('dealer_billing_city') }}" >
                            </div>

   
                            @error('dealer_billing_city')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>




                        <div class="form-group row ">
                            <label for="dealer_shipping_address_1" class="col-md-2 col-form-label">Shipping Address</label>
                            <div class="col-md-9">
                                <input type="text" name="dealer_shipping_address_1" id="dealer_shipping_address_1"
                                    value="{{$dealerProfile->shippingAddress->address_1}}"
                                    class="form-control @error('dealer_shipping_address_1') is-invalid @enderror"
                                    value="{{ old('dealer_shipping_address_1') }}" >
                            </div>
                          


                            @error('dealer_shipping_address_1')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        
                        <div class="form-group row ">
                           
                            <div class="offset-2 col-md-9">
                                <input type="text" name="dealer_shipping_address_2" id="dealer_shipping_address_2"
                                    value="{{$dealerProfile->shippingAddress->address_2}}"
                                    class="form-control @error('dealer_shipping_address_2') is-invalid @enderror"
                                    value="{{ old('dealer_shipping_address_2') }}" >
                            </div>
                          


                            @error('dealer_shipping_address_2')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group row ">
                           
                            <div class="offset-2 col-md-9">
                                <input type="text" name="dealer_shipping_address_3" id="dealer_shipping_address_3"
                                    value="{{$dealerProfile->shippingAddress->address_3}}"
                                    class="form-control @error('dealer_shipping_address_3') is-invalid @enderror"
                                    value="{{ old('dealer_shipping_address_3') }}" >
                            </div>
                          


                            @error('dealer_shipping_address_3')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                     


                        
                        <div class="form-group row ">
                            <label for="dealer_shipping_postcode" class="col-md-2 col-form-label">Shipping
                                Postcode</label>
                            <div class="col-md-4">
                                <input type="text" name="dealer_shipping_postcode" id="dealer_shipping_postcode"
                                    value="{{$dealerProfile->shippingAddress->postcode}}"
                                    class="form-control @error('dealer_shipping_postcode') is-invalid @enderror"
                                    value="{{ old('dealer_shipping_postcode') }}" >
                            </div>

   
                            @error('dealer_shipping_postcode')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                          
                        <div class="form-group row ">
                            <label for="dealer_shipping_city" class="col-md-2 col-form-label">Shipping
                                City</label>
                            <div class="col-md-4">
                                <input type="text" name="dealer_shipping_city" id="dealer_shipping_city"
                                    value="{{$dealerProfile->shippingAddress->city}}"
                                    class="form-control @error('dealer_shipping_city') is-invalid @enderror"
                                    value="{{ old('dealer_shipping_city') }}" >
                            </div>

   
                            @error('dealer_shipping_city')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>


                        <div class="form-group row ">
                            <label for="dealer_mobile_contact" class="col-md-2 col-form-label">Mobile Contact
                                </label>
                            <div class="col-md-4">
                                <input type="text" name="dealer_mobile_contact" id="dealer_mobile_contact"
                                    value="{{$dealerProfile->dealerMobileContact->contact_num}}"
                                    class="form-control @error('dealer_mobile_contact') is-invalid @enderror"
                                    value="{{ old('dealer_mobile_contact') }}" >
                            </div>

                           

   
                            @error('dealer_mobile_contact')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                      
     
                        <div class="form-group row ">

                            <div class="offset-9 col-md-2" style="margin-left: 850px;">
                                <input type="submit" class="bjsh-btn-gradient" value="Update Profile">
                            </div>

                        </div>


                    </div>
                </div>
            </div>


        </div>
        </form>

</div>


{{--Mobile Layout--}}


 <div class="mt-4 hidden-md">
    <form action="{{route('shop.dashboard.dealer.profile.update',[$dealerProfile->account_id])}}" method="POST">
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <h4 class="text-capitalize text-dark font-family-style">Edit Dealer Profile</h4>
    <div class="row">
        <div class="col-12 col-md-10">
            <div class="card shadow-sm">
                <div class="card-body">



                    <div class="form-group row ">
                        <label for="dealer_name" class="col-md-2 col-form-label">Dealer Name</label>
                        <div class="col-md-4">
                            <input type="text" name="dealer_name" id="dealer_name"
                                value="{{$dealerProfile->full_name}}"
                                class="form-control @error('dealer_name') is-invalid @enderror"
                                value="{{ old('dealer_name') }}" >
                        </div>
                     
                    </div>




                    <div class="form-group row ">
                        <label for="gender" class="col-md-2 col-form-label"> Gender</label>
                        <div class="col-md-4">
                            <input type="text" name="gender"
                               @if($dealerProfile->gender_id===1)
                               value="Male"
                               @else
                              value="Female"
                              @endif
                                id="gender"
                                class="form-control @error('gender') is-invalid @enderror"
                                value="{{ old('gender') }}" readonly >
                        </div>                 
                    </div>


                    <div class="form-group row ">
                        <label for="dealer_billing_address_1" class="col-md-2 col-form-label">Billing Address</label>
                        <div class="col-md-9">
                            <input type="text" name="dealer_billing_address_1" id="dealer_billing_address_1"
                                value="{{$dealerProfile->billingAddress->address_1}}"
                                class="form-control @error('dealer_billing_address_1') is-invalid @enderror"
                                value="{{ old('dealer_billing_address_1') }}" >

                        </div>
                                          
                    </div>

                    <div class="form-group row ">
                     
                        <div class="col-md-9">
                            <input type="text" name="dealer_billing_address_2"
                                value="{{$dealerProfile->billingAddress->address_2}}"
                                class="form-control @error('dealer_billing_address_2') is-invalid @enderror"
                                value="{{ old('dealer_billing_address_2') }}" >

                        </div>
                                          
                    </div>

                    <div class="form-group row ">
                       
                        <div class="col-md-9">
                            <input type="text"  name="dealer_billing_address_3"
                                value="{{$dealerProfile->billingAddress->address_3}}"
                                class="form-control @error('dealer_billing_address_3') is-invalid @enderror"
                                value="{{ old('dealer_billing_address_3') }}" >

                        </div>
                                          
                    </div>

               


                    <div class="form-group row ">
                        <label for="dealer_billing_postcode" class="col-md-2 col-form-label">Billing Postcode</label>
                        <div class="col-md-4">
                            <input type="text" name="dealer_billing_postcode"
                                value="{{$dealerProfile->billingAddress->postcode}}" id="dealer_billing_postcode"
                                class="form-control @error('dealer_billing_postcode') is-invalid @enderror"
                                value="{{ old('dealer_billing_postcode') }}" >
                        </div>                 
                        @error('dealer_billing_postcode')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                                    
                    </div>


                    <div class="form-group row ">
                        <label for="dealer_billing_city" class="col-md-2 col-form-label">Billing City</label>
                        <div class="col-md-4">
                            <input type="text" name="dealer_billing_city"
                                value="{{$dealerProfile->billingAddress->postcode}}" id="dealer_billing_city"
                                class="form-control @error('dealer_billing_city') is-invalid @enderror"
                                value="{{ old('dealer_billing_city') }}" >
                        </div>                 
                        @error('dealer_billing_city')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                                    
                    </div>


                    <div class="form-group row ">
                        <label for="dealer_shipping_address" class="col-md-2 col-form-label">Shipping Address</label>
                        <div class="col-md-9">
                            <input type="text" name="dealer_shipping_address_1" id="dealer_shipping_address_1"
                                value="{{$dealerProfile->shippingAddress->address_1}}"
                                class="form-control @error('dealer_shipping_address_1') is-invalid @enderror"
                                value="{{ old('dealer_shipping_address_1') }}" >
                        </div>
                        @error('dealer_shipping_address_1')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                                     
                    </div>

                    
                    <div class="form-group row ">
                        
                        <div class="col-md-9">
                            <input type="text" name="dealer_shipping_address_2"
                                value="{{$dealerProfile->shippingAddress->address_2}}"
                                class="form-control @error('dealer_shipping_address_2') is-invalid @enderror"
                                value="{{ old('dealer_shipping_address_2') }}" >
                        </div>
                        @error('dealer_shipping_address_2')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                                             
                    </div>

                    
                    <div class="form-group row ">
                        
                        <div class="col-md-9">
                            <input type="text" name="dealer_shipping_address_3"
                                value="{{$dealerProfile->shippingAddress->address_3}}"
                                class="form-control @error('dealer_shipping_address_3') is-invalid @enderror"
                                value="{{ old('dealer_shipping_address_3') }}" >
                        </div>
                        @error('dealer_shipping_address_3')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                                    
                    </div>

                    
             

                    
                    <div class="form-group row ">
                        <label for="dealer_shipping_postcode" class="col-md-2 col-form-label">Shipping
                            Postcode</label>
                        <div class="col-md-4">
                            <input type="text" name="dealer_shipping_postcode" id="dealer_shipping_postcode"
                                value="{{$dealerProfile->shippingAddress->postcode}}"
                                class="form-control @error('dealer_shipping_postcode') is-invalid @enderror"
                                value="{{ old('dealer_shipping_postcode') }}" >
                        </div>
                        @error('dealer_shipping_postcode')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror

                     
                    </div>


                    <div class="form-group row ">
                        <label for="dealer_shipping_city" class="col-md-2 col-form-label">Shipping
                            City</label>
                        <div class="col-md-9">
                            <input type="text" name="dealer_shipping_city"
                                value="{{$dealerProfile->shippingAddress->city}}"
                                class="form-control @error('dealer_shipping_city') is-invalid @enderror"
                                value="{{ old('dealer_shipping_city') }}" >
                        </div>
                        @error('dealer_shipping_city')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                                       
                    </div>


                    <div class="form-group row ">
                        <label for="dealer_mobile_contact" class="col-md-2 col-form-label">Mobile Contact</label>
                        <div class="col-md-9">
                            <input type="text" name="dealer_mobile_contact" id="dealer_mobile_contact" value="{{$dealerProfile->dealerMobileContact->contact_num}}"
                                class="form-control @error('dealer_mobile_contact') is-invalid @enderror"
                                value="{{ old('dealer_mobile_contact') }}" >
                        </div>            
                        @error('dealer_mobile_contact')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror        
                    </div>

                 

                    <div class="form-group row ">
                        <label for="dealer_information" class="col-md-2 col-form-label">ID Information</label>
                        <div class="col-md-9">
                            <input type="text" name="dealer_information" id="dealer_information" value="WIP"
                                class="form-control @error('dealer_information') is-invalid @enderror"
                                value="{{ old('dealer_information') }}" readonly>
                        </div>                    
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
