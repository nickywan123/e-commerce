@extends('layouts.management.main-customer')

@section('content')

<form action="{{route('profile.update',[$customerInfo->id])}}" method="POST">
  <input type="hidden" name="_method" value="PATCH">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="row">
     <div class="col-12 offset-md-1 col-md-10">
       <div class="row">
         <div class="col-4">
          <i class="fa fa-user mr-1"></i> <a href="{{route('shop.dashboard.customer.profile.edit')}}" class="text-color-header " style="border-bottom: 2px solid rgb(250, 172, 24);"><strong style="color:black; ">Edit My Profile</strong></a>
         </div>
         @hasrole('dealer')
         <div class="col-4">
          <i class="fa fa-address-book-o mr-1"></i> <a href="{{route('shop.dashboard.dealer.profile.edit')}}" class="text-color-header "  ><strong style="color:black; ">Edit Agent Profile</strong></a>
         </div>
         @endhasrole
         @hasrole('panel')
         <div class="col-4">
          <i class="fa fa-building-o mr-1"></i><a href="{{route('management.company.profile.edit')}}" class="text-color-header " ><strong style="color:black; "> Edit Panel Profile</strong></a>
         </div>
         @endhasrole          
       </div><hr>
       <div class="card shadow-sm">
         <div class="card-body">
           <div class="form-group row ">
                <div class="col-md-4 m-0">
                  <h4>Profile Information</h4>
                </div>
           </div><hr>  
           <div class="form-group row ">
             <label for="avatar" class=" col-12 col-md-2 col-form-label">Avatar:</label>
             <div class="col-md-1 m-0">
                <img src="{{asset('/storage/avatar/default-avatar.jpg')}}"
                     style="max-width:80px; max-height:80px;" alt="avatar">
             </div>
           </div>
           <div class="form-group row ">
             <label for="account_id" class="col-md-2 col-form-label">Bujishu ID</label>
             <div class="col-md-9 m-0">
                <input type="text" name="account_id" value="{{$customerInfo->userInfo->account_id}}"
                      class="form-control @error('account_id') is-invalid @enderror"
                      value="{{ old('account_id') }}" readonly>
             </div>
                      @error('account_id')
                      <small class="form-text text-danger">{{ $message }}</small>
                      @enderror
            </div>
            <div class="form-group row ">
              <label for="full_name" class="col-md-2 col-form-label">Full Name(NRIC)</label>
              <div class="col-md-3 m-0">
                <input type="text" name="full_name" value="{{$customerInfo->userInfo->full_name}}"
                       class="form-control @error('full_name') is-invalid @enderror"
                       value="{{ old('full_name') }}">
              </div>
                       @error('full_name')
                       <small class="form-text text-danger">{{ $message }}</small>
                       @enderror
            </div>
            <div class="form-group row ">
              <label for="billing_address_1" class="col-md-2 col-form-label">Billing Address </label>
              <div class="col-md-9 m-0">
                 <input type="text" name="billing_address_1"
                        value="{{$customerInfo->userInfo->mailingAddress->address_1}}"
                        class="form-control @error('billing_address_1') is-invalid @enderror"
                        value="{{ old('billing_address_1') }}">
              </div>
                        @error('billing_address_1')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
              <div class=" offset-md-2 col-md-9">
                 <input type="text" name="billing_address_2"
                        value="{{$customerInfo->userInfo->mailingAddress->address_2}}"
                        class="form-control @error('billing_address_2') is-invalid @enderror">
              </div>
                        @error('billing_address_2')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
              <div class="offset-md-2 col-md-9">
                 <input type="text" name="billing_address_3"
                        value="{{$customerInfo->userInfo->mailingAddress->address_3}}"
                        class="form-control @error('billing_address_3') is-invalid @enderror">
              </div>
                        @error('billing_address_3')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
                <label for="billing_city" class="col-md-2 col-form-label">Billing City</label>
                <div class="col-md-4 m-0">
                 <input type="text" name="billing_city"
                        value="{{$customerInfo->userInfo->mailingAddress->city}}"
                        class="form-control @error('billing_city') is-invalid @enderror"
                        value="{{ old('billing_city') }}">
                </div>
                        @error('billing_city')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
              <label for="billing_postcode" class="col-md-2 col-form-label">Billing Postcode</label>
              <div class="col-md-4 m-0">
                 <input type="text" name="billing_postcode"
                        value="{{$customerInfo->userInfo->mailingAddress->postcode}}"
                        class="form-control @error('billing_postcode') is-invalid @enderror"
                        value="{{ old('billing_postcode') }}">
              </div>
                        @error('billing_postcode')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row">
                <label for="billing_state" class="col-md-2 col-form-label">Billing State</label>
                <div class="col-md-9 m-0">
                  <select name="billing_state" id="billing_state" class="form-control text-capitalize">
                    @foreach($states as $state)
                     <option value="{{ $state->id}}" {{ ($state->id == $customerInfo->userInfo->mailingAddress->state_id)? 'selected' : '' }}>{{$state->name}}</option>
                    @endforeach
                  </select>
                </div>
                        @error('billing_state')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
              <label for="company_address" class="col-md-2 col-form-label">Shipping Address </label>
              <div class="col-md-9 m-0">
                <input type="text" name="shipping_address_1"
                       value="{{$customerInfo->userInfo->shippingAddress->address_1}}"
                       class="form-control @error('shipping_address_1') is-invalid @enderror"
                       value="{{ old('shipping_address_1') }}">
              </div>
                      @error('shipping_address_1')
                      <small class="form-text text-danger">{{ $message }}</small>
                      @enderror
            </div>
            <div class="form-group row ">
              <div class="offset-md-2 col-md-9">
                <input type="text" name="shipping_address_2"
                       value="{{$customerInfo->userInfo->shippingAddress->address_2}}"
                       class="form-control @error('shipping_address_2') is-invalid @enderror"
                       value="{{ old('shipping_address_2') }}">
              </div>
                       @error('shipping_address_2')
                       <small class="form-text text-danger">{{ $message }}</small>
                       @enderror
            </div>
            <div class="form-group row ">
              <div class="offset-md-2 col-md-9">
                <input type="text" name="shipping_address_3"
                       value="{{$customerInfo->userInfo->shippingAddress->address_3}}"
                       class="form-control @error('shipping_address_3') is-invalid @enderror"
                       value="{{ old('shipping_address_3') }}">
              </div>
                       @error('shipping_address_3')
                       <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
                <label for="shipping_city" class="col-md-2 col-form-label">Shipping City </label>
                <div class="col-md-4 m-0">
                   <input type="text" name="shipping_city"
                          value="{{$customerInfo->userInfo->shippingAddress->city}}"
                          class="form-control @error('shipping_city') is-invalid @enderror"
                          value="{{ old('shipping_city') }}">
                </div>    
                          @error('shipping_city')
                          <small class="form-text text-danger">{{ $message }}</small>
                          @enderror
            </div>
            <div class="form-group row ">
              <label for="company_address" class="col-md-2 col-form-label">Shipping Postcode</label>
              <div class="col-md-4 m-0">
              <input type="text" name="shipping_postcode"
                     value="{{$customerInfo->userInfo->shippingAddress->postcode}}"
                     class="form-control @error('shipping_postcode') is-invalid @enderror"
                     value="{{ old('shipping_postcode') }}">
              </div>                        
                     @error('shipping_postcode')
                     <small class="form-text text-danger">{{ $message }}</small>
                     @enderror
            </div>
            <div class="form-group row ">
                <label for="shipping_state" class="col-md-2 col-form-label">Shipping State</label>
                <div class="col-md-9 m-0">
                  <select name="shipping_state" id="shipping_state" class="form-control text-capitalize">
                    @foreach($states as $state)
                     <option value="{{ $state->id}}" {{ ($state->id == $customerInfo->userInfo->shippingAddress->state_id)? 'selected' : '' }}>{{$state->name}}</option>
                    @endforeach
                  </select>
                </div>
                        @error('shipping_state')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row ">
              <label for="mobile_phone" class="col-md-2 col-form-label">Mobile Phone</label>
              <div class="col-md-4 m-0">
                 <input type="text" name="mobile_phone"
                        value="{{$customerInfo->userInfo->mobileContact->contact_num}}"
                        class="form-control @error('mobile_phone') is-invalid @enderror"
                        value="{{ old('mobile_phone') }}">
              </div>       
                        @error('mobile_phone')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
            </div>
            <div class="form-group row">
              <label for="email" class="col-md-2 col-form-label">Email Address</label>
              <div class="col-md-4 m-0">
                <input type="text" name="email" value="{{$customerInfo->email}}"
                       class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" readonly>
              </div>
                       @error('email')
                       <small class="form-text text-danger">{{ $message }}</small>
                       @enderror
            </div>
            <div class="form-group row ">
              <label for="id_information" class="col-md-2 col-form-label">ID Information</label>
              <div class="col-md-9 m-0">
                <input type="text" name="id_information" value="WIP"
                       class="form-control @error('id_information') is-invalid @enderror" readonly>
              </div>
                       @error('id_information')
                       <small class="form-text text-danger">{{ $message }}</small>
                       @enderror
            </div>
            <div class="form-group row">
                <div class="offset-5 offset-md-7 col-md-5">
                  <input type="submit" class="btn grad2 bjsh-btn-gradient btn-small-screen margin-left-md margin-left-sm margin-left-xs margin-left-tablet margin-left-phone"
                         value="Update Profile">
                </div>
            </div>
        </div>
       </div>
     </div>
   </div>  
</form>



<style>

.text-color-header{
    color:black;
    font-size: 12pt;
}


@media(min-width:300px) and (max-width:699px){
  .margin-left-phone{
    margin-left: 30px;
  }
}

@media(min-width:700px) and (max-width:999px){
  .margin-left-tablet{
    margin-left: 30px;
  }
}

@media(min-width:1000px) and (max-width:1199px){
  .margin-left-xs{
    margin-left: 70px;
  }
}

@media(min-width:1200px) and (max-width:1599px){
  .margin-left-sm{
    margin-left: 185px;
  }
}

@media(min-width:1600px) and (max-width:2000px){
  .margin-left-md{
    margin-left: 330px;
  }
}

</style>

@endsection
