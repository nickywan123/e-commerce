@extends('layouts.shop.main')

@section('content')


<!--Desktop Layout-->

<div class="container-fluid background-image hidden-sm" style="min-height: 75vh;">

    <div class="row">
        <!---Text--->
        <div class="col-4">
            <div class="row">
                <div class="offset-5 col-7" style="margin-top: 25rem; font-weight:700;">
                    <h1>BUJISHU</h1>
                    <h1 class="ml-5">SERVICES</h1>
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

<div class="row">
  <div class="col-12">
    <img class="img-fluid" src="{{asset('/images/bujishu-service/bg-01.png')}}" alt="background-image" style="max-height: 20vh;">
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
