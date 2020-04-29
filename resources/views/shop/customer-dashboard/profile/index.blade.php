@extends('layouts.management.main-customer')



@section('content')


<br>

{{--Template for desktop screen--}}
<div class="mt-3 mt-md-0 hidden-sm">
   


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



    <div class="row ">
        <div class="col-12 offset-1 col-md-10">
            <h4 class="text-capitalize text-dark text-font-family">My Profile</h4>
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="form-group row ">
                        <label for="avatar" class="col-12 col-md-2 col-form-label">Avatar</label>
                        <div class="col-4 col-md-1">
                            <img src="{{asset('/storage/avatar/default-avatar.jpg')}}"
                                style="max-width:80px; max-height:80px;" alt="avatar">
                        </div>
                        <div class="col-1 col-md-1 mt-3 col-form-label-md">
                            <a href="{{route('shop.dashboard.customer.profile.edit')}}"><i
                                    class="fa fa-pencil bujishu-gold"></i></a>
                        </div>


                        @error('company_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="company_name" class="col-12 col-md-2 col-form-label">Bujishu ID</label>
                        <div class="col-12 col-md-9">
                            <input type="text" name="company_name" id="company_name"
                                value="{{$customerInfo->userInfo->account_id}}"
                                class="form-control @error('company_name') is-invalid @enderror"
                                value="{{ old('company_name') }}" readonly>
                        </div>

                        @error('company_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>


                    <div class="form-group row ">
                        <label for="company_name" class="col-12 col-md-2 col-form-label">Full Name(NRIC)</label>
                        <div class="col-11 col-md-3">
                            <input type="text" name="company_name" id="company_name"
                                value="{{$customerInfo->userInfo->full_name}}"
                                class="form-control @error('company_name') is-invalid @enderror"
                                value="{{ old('company_name') }}" readonly>
                        </div>
                        <div class="col-1 col-md-1 col-form-label">
                            <a href="{{route('shop.dashboard.customer.profile.edit')}}"><i
                                    class="fa fa-pencil bujishu-gold"></i></a>
                        </div>


                        @error('company_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="company_address" class="col-md-2 col-form-label">Billing Address</label>
                        <div class="col-md-9">
                            <input type="text" name="company_name" id="company_name"
                                value="{{$customerInfo->userInfo->mailingAddress->address_1}},{{$customerInfo->userInfo->mailingAddress->address_2}},{{$customerInfo->userInfo->mailingAddress->address_3}},{{$customerInfo->userInfo->mailingAddress->postcode}},{{$customerInfo->userInfo->mailingAddress->city}},Malaysia"
                                class="form-control @error('company_name') is-invalid @enderror"
                                value="{{ old('company_name') }}" readonly>
                        </div>
                        <div class="col-md-1 col-form-label">
                            <a href="{{route('shop.dashboard.customer.profile.edit')}}"><i
                                    class="fa fa-pencil bujishu-gold"></i></a>
                        </div>


                        @error('company_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group row ">
                        <label for="company_address" class="col-md-2 col-form-label">Billing Postcode</label>
                        <div class="col-md-4">
                            <input type="text" name="company_name" id="company_name"
                                value="{{$customerInfo->userInfo->mailingAddress->postcode}}"
                                class="form-control @error('company_name') is-invalid @enderror"
                                value="{{ old('company_name') }}" readonly>
                        </div>


                        @error('company_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>




                    <div class="form-group row ">
                        <label for="company_address" class="col-md-2 col-form-label">Shipping Address</label>
                        <div class="col-md-9">
                            <input type="text" name="company_name" id="company_name"
                                value="{{$customerInfo->userInfo->shippingAddress->address_1}},{{$customerInfo->userInfo->shippingAddress->address_2}},{{$customerInfo->userInfo->shippingAddress->address_3}},{{$customerInfo->userInfo->shippingAddress->postcode}},{{$customerInfo->userInfo->shippingAddress->city}},Malaysia"
                                class="form-control @error('company_name') is-invalid @enderror"
                                value="{{ old('company_name') }}" readonly>
                        </div>
                        <div class="col-md-1 col-form-label">
                            <a href="{{route('shop.dashboard.customer.profile.edit')}}"><i
                                    class="fa fa-pencil bujishu-gold"></i></a>
                        </div>


                        @error('company_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group row ">
                        <label for="company_address" class="col-md-2 col-form-label">Shipping Postcode</label>
                        <div class="col-md-4">
                            <input type="text" name="company_name" id="company_name"
                                value="{{$customerInfo->userInfo->shippingAddress->postcode}}"
                                class="form-control @error('company_name') is-invalid @enderror"
                                value="{{ old('company_name') }}" readonly>
                        </div>


                        @error('company_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>



                    <div class="form-group row ">
                        <label for="company_name" class="col-md-2 col-form-label">Mobile Phone</label>
                        <div class="col-md-3">
                            <input type="text" name="company_name" id="company_name"
                                value="{{$customerInfo->userInfo->mobileContact->contact_num}}"
                                class="form-control @error('company_name') is-invalid @enderror"
                                value="{{ old('company_name') }}" readonly>
                        </div>
                        <div class="col-md-1 col-form-label">
                            <a href="{{route('shop.dashboard.customer.profile.edit')}}"><i
                                    class="fa fa-pencil bujishu-gold"></i></a>
                        </div>



                        @error('company_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>






                    <div class="form-group row ">

                        <label for="company_name" class="col-md-2 col-form-label">Email Address</label>
                        <div class="col-md-4">
                            <input type="text" name="company_name" id="company_name" value="{{$customerInfo->email}}"
                                class="form-control @error('company_name') is-invalid @enderror"
                                value="{{ old('company_name') }}" readonly>
                        </div>

                        @error('company_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group row ">
                        <label for="company_address" class="col-md-2 col-form-label">ID Information</label>
                        <div class="col-md-9">
                            <input type="text" name="company_name" id="company_name" value="WIP"
                                class="form-control @error('company_name') is-invalid @enderror"
                                value="{{ old('company_name') }}" readonly>
                        </div>


                        @error('company_name')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </div>



                </div>
            </div>
        </div>


    </div>

</div>






{{--Mobile Layout--}}
<div class="mt-3 mt-md-0 hidden-md">
    <h4 class="text-capitalize text-dark text-font-family">My Profile</h4>


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



    <div class="row ">
        <div class="col-12 col-md-10">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="form-group row ">
                        <label for="avatar" class="col-12 col-md-2 col-form-label text-font-family">Avatar</label>
                        <div class="col-4 col-md-1">
                            <img src="{{asset('/storage/avatar/default-avatar.jpg')}}"
                                style="max-width:80px; max-height:80px;" alt="avatar">
                        </div>
                        {{-- <div class="col-1 col-md-1 mt-3 col-form-label-md">
                                <a href="{{route('shop.dashboard.customer.profile.edit')}}"><i
                            class="fa fa-pencil bujishu-gold"></i></a>
                    </div> --}}


                </div>

                <div class="form-group row ">
                    <label for="company_name" class="col-12 col-md-2 col-form-label text-font-family">Bujishu ID</label>
                    <div class="col-12 col-md-9">
                        <input type="text" name="company_name" id="company_name"
                            value="{{$customerInfo->userInfo->account_id}}"
                            class="form-control @error('company_name') is-invalid @enderror"
                            value="{{ old('company_name') }}" readonly>
                    </div>

                 
                </div>


                <div class="form-group row ">
                  <label class="col-12 col-md-2 col-form-label text-font-family" for="company_name">Full Name(NRIC)</label>
                  <div class="col-12 col-md-3">
                        <input type="text" name="company_name" id="company_name"
                            value="{{$customerInfo->userInfo->full_name}}"
                            class="form-control @error('company_name') is-invalid @enderror"
                            value="{{ old('company_name') }}" readonly>
                  </div>
                </div>

                <div class="form-group row ">
                    <label for="company_address" class="col-md-2 col-form-label text-font-family">Billing Address</label>
                    <div class="col-md-9">
                        <input type="text" name="company_name" id="company_name"
                            value="{{$customerInfo->userInfo->mailingAddress->address_1}}"
                            class="form-control @error('company_name') is-invalid @enderror"
                            value="{{ old('company_name') }}" readonly>
                    </div>                  
                </div>
                

                <div class="form-group row ">
                  
                    <div class="col-md-9">
                        <input type="text" name="company_name" id="company_name"
                            value="{{$customerInfo->userInfo->mailingAddress->address_2}}"
                            class="form-control @error('company_name') is-invalid @enderror"
                            value="{{ old('company_name') }}" readonly>
                    </div>                  
                </div>

                <div class="form-group row ">   
                    <div class="col-md-9">
                        <input type="text" name="company_name" id="company_name"
                            value="{{$customerInfo->userInfo->mailingAddress->address_3}}"
                            class="form-control @error('company_name') is-invalid @enderror"
                            value="{{ old('company_name') }}" readonly>
                    </div>                  
                </div>

                <div class="form-group row ">
                   
                    <div class="col-md-9">
                        <input type="text" name="company_name" id="company_name"
                            value="{{$customerInfo->userInfo->mailingAddress->postcode}},{{$customerInfo->userInfo->mailingAddress->city}},Malaysia"
                            class="form-control @error('company_name') is-invalid @enderror"
                            value="{{ old('company_name') }}" readonly>
                    </div>                  
                </div>





            <div class="form-group row ">
                <label for="company_address" class="col-md-2 col-form-label text-font-family">Billing Postcode</label>
                <div class="col-md-4">
                    <input type="text" name="company_name" id="company_name"
                        value="{{$customerInfo->userInfo->mailingAddress->postcode}}"
                        class="form-control @error('company_name') is-invalid @enderror"
                        value="{{ old('company_name') }}" readonly>
                </div>


              
            </div>




            <div class="form-group row ">
                <label for="company_address" class="col-md-2 col-form-label text-font-family">Shipping Address</label>
                <div class="col-md-9">
                    <input type="text" name="company_name" id="company_name"
                        value="{{$customerInfo->userInfo->shippingAddress->address_1}}"
                        class="form-control @error('company_name') is-invalid @enderror"
                        value="{{ old('company_name') }}" readonly>
                </div> 
            </div>

            <div class="form-group row ">
               
                <div class="col-md-9">
                    <input type="text" name="company_name" id="company_name"
                        value="{{$customerInfo->userInfo->shippingAddress->address_2}}"
                        class="form-control @error('company_name') is-invalid @enderror"
                        value="{{ old('company_name') }}" readonly>
                </div> 
            </div>

            <div class="form-group row ">
               
                <div class="col-md-9">
                    <input type="text" name="company_name" id="company_name"
                        value="{{$customerInfo->userInfo->shippingAddress->address_3}}"
                        class="form-control @error('company_name') is-invalid @enderror"
                        value="{{ old('company_name') }}" readonly>
                </div> 
            </div>

            <div class="form-group row ">
               
                <div class="col-md-9">
                    <input type="text" name="company_name" id="company_name"
                        value="{{$customerInfo->userInfo->shippingAddress->postcode}},{{$customerInfo->userInfo->shippingAddress->city}},Malaysia"
                        class="form-control @error('company_name') is-invalid @enderror"
                        value="{{ old('company_name') }}" readonly>
                </div> 
            </div>



        <div class="form-group row ">
            <label for="company_address" class="col-md-2 col-form-label text-font-family">Shipping Postcode</label>
            <div class="col-md-4">
                <input type="text" name="company_name" id="company_name"
                    value="{{$customerInfo->userInfo->shippingAddress->postcode}}"
                    class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}"
                    readonly>
            </div>


        </div>



        <div class="form-group row ">
            <label for="company_name" class="col-md-2 col-form-label text-font-family">Mobile Phone</label>
            <div class="col-md-3">
                <input type="text" name="company_name" id="company_name"
                    value="{{$customerInfo->userInfo->mobileContact->contact_num}}"
                    class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}"
                    readonly>
            </div>
            {{-- <div class="col-md-1 col-form-label">
                                <a href="{{route('shop.dashboard.customer.profile.edit')}}"><i
                class="fa fa-pencil bujishu-gold"></i></a>
        </div> --}}



  
    </div>






    <div class="form-group row ">

        <label for="company_name" class="col-md-2 col-form-label text-font-family">Email Address</label>
        <div class="col-md-4">
            <input type="text" name="company_name" id="company_name" value="{{$customerInfo->email}}"
                class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}"
                readonly>
        </div>

      
    </div>

    <div class="form-group row ">
        <label for="company_address" class="col-md-2 col-form-label text-font-family">ID Information</label>
        <div class="col-md-9">
            <input type="text" name="company_name" id="company_name" value="WIP"
                class="form-control @error('company_name') is-invalid @enderror" value="{{ old('company_name') }}"
                readonly>
        </div>
       
    </div>

    <div class="form-group row ">
      <div class="offset-5 col-5">
        <a href="{{route('shop.dashboard.customer.profile.edit')}}" class="btn grad2 bjsh-btn-gradient btn-small-screen"><b>Edit Profile</b></a>
      </div>  
    </div>

      </div>
     </div>
    </div>
  </div>
</div>



<style>
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


    .text-font-family{
        font-family: cursive;
    }

</style>
@endsection
