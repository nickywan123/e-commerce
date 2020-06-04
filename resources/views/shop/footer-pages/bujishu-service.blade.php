@extends('layouts.shop.main')

@section('content')


<!--Desktop Layout-->

<div class="container-fluid background-image hidden-sm" style="min-height: 75vh;">

    <div class="row">
        <!---Text--->
        <div class="col-4">
            <div class="row">
                <div class="offset-5 col-7" style="margin-top: 25rem; ">
                    <h1 style="font-weight:700; font-size:40pt;">BUJISHU</h1>
                    <h1 style="font-weight:700; font-size:40pt;" class="ml-5">SERVICES</h1>
                </div>
            </div>
        </div>
        <div class="col-8" style="margin-top: 10rem;">
            <!--Top row Images-->
            <div class="row">
                <div class="col-3">
                    <img class="img-fluid" src="{{asset('/images/bujishu-service/Renovation-01.png')}}" alt="renovation">
                </div>
                <div class="col-3">
                    <img class="img-fluid" src="{{asset('/images/bujishu-service/Electrical-01.png')}}" alt="electrical">
                </div>
                <div class="col-3">
                    <img class="img-fluid" src="{{asset('/images/bujishu-service/Paint-01.png')}}" alt="paint">
                </div>
            </div>

            <!--Bottom row Images-->
            <div class="row mt-5">
                <div class="offset-1 col-3">
                    <img class="img-fluid" src="{{asset('/images/bujishu-service/Plaster-Ceiling-01.png')}}" alt="ceiling">
                </div>
                <div class="col-3">
                    <img class="img-fluid" src="{{asset('/images/bujishu-service/Hardware-01.png')}}" alt="hardware">
                </div>
                <div class="col-3">
                    <img class="img-fluid" src="{{asset('/images/bujishu-service/Air-Conditioning-01.png')}}" alt="air-conditioning">
                </div>
            </div>
        </div>
    </div>
</div>



 <!-------Mobile Layout------>

<div class="hidden-md">

 <div class="row">
  <div class="col-12">
    <img src="{{asset('/images/bujishu-service/Bujishu-Service_Mobile.png')}}" alt="background-image">
</div>
 </div>

 <div class="row container m-0">
     <div class="col-6">
        <img class="img-fluid" src="{{asset('/images/bujishu-service/Renovation-01.png')}}" alt="renovation">
     </div>
     <div class="col-6">
        <img class="img-fluid" src="{{asset('/images/bujishu-service/Electrical-01.png')}}" alt="electrical">
    </div>
 </div>

 <div class="row container m-0">
     <div class="col-6">
        <img class="img-fluid" src="{{asset('/images/bujishu-service/Paint-01.png')}}" alt="paint">
     </div>
     <div class="col-6">
        <img class="img-fluid" src="{{asset('/images/bujishu-service/Plaster-Ceiling-01.png')}}" alt="ceiling">
    </div>
 </div>


 <div class="row container m-0">
     <div class="col-6">
        <img class="img-fluid" src="{{asset('/images/bujishu-service/Hardware-01.png')}}" alt="hardware">
     </div>
     <div class="col-6">
        <img class="img-fluid" src="{{asset('/images/bujishu-service/Air-Conditioning-01.png')}}" alt="air-conditioning">
    </div>
 </div>

</div>

<style>
    .background-image {
        background-image: url(/images/bujishu-service/bg-01.png);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        width: 100vw;
        height: 100vh;
    }

    .background-image-mobile {
        background-image: url(/images/bujishu-service/Bujishu-Service_Mobile.png);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        width: 100px;
        height: 100px;
    }

    @media (max-width: 767px) {
        .hidden-sm {
            display: none;
        }

    }

    @media (min-width: 768px) {
        .hidden-md {
            display: none;
        }
      
    }
</style>


@endsection
