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
  <div class="offset-md-1 col-12 col-md-10">
    <div class="row">
        <div class="col-4">
         <i class="fa fa-user mr-1"></i> <a href="{{route('shop.dashboard.customer.profile')}}" class="text-color-header"><strong>My Profile</strong></a>
        </div>
        @hasrole('dealer')
        <div class="col-4">
          <i class="fa fa-address-book-o mr-1"></i> <a href="{{route('shop.dashboard.dealer.profile')}}" class="text-color-header" style="border-bottom: 2px solid rgb(250, 172, 24);" ><strong>Agent Profile</strong></a>
        </div>
        @endhasrole
        @hasrole('panel')
        <div class="col-4">
          <i class="fa fa-building-o mr-1"></i><a href="{{route('management.company.profile')}}" class="text-color-header" ><strong>Panel Profile</strong></a>
        </div>
        @endhasrole          
    </div><hr>
    <div class="card shadow-sm">
      <div class="card-body">   
        <div class="form-group row ">
         <div class="col-md-12 m-0" style="display: flex;">
            <h4>Agent Information</h4>
            <a style="margin-left:1rem;" href="{{route('shop.dashboard.dealer.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a> 
         </div>
        </div><hr>
        <div class="form-group row ">
         <label for="user_id" class="col-md-2 col-form-label">Agent ID</label>
         <div class="col-md-4 m-0">
          <input type="text" name="user_id"
                 value="{{$dealerProfile->account_id}}" id="user_id"
                 class="form-control @error('user_id') is-invalid @enderror"
                 value="{{ old('user_id') }}" readonly>
         </div>                      
        </div>
        <div class="form-group row ">
         <label for="gender" class="col-md-2 col-form-label">Gender</label>
         <div class="col-md-9 m-0">
          <input type="text" name="gender" id="gender"
                @if($dealerProfile->gender_id===1)
                value="Male"
                @else
                value="Female"
                @endif
                class="form-control @error('gender') is-invalid @enderror"
                value="{{ old('gender') }}" readonly>
         </div>  
        </div>
        <div class="form-group row">
          <label for="marital_id" class="col-md-2 col-form-label">Marital Status</label>
          <div class="col-md-9 ">
           <input type="text" name="marital_id" id="marital_id"
                  @if($dealerProfile->marital_id===1)
                  value="Single"
                  @elseif($dealerProfile->marital_id===2)
                  value="Married"
                  @else
                  value="Divorced"    
                  @endif
                  class="form-control @error('marital_id') is-invalid @enderror"
                  value="{{ old('marital_id') }}" readonly>
          </div> 
        </div>
        <div class="form-group row ">
          <div class="col-md-12 m-0 mt-md-2">
            <h4>Employment Details</h4>
          </div>
        </div><hr>       
        <div class="form-group row ">
          <label for="dealer_company_name" class="col-md-2 col-form-label">Company Name</label>
          <div class="col-md-9 m-0">
            <input type="text" name="dealer_company_name" id="dealer_company_name"
                    value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_name : '' }}"
                    class="form-control @error('dealer_company_name') is-invalid @enderror"
                    value="{{ old('dealer_company_name') }}" readonly>
          </div>   
        </div>
        <div class="form-group row ">
          <label for="dealer_company_address_1" class="col-md-2 col-form-label">Company Address</label>
          <div class="col-md-9 m-0">
            <input type="text" name="dealer_company_address_1" id="dealer_company_address_1"
                    value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_address_1 : '' }}"
                    class="form-control @error('dealer_company_address_1') is-invalid @enderror"
                    value="{{ old('dealer_company_address_1') }}" readonly>
          </div>
        </div>
        <div class="form-group row ">                         
          <div class="offset-md-2 col-md-9 ">
            <input type="text" name="dealer_company_address_2" id="dealer_company_address_2"
                    value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_address_2 : '' }}"
                    class="form-control @error('dealer_company_address_2') is-invalid @enderror"
                    value="{{ old('dealer_company_address_2') }}" readonly >
          </div> 
        </div>
        <div class="form-group row ">                         
          <div class="offset-md-2 col-md-9 ">
            <input type="text" name="dealer_company_address_3" id="dealer_company_address_3"
                    value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_address_3 : '' }}"
                    class="form-control @error('dealer_company_address_3') is-invalid @enderror"
                    value="{{ old('dealer_company_address_3') }}" readonly >
          </div> 
        </div>
        <div class="form-group row ">
            <label for="dealer_company_city" class="col-md-2 col-form-label">Company City</label>
            <div class="col-md-9 m-0">
                <input type="text" name="dealer_company_city" id="dealer_company_city"
                        value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_city : '' }}"
                        class="form-control @error('dealer_company_city') is-invalid @enderror"
                        value="{{ old('dealer_company_city') }}" readonly>
            </div>   
        </div>
        <div class="form-group row ">
            <label for="dealer_company_postcode" class="col-md-2 col-form-label">Company Postcode</label>
            <div class="col-md-9 m-0">
                <input type="text" name="dealer_company_postcode" id="dealer_company_postcode"
                        value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_postcode : ''}}"
                        class="form-control @error('dealer_company_postcode') is-invalid @enderror"
                        value="{{ old('dealer_company_postcode') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <label for="dealer_company_state" class="col-md-2 col-form-label">Company State</label>
            <div class="col-md-9 ">
                <input type="text" name="dealer_company_state" id="dealer_company_state"
                        value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->state->name : ''}}"
                        class="form-control @error('dealer_company_state') is-invalid @enderror"
                        value="{{ old('dealer_company_state') }}" readonly>
            </div>
        </div>                                     
        <div class="form-group row ">
            <div class="col-md-12 m-0 mt-md-2">
                <h4>Spouse Information</h4>
            </div>
        </div><hr>
        <div class="form-group row ">
            <label for="spouse_name" class="col-md-2 col-form-label">Spouse Name</label>
            <div class="col-md-9 m-0">
                <input type="text" name="spouse_name" id="spouse_name"
                        value="{{ ($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_name : '' }}"
                        class="form-control @error('spouse_name') is-invalid @enderror"
                        value="{{ old('spouse_name') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <label for="spouse_occupation" class="col-md-2 col-form-label">Spouse Occupation</label>
            <div class="col-md-9 m-0">
                <input type="text" name="spouse_occupation" id="spouse_occupation"
                        value="{{ ($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_occupation : '' }}"
                        class="form-control @error('spouse_occupation') is-invalid @enderror"
                        value="{{ old('spouse_occupation') }}" readonly>
            </div>
        </div>
        <div class="form-group row ">
            <label for="spouse_contact" class="col-md-2 col-form-label">Spouse Contact</label>
            <div class="col-md-9 m-0">
                <input type="text" name="spouse_contact" id="spouse_contact"
                       value="{{ ($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_contact_mobile : '' }}"
                       class="form-control @error('spouse_contact') is-invalid @enderror"
                       value="{{ old('spouse_contact') }}" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="spouse_email" class="col-md-2 col-form-label">Spouse Email</label>
            <div class="col-md-9 m-0">
                <input type="text" name="spouse_email" id="spouse_email"
                       value="{{ ($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_email : '' }}"
                       class="form-control @error('spouse_email') is-invalid @enderror"
                       value="{{ old('spouse_email') }}" readonly>
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
      

</style>

@endsection
