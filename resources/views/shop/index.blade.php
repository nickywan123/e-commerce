@extends('layouts.shop.main')

@section('content')



{{-- <!-- Banner Area Start -->
  <section id="slideshow" class="hero-area">
      <div class="slick">
        <div class="hero-area-slider">
          
          <!--class for display banner -->
          <div class="intro-carousel">
            @foreach($data as $pic)
              <div class="intro-content" style="background-image: url({{asset('/images/'.$pic->photo)}})">


</div>
@endforeach
</div>
</div>
</section> --}}


<section id="slideshow" class="hidden-sm">
    <div class="slick">
        <div>
            <img class="image-slideshow ml-5" src="{{asset('/storage/banner/Banner_1540x500-01.jpg')}}" alt="">
        </div>
        <div>
            <img class="image-slideshow ml-5" src="{{asset('/storage/banner/Banner_1540x500-02.jpg')}}" alt="">
        </div>
        <div>
            <img class="image-slideshow ml-5" src="{{asset('/storage/banner/Banner_1540x500-03.jpg')}}" alt="">
        </div>

    </div>
</section>

<section id="slideshow" class="hidden-md">
    <div class="slick ">
        <div>
            <img class="image-slideshow" src="{{asset('/storage/banner/Banner_1200x500_Mobile-01.jpg')}}" alt="">
        </div>
        <div>
            <img class="image-slideshow" src="{{asset('/storage/banner/Banner_1200x500_Mobile-02.jpg')}}" alt="">
        </div>
        <div>
            <img class="image-slideshow" src="{{asset('/storage/banner/Banner_1200x500_Mobile-03.jpg')}}" alt="">
        </div>

    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="color: #ffcc00; font-size: 1.9rem;" ><b>Hot Selections</b></h1>
            <div style="border-top: 1px solid #ffcc00;" class="w-150-md w-100-sm margin-bottom-md">
            </div>
        </div>
        <div class="col-4 col-md-2 text-alignment">
            <a style="color:#e0b555; " href="/shop/category/bedsheets-and-mattresses/bedsheets"><img class="icon-image" src="{{asset('/storage/icons/bedsheet-icon.png')}}" alt="Icon">
                <h5 class="margin-left-text " style="font-size:15px;"><b>BEDSHEET</b></h5>
            </a>

        </div>
        <div class="col-4 col-md-2 text-alignment">
            <a style=" color:#e0b555;" href=" /shop/category/curtains-blinds"><img class="icon-image" src="{{asset('/storage/icons/curtain-icon.png')}}" alt="Icon">
                <h5 class="margin-left-text " style="font-size:15px; "><b>CURTAINS</b></h5>
            </a>

        </div>

        <div class="col-4 col-md-2 text-alignment">
            <a style=" color:#e0b555; " href="/shop/category/lightings"><img class="icon-image" src="{{asset('/storage/icons/lighting.png')}}" alt="Icon">
                <h5 class="margin-left-text" style="font-size:15px; "><b>LIGHTING</b></h5>
            </a>

        </div>
        <div class="col-4 col-md-2 text-alignment">
            <a style=" color:#e0b555; " href="/wip"><img class="icon-image" src="{{asset('/storage/icons/renovation-icon.png')}}" alt="Icon">
                <h5 style="font-size:15px;" ><b>RENOVATION</b></h5>
            </a>

        </div>
        <div class="col-4 col-md-2 text-alignment">
            <a style="color:#e0b555;" href="/shop/category/carpets"><img class="icon-image" src="{{asset('/storage/icons/carpet-icon.png')}} " alt="Icon">
                <h5 class="margin-left-text " style="font-size:15px;"><b>CARPET</b></h5>
            </a>

        </div>
        <div class="col-4 col-md-2 text-alignment">
            <a style="color:#e0b555;" href="/shop/category/products-and-services"><img class="icon-image" src="{{asset('/storage/icons/paint-icon.png')}}" alt="Icon">
                <h5 class="margin-left-text " style="font-size:15px; "><b>PAINT</b></h5>
            </a>

        </div>
    </div>
</div>

<br>



@endsection

@push('style')
<style>
    .text-alignment {
        text-align: center;

    }

    .icon-image {

        height: 15vh;
        width: 15vh;
    }




   

    .promo-page-background-color {
        background-color: black;
    }





    @media(max-width:767px) {



        .image-slideshow {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;

            height: 100%;
            width: 100%;

        }

        .icon-image {
            width: 100px;
            height: 100px;
        }

        .margin-left-text {
            margin-left: 10px;
        }
    }

    @media (max-width: 767px) {
        .hidden-sm {
            display: none;
        }

        .w-100-sm {
            width: 100%;
        }
    }

    @media (min-width: 768px) {
        .hidden-md {
            display: none;
        }

        .w-50-md {
            width: 50%;
        }

        .margin-bottom-md {
            margin-bottom: 20px;
        }

        .image-slideshow {
        width: 95%;
        height: auto;
    }
    }


    @media(max-width:325px) {

        .icon-image {
            width: 90px;
            height: 90px;
        }

        .margin-left-text {
            margin-left: 10px;
        }
    }

    .slick-dots {
        position: absolute;
        display: block;
        width: 100%;
        padding: 10;
        margin: 0;
        list-style: none;
        text-align: center;
    }

    .slick-dots li button:before {
        color: white;
    }

    .slick-dots li.slick-active button:before {
        font-size: 10px;
        color: #ffcc00;


    }
</style>
@endpush



@push('script')
<script>
    $(document).ready(() => {
        $('#slideshow .slick').slick({
            autoplay: true,
            fade: false,
            autoplaySpeed: 2000,
            speed: 1000,
            dots: true,
            prevArrow: false,
            nextArrow: false
        });



    });
</script>
@endpush