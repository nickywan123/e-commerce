@extends('layouts.management.main-customer')

@section('content')

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

<div class="row">
  <div class="col-12 offset-md-1 col-md-10">
    <div class="row">
      <div class="col-4">
        <i class="fa fa-user mr-1"></i> <a href="{{route('shop.dashboard.customer.profile')}}" class="text-color-header "
           style="border-bottom: 2px solid rgb(250, 172, 24);" ><strong>My Profile</strong></a>
      </div>
      @hasrole('dealer')
      <div class="col-4">
        <i class="fa fa-address-book-o mr-1"></i> <a href="{{route('shop.dashboard.dealer.profile')}}" class="text-color-header " ><strong>Dealer Profile</strong></a>
      </div>
      @endhasrole
      @hasrole('panel')
      <div class="col-4">
        <i class="fa fa-building-o mr-1"></i><a href="{{route('management.company.profile')}}" class="text-color-header " ><strong>Panel Profile</strong></a>
      </div>
      @endhasrole          
    </div><hr>
    <div class="card shadow-sm">
      <div class="card-body">
        <div class="form-group row ">
            <div class="col-md-12 m-0" style="display: flex;">
               <h4>Profile Information</h4>
               <a style="margin-left:1rem;" href="{{route('shop.dashboard.customer.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a> 
            </div>
        </div><hr>
        <div class="form-group row ">
          <label for="avatar" class="col-12 col-md-2 col-form-label">Avatar</label>
          <div class="col-4 col-md-1 m-0">
            <img src="{{asset('/storage/avatar/default-avatar.jpg')}}"
                 style="max-width:80px; max-height:80px;" alt="avatar">
          </div>            
        </div>
        <div class="form-group row ">
          <label for="account_id" class="col-12 col-md-2 col-form-label">Bujishu ID</label>
          <div class="col-12 col-md-9 m-0">
            <input type="text" name="account_id" id="account_id"
                   value="{{$customerInfo->userInfo->account_id}}"
                   class="form-control  @error('account_id') is-invalid @enderror"
                   value="{{ old('account_id') }}" readonly>
          </div>             
        </div>
        <div class="form-group row ">
          <label for="full_name" class="col-12 col-md-2 col-form-label">Full Name(NRIC)</label>
          <div class="col-12 col-md-4 m-0">
            <input type="text" name="full_name" id="full_name"
                   value="{{$customerInfo->userInfo->full_name}}"
                   class="form-control  @error('full_name') is-invalid @enderror"
                   value="{{ old('full_name') }}" readonly>
          </div>          
        </div>
        <div class="form-group row ">
          <label for="billing_address_1" class="col-md-2 col-form-label">Billing Address</label>
          <div class="col-md-9 m-0">
            <input type="text" name="billing_address_1" id="billing_address_1"      
                   value="{{$customerInfo->userInfo->mailingAddress->address_1}}"
                   class="form-control  @error('billing_address_1') is-invalid @enderror"
                   value="{{ old('billing_address_1') }}" readonly>
          </div>           
        </div>
        <div class="form-group row ">
            <div class="offset-md-2 col-md-9  ">
              <input type="text" name="billing_address_2" id="billing_address_2"      
                     value="{{$customerInfo->userInfo->mailingAddress->address_2}}"
                     class="form-control  @error('billing_address_2') is-invalid @enderror"
                     value="{{ old('billing_address_2') }}" readonly>
            </div>           
        </div>
        <div class="form-group row ">
            <div class="offset-md-2 col-md-9 ">
              <input type="text" name="billing_address_3" id="billing_address_3"      
                     value="{{$customerInfo->userInfo->mailingAddress->address_3}}"
                     class="form-control  @error('billing_address_3') is-invalid @enderror"
                     value="{{ old('billing_address_3') }}" readonly>
            </div>           
        </div>
        <div class="form-group row ">
            <label for="billing_city" class="col-md-2 col-form-label">Billing City</label>
            <div class="col-md-4 m-0">
            <input type="text" name="billing_city" id="billing_city"
                   value="{{$customerInfo->userInfo->mailingAddress->city}}"
                   class="form-control  @error('billing_city') is-invalid @enderror"
                   value="{{ old('billing_city') }}" readonly>
            </div>             
        </div>
        <div class="form-group row ">
          <label for="billing_postcode" class="col-md-2 col-form-label">Billing Postcode</label>
          <div class="col-md-4 m-0">
          <input type="text" name="billing_postcode" id="billing_postcode"
                 value="{{$customerInfo->userInfo->mailingAddress->postcode}}"
                 class="form-control  @error('billing_postcode') is-invalid @enderror"
                 value="{{ old('billing_postcode') }}" readonly>
          </div>             
        </div>
        <div class="form-group row ">
            <label for="billing_state" class="col-md-2 col-form-label">Billing State</label>
            <div class="col-md-9 m-0">
                <input type="text" name="billing_state" id="billing_state"
                        value="{{$customerInfo->userInfo->mailingAddress->state->name}}"
                        class="form-control @error('billing_state') is-invalid @enderror"
                        value="{{ old('billing_state') }}" readonly>
            </div>
        </div>    
        <div class="form-group row ">
          <label for="shipping_address_1" class="col-md-2 col-form-label">Shipping Address</label>
          <div class="col-md-9 m-0">
            <input type="text" name="shipping_address_1" id="shipping_address_1"
                   value="{{$customerInfo->userInfo->shippingAddress->address_1}} "
                   class="form-control  @error('shipping_address_1') is-invalid @enderror"
                   value="{{ old('shipping_address_1') }}" readonly>
          </div>            
        </div>
        <div class="form-group row">
            <div class="offset-md-2 col-md-9 ">
              <input type="text" name="shipping_address_2" id="shipping_address_2"
                     value="{{$customerInfo->userInfo->shippingAddress->address_2}}"
                     class="form-control  @error('shipping_address_2') is-invalid @enderror"
                     value="{{ old('shipping_address_2') }}" readonly>
            </div>            
        </div>
        <div class="form-group row ">
            <div class="offset-md-2 col-md-9 ">
              <input type="text" name="shipping_address_3" id="shipping_address_3"
                     value="{{$customerInfo->userInfo->shippingAddress->address_3}}"
                     class="form-control  @error('shipping_address_3') is-invalid @enderror"
                     value="{{ old('shipping_address_3') }}" readonly>
            </div>            
        </div>
        <div class="form-group row ">
            <label for="shipping_city" class="col-md-2 col-form-label">Shipping City</label>
            <div class="col-md-4 m-0">
              <input type="text" name="shipping_city" id="shipping_city"
                     value="{{$customerInfo->userInfo->shippingAddress->city}}"
                     class="form-control  @error('shipping_city') is-invalid @enderror"
                     value="{{ old('shipping_city') }}" readonly>
            </div>         
        </div>
        <div class="form-group row ">
          <label for="shipping_postcode" class="col-md-2 col-form-label">Shipping Postcode</label>
          <div class="col-md-4 m-0">
            <input type="text" name="shipping_postcode" id="shipping_postcode"
                   value="{{$customerInfo->userInfo->shippingAddress->postcode}}"
                   class="form-control  @error('shipping_postcode') is-invalid @enderror"
                   value="{{ old('shipping_postcode') }}" readonly>
          </div>         
        </div>
        <div class="form-group row ">
            <label for="shipping_state" class="col-md-2 col-form-label">Shipping State</label>
            <div class="col-md-9 m-0">
                <input type="text" name="shipping_state" id="shipping_state"
                        value="{{$customerInfo->userInfo->shippingAddress->state->name}}"
                        class="form-control @error('shipping_state') is-invalid @enderror"
                        value="{{ old('shipping_state') }}" readonly>
            </div>
        </div>  
        <div class="form-group row ">
          <label for="mobile_phone" class="col-md-2 col-form-label">Mobile Phone</label>
          <div class="col-md-4 m-0">
            <input type="text" name="mobile_phone" id="mobile_phone"
                    value="{{$customerInfo->userInfo->mobileContact->contact_num}}"
                    class="form-control  @error('mobile_phone') is-invalid @enderror"
                    value="{{ old('mobile_phone') }}" readonly>
          </div>     
        </div>
        <div class="form-group row ">
          <label for="email" class="col-md-2 col-form-label">Email Address</label>
          <div class="col-md-4 m-0">
            <input type="text" name="email" id="email" value="{{$customerInfo->email}}"
                   class="form-control  @error('email') is-invalid @enderror"
                   value="{{ old('email') }}" readonly>
          </div>              
        </div>
        <div class="form-group row ">
          <label for="id_information" class="col-md-2 col-form-label">ID Information</label>
          <div class="col-md-9 m-0">
            <input type="text" name="id_information" id="id_information" value="WIP"
                    class="form-control  @error('id_information') is-invalid @enderror"
                    value="{{ old('id_information')}}" readonly>
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
</style>

@endsection
