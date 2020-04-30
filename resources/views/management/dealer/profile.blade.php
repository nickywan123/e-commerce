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
        
        <div class="row">
            <div class="offset-1 col-12 col-md-10">
                <h4 class="text-capitalize text-dark">Dealer Profile</h4>
                <div class="card shadow-sm">
                    <div class="card-body">

                        <div class="form-group row ">
                            <label for="dealer_name" class="col-md-2 col-form-label">Dealer Name</label>
                            <div class="col-md-4">
                                <input type="text" name="dealer_name" id="dealer_name"
                                    value="{{$dealerProfile->full_name}}"
                                    class="form-control @error('full_name') is-invalid @enderror"
                                    value="{{ old('full_name') }}" readonly>
                            </div>
                            <div class="col-md-1 col-form-label">
                            <a href="{{route('shop.dashboard.dealer.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a> 
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
                            <label for="dealer_billing_address" class="col-md-2 col-form-label">Billing Address</label>
                            <div class="col-md-9">
                                <input type="text" name="dealer_billing_address" id="dealer_billing_address"
                                    value="{{$dealerProfile->billingAddress->address_1}},{{$dealerProfile->billingAddress->address_2}},{{$dealerProfile->billingAddress->address_3}},{{$dealerProfile->billingAddress->city}},Malaysia"
                                    class="form-control @error('dealer_billing_address') is-invalid @enderror"
                                    value="{{ old('dealer_billing_address') }}" readonly>
                            </div>
                            <div class="col-md-1 col-form-label">
                                <a href="{{route('shop.dashboard.dealer.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a> 
                            </div>



                            @error('dealer_billing_address')
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
                                    value="{{ old('dealer_billing_postcode') }}" readonly>
                            </div>

   
                            @error('dealer_billing_postcode')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>



                        <div class="form-group row ">
                            <label for="dealer_shipping_address" class="col-md-2 col-form-label">Shipping Address</label>
                            <div class="col-md-9">
                                <input type="text" name="dealer_shipping_address" id="dealer_shipping_address"
                                    value="{{$dealerProfile->shippingAddress->address_1}},{{$dealerProfile->shippingAddress->address_2}},{{$dealerProfile->shippingAddress->address_3}},{{$dealerProfile->shippingAddress->city}},Malaysia"
                                    class="form-control @error('dealer_shipping_address') is-invalid @enderror"
                                    value="{{ old('dealer_shipping_address') }}" readonly>
                            </div>
                            <div class="col-md-1 col-form-label">
                                <a href="{{route('shop.dashboard.dealer.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a> 
                            </div> 



                            @error('dealer_shipping_address')
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
                                    value="{{ old('dealer_shipping_postcode') }}" readonly>
                            </div>

   
                            @error('dealer_shipping_postcode')
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
                                    value="{{ old('dealer_mobile_contact') }}" readonly>
                            </div>

                            <div class="col-md-1 col-form-label">
                                <a href="{{route('shop.dashboard.dealer.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a> 
                            </div> 

   
                            @error('dealer_mobile_contact')
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
    <h4 class="text-capitalize text-dark font-family-style">Dealer Profile</h4>
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
                                value="{{ old('dealer_name') }}" readonly>
                        </div>
                     
                    </div>




                    <div class="form-group row ">
                        <label for="dealer_address" class="col-md-2 col-form-label">Billing Address</label>
                        <div class="col-md-9">
                            <input type="text" name="dealer_address" id="dealer_address"
                                value="{{$dealerProfile->billingAddress->address_1}}"
                                class="form-control @error('dealer_address') is-invalid @enderror"
                                value="{{ old('dealer_address') }}" readonly>

                        </div>
                                          
                    </div>

                    <div class="form-group row ">
                     
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{$dealerProfile->billingAddress->address_2}}"
                                class="form-control @error('dealer_address') is-invalid @enderror"
                                value="{{ old('dealer_address') }}" readonly>

                        </div>
                                          
                    </div>

                    <div class="form-group row ">
                       
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{$dealerProfile->billingAddress->address_3}}"
                                class="form-control @error('dealer_address') is-invalid @enderror"
                                value="{{ old('dealer_address') }}" readonly>

                        </div>
                                          
                    </div>

                    <div class="form-group row">
                        
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{$dealerProfile->billingAddress->postcode}},{{$dealerProfile->billingAddress->city}},Malaysia"
                                class="form-control @error('dealer_address') is-invalid @enderror"
                                value="{{ old('dealer_address') }}" readonly>

                        </div>
                                          
                    </div>



                    <div class="form-group row ">
                        <label for="postcode" class="col-md-2 col-form-label"> Billing Postcode</label>
                        <div class="col-md-4">
                            <input type="text" name="postcode"
                                value="{{$dealerProfile->billingAddress->postcode}}" id="postcode"
                                class="form-control @error('postcode') is-invalid @enderror"
                                value="{{ old('postcode') }}" readonly>
                        </div>


                     
                    </div>

                    <div class="form-group row ">
                        <label for="dealer_shipping_address" class="col-md-2 col-form-label">Shipping Address</label>
                        <div class="col-md-9">
                            <input type="text" name="dealer_shipping_address" id="dealer_shipping_address"
                                value="{{$dealerProfile->shippingAddress->address_1}}"
                                class="form-control @error('dealer_shipping_address') is-invalid @enderror"
                                value="{{ old('dealer_shipping_address') }}" readonly>
                        </div>
                                       
                    </div>

                    
                    <div class="form-group row ">
                        
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{$dealerProfile->shippingAddress->address_2}}"
                                class="form-control @error('dealer_shipping_address') is-invalid @enderror"
                                value="{{ old('dealer_shipping_address') }}" readonly>
                        </div>
                                       
                    </div>

                    
                    <div class="form-group row ">
                        
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{$dealerProfile->shippingAddress->address_3}}"
                                class="form-control @error('dealer_shipping_address') is-invalid @enderror"
                                value="{{ old('dealer_shipping_address') }}" readonly>
                        </div>
                                       
                    </div>

                    
                    <div class="form-group row ">
                       
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{$dealerProfile->shippingAddress->city}},Malaysia"
                                class="form-control @error('dealer_shipping_address') is-invalid @enderror"
                                value="{{ old('dealer_shipping_address') }}" readonly>
                        </div>
                                       
                    </div>


                    
                    <div class="form-group row ">
                        <label for="dealer_shipping_postcode" class="col-md-2 col-form-label">Shipping
                            Postcode</label>
                        <div class="col-md-4">
                            <input type="text" name="dealer_shipping_postcode" id="dealer_shipping_postcode"
                                value="{{$dealerProfile->shippingAddress->postcode}}"
                                class="form-control @error('dealer_shipping_postcode') is-invalid @enderror"
                                value="{{ old('dealer_shipping_postcode') }}" readonly>
                        </div>


                     
                    </div>


                    <div class="form-group row ">
                        <label for="dealer_mobile_contact" class="col-md-2 col-form-label">Mobile Contact</label>
                        <div class="col-md-9">
                            <input type="text" name="dealer_mobile_contact" id="dealer_mobile_contact" value="{{$dealerProfile->dealerMobileContact->contact_num}}"
                                class="form-control @error('dealer_mobile_contact') is-invalid @enderror"
                                value="{{ old('dealer_mobile_contact') }}" readonly>
                        </div>                    
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
                  <div class="offset-5 col-5">
                     <a href="{{route('shop.dashboard.dealer.profile.edit')}}" class="btn grad2 bjsh-btn-gradient btn-small-screen"><b>Edit Profile</b></a>
                  </div>  
                </div>


                </div>
            </div>
        </div>


    </div>

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
