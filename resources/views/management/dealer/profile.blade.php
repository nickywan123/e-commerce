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
    

    {{---Desktop Layout----}}

    <div class="hidden-sm">
        
        <div class="row">
            <div class="offset-1 col-12 col-md-10">
                <div class="row">
                    <div class="col-4">
                     <i class="fa fa-user mr-1"></i> <a href="{{route('shop.dashboard.customer.profile')}}" class="text-color-header"
                     ><strong>User Profile</strong></a>
                    </div>
                    @hasrole('dealer')
                    <div class="col-4">
                     <i class="fa fa-address-book-o mr-1"></i> <a href="{{route('shop.dashboard.dealer.profile')}}" class="text-color-header" style="border-bottom: 2px solid rgb(250, 172, 24);" ><strong>Dealer Information</strong></a>
                    </div>
                    @endhasrole
                    @hasrole('panel')
                    <div class="col-4">
                     <i class="fa fa-building-o mr-1"></i><a href="{{route('management.company.profile')}}" class="text-color-header" ><strong>Panel: Company Information</strong></a>
                    </div>
                    @endhasrole          
                </div>
                <hr>
                <div class="card shadow-sm">
                    <div class="card-body">

                  
                    <div class="form-group row ">
                       <div class="col-md-4">
                        <h4>Dealer Information</h4>
                       </div>
                    </div>
                    <hr>


                    <div class="form-group row ">
                         <label for="user_id" class="col-md-2 col-form-label">Dealer ID</label>
                         <div class="col-md-4">
                          <input type="text" name="user_id"
                            value="{{$dealerProfile->account_id}}" id="user_id"
                            class="form-control @error('user_id') is-invalid @enderror"
                            value="{{ old('user_id') }}" readonly>
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
                        </div>
                        <br>


                        <div class="form-group row ">
                            <div class="col-md-4">
                             <h4>Employment Details</h4>
                            </div>
                        </div>
                        <hr>
                       
                        <div class="form-group row ">
                            <label for="dealer_company_name" class="col-md-2 col-form-label">Company Name</label>
                            <div class="col-md-9">
                                <input type="text" name="dealer_company_name" id="dealer_company_name"
                                    value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_name : '' }}"
                                    class="form-control @error('dealer_company_name') is-invalid @enderror"
                                    value="{{ old('dealer_company_name') }}" readonly>
                            </div>
                            <div class="col-md-1 col-form-label">
                                <a href="{{route('shop.dashboard.dealer.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a> 
                            </div>

                           
                        </div>
                     
                        <div class="form-group row ">
                            <label for="dealer_company_address" class="col-md-2 col-form-label">Company Address</label>
                            <div class="col-md-9">
                                <input type="text" name="dealer_company_address" id="dealer_company_address"
                                    value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_address_1 : '' }} {{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_address_2 : '' }} {{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_address_3 : '' }} {{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_city : '' }} {{($dealerProfile->employmentAddress) ? ',Malaysia' : '' }}"
                                    class="form-control @error('dealer_company_address') is-invalid @enderror"
                                    value="{{ old('dealer_company_address') }}" readonly>
                            </div>
                            <div class="col-md-1 col-form-label">
                                <a href="{{route('shop.dashboard.dealer.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a> 
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="dealer_company_postcode" class="col-md-2 col-form-label">Company Postcode</label>
                            <div class="col-md-9">
                                <input type="text" name="dealer_company_postcode" id="dealer_company_postcode"
                                    value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_postcode : ''}}"
                                    class="form-control @error('dealer_company_postcode') is-invalid @enderror"
                                    value="{{ old('dealer_company_postcode') }}" readonly>
                            </div>
                            <div class="col-md-1 col-form-label">
                                <a href="{{route('shop.dashboard.dealer.profile.edit')}}"><i class="fa fa-pencil bujishu-gold"></i></a> 
                            </div>
                        </div>
                        <br>
                                
                    

                        <div class="form-group row ">
                            <div class="col-md-4">
                             <h4>Spouse Information</h4>
                            </div>
                        </div>
                        <hr>

                        <div class="form-group row ">
                            <label for="spouse_name" class="col-md-2 col-form-label">Spouse Name</label>
                            <div class="col-md-9">
                                <input type="text" name="spouse_name" id="spouse_name"
                                    value="{{ ($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_name : '' }}"
                                    class="form-control @error('spouse_name') is-invalid @enderror"
                                    value="{{ old('spouse_name') }}" readonly>
                            </div>
                          
                        </div>

                        <div class="form-group row ">
                            <label for="spouse_occupation" class="col-md-2 col-form-label">Spouse Occupation</label>
                            <div class="col-md-9">
                                <input type="text" name="spouse_occupation" id="spouse_occupation"
                                    value="{{ ($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_occupation : '' }}"
                                    class="form-control @error('spouse_occupation') is-invalid @enderror"
                                    value="{{ old('spouse_occupation') }}" readonly>
                            </div>
                          
                        </div>

                        <div class="form-group row ">
                            <label for="spouse_contact" class="col-md-2 col-form-label">Spouse Contact</label>
                            <div class="col-md-9">
                                <input type="text" name="spouse_contact" id="spouse_contact"
                                    value="{{ ($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_contact_mobile : '' }}"
                                    class="form-control @error('spouse_contact') is-invalid @enderror"
                                    value="{{ old('spouse_contact') }}" readonly>
                            </div>
                           
                        </div>

                        <div class="form-group row ">
                            <label for="spouse_email" class="col-md-2 col-form-label">Spouse Email</label>
                            <div class="col-md-9">
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
</div>


{{--Mobile Layout--}}


 <div class="mt-4 hidden-md">
    <div class="row">
        <div class="col-4">
         <i class="fa fa-user mr-1"></i> <a href="{{route('shop.dashboard.customer.profile')}}" class="text-color-header "  
         ><strong>User Profile</strong></a>
        </div>
        @hasrole('dealer')
        <div class="col-4">
         <i class="fa fa-address-book-o mr-1"></i> <a href="{{route('shop.dashboard.dealer.profile')}}" class="text-color-header " style="border-bottom: 2px solid rgb(250, 172, 24);" ><strong>Dealer Information</strong></a>
        </div>
        @endhasrole
        @hasrole('panel')
        <div class="col-4">
         <i class="fa fa-building-o mr-1"></i><a href="{{route('management.company.profile')}}" class="text-color-header " ><strong>Panel: Company Information</strong></a>
        </div>
        @endhasrole          
    </div>

    <div class="row">
        <div class="col-12 col-md-10">
            <div class="card shadow-sm">
                <div class="card-body">



                    <div class="form-group row ">
                        <label for="dealer_id" class="col-md-2 col-form-label">Dealer ID</label>
                        <div class="col-md-4">
                            <input type="text" name="dealer_id" id="dealer_id"
                                value="{{$dealerProfile->account_id}}"
                                class="form-control @error('dealer_id') is-invalid @enderror"
                                value="{{ old('dealer_id') }}" readonly>
                        </div>
                     
                    </div>

                    <div class="form-group row ">
                        <label for="dealer_gender" class="col-md-2 col-form-label">Gender</label>
                        <div class="col-md-4">
                            <input type="text" name="dealer_gender" gender="dealer_gender"
                            <input type="text" name="gender" id="gender"
                            @if($dealerProfile->gender_id===1)
                             value="Male"
                             @else
                             value="Female"
                             @endif
                                class="form-control @error('dealer_gender') is-invalgender @enderror"
                                value="{{ old('dealer_gender') }}" readonly>
                        </div>
                     
                    </div>

                    
                    <div class="form-group row ">
                        <div class="col-md-4">
                         <h4>Employment Details</h4>
                        </div>
                    </div>
                    <hr>


                    <div class="form-group row ">
                        <label for="dealer_company_name" class="col-md-2 col-form-label">Company Name</label>
                        <div class="col-md-4">
                            <input type="text" name="dealer_company_name" id="dealer_company_name"
                                value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_name : '' }}"
                                class="form-control @error('dealer_company_name') is-invalid @enderror"
                                value="{{ old('dealer_company_name') }}" readonly>
                        </div>
                     
                    </div>

                    <div class="form-group row ">
                        <label for="dealer_company_address" class="col-md-2 col-form-label">Company Address</label>
                        <div class="col-md-9">
                            <input type="text" name="dealer_company_address" id="dealer_company_address"
                                value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_address_1 : '' }} "
                                class="form-control @error('dealer_company_address') is-invalid @enderror"
                                value="{{ old('dealer_company_address') }}" readonly>

                        </div>
                                          
                    </div>

                    <div class="form-group row ">
                     
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_address_2 : '' }}"
                                class="form-control @error('dealer_company_address') is-invalid @enderror"
                                value="{{ old('dealer_company_address') }}" readonly>

                        </div>
                                          
                    </div>

                    <div class="form-group row ">
                       
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_address_3 : '' }}"
                                class="form-control @error('dealer_company_address') is-invalid @enderror"
                                value="{{ old('dealer_company_address') }}" readonly>

                        </div>
                                          
                    </div>

                    <div class="form-group row">
                        
                        <div class="col-md-9">
                            <input type="text" 
                                value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_postcode : '' }} {{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_city : '' }} {{($dealerProfile->employmentAddress) ? ',Malaysia' : '' }}"
                                class="form-control @error('dealer_company_address') is-invalid @enderror"
                                value="{{ old('dealer_company_address') }}" readonly>

                        </div>
                                          
                    </div>



                    <div class="form-group row ">
                        <label for="company_postcode" class="col-md-2 col-form-label"> Company Postcode</label>
                        <div class="col-md-4">
                            <input type="text" name="company_postcode"
                                value="{{($dealerProfile->employmentAddress) ? $dealerProfile->employmentAddress->company_postcode : '' }}" id="postcode"
                                class="form-control @error('company_postcode') is-invalid @enderror"
                                value="{{ old('company_postcode') }}" readonly>
                        </div>             
                    </div>

                    <div class="form-group row ">
                        <div class="col-md-4">
                         <h4>Spouse Information</h4>
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row ">
                        <label for="spouse_name" class="col-md-2 col-form-label">Spouse Name</label>
                        <div class="col-md-9">
                            <input type="text" name="spouse_name" id="spouse_name"
                                value="{{($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_name : '' }}"
                                class="form-control @error('spouse_name') is-invalid @enderror"
                                value="{{ old('spouse_name') }}" readonly >
                        </div>
                       
                        @error('spouse_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="spouse_occupation" class="col-md-2 col-form-label">Spouse Occupation</label>
                        <div class="col-md-9">
                            <input type="text" name="spouse_occupation" id="spouse_occupation"
                                value="{{($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_occupation : '' }}"
                                class="form-control @error('spouse_occupation') is-invalid @enderror"
                                value="{{ old('spouse_occupation') }}" readonly >
                        </div>
                      
                        @error('spouse_occupation')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="spouse_contact" class="col-md-2 col-form-label">Spouse Contact</label>
                        <div class="col-md-9">
                            <input type="text" name="spouse_contact" id="spouse_contact"
                                value="{{($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_contact_mobile : '' }}"
                                class="form-control @error('spouse_contact') is-invalid @enderror"
                                value="{{ old('spouse_contact') }}" readonly >
                        </div>
                       
                        @error('spouse_contact')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="spouse_email" class="col-md-2 col-form-label">Spouse Email</label>
                        <div class="col-md-9">
                            <input type="text" name="spouse_email" id="spouse_email"
                                value="{{($dealerProfile->dealerSpouse) ? $dealerProfile->dealerSpouse->spouse_email : '' }}"
                                class="form-control @error('spouse_email') is-invalid @enderror"
                                value="{{ old('spouse_email') }}" readonly>
                        </div>
                        @error('spouse_email')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
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
