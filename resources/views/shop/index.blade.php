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
  <div class="slick ">
    <div>
      <img class="image-slideshow" src="{{asset('/images/promopage1.jpg')}}" alt="">
    </div>
    <div>
      <img class="image-slideshow" src="{{asset('/images/promopage2.jpg')}}" alt="">
    </div>
    <div>
      <img class="image-slideshow" src="{{asset('/images/promopage3.jpg')}}" alt="">
    </div>
  </div>
</section>

<section id="slideshow" class="hidden-md">
  <div class="slick ">
    <div>
      <img class="image-slideshow" src="{{asset('/images/promopage1-mobile.jpg')}}" alt="">
    </div>
    <div>
      <img class="image-slideshow" src="{{asset('/images/promopage2-mobile.jpg')}}" alt="">
    </div>
    <div>
      <img class="image-slideshow" src="{{asset('/images/promopage3-mobile.jpg')}}" alt="">
    </div>
  </div>
</section>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 style="color: #ffcc00;">Popular Categories</h1>
      <div style="border-top: 1px solid #ffcc00; margin-bottom: 20px;" class="w-50-md w-100-sm">
      </div>
    </div>
    <div class="col-6 col-md-2 text-alignment">
      <a style="color:#ffcc00;" href="#"><img class="icon-image" src="{{asset('/images/1.png')}}" alt="Icon">
        <h5>Bedsheet</h5>
      </a>

    </div>
    <div class="col-6 col-md-2 text-alignment">
      <a style=" color:#ffcc00;" href="#"><img class="icon-image" src="{{asset('/images/2.png')}}" alt="Icon">
        <h5>Curtain</h5>
      </a>

    </div>

    <div class="col-6 col-md-2 text-alignment">
      <a style=" color:#ffcc00;" href="#"><img class="icon-image" src="{{asset('/images/3.png')}}" alt="Icon">
        <h5>Cabinet</h5>
      </a>

    </div>
    <div class="col-6 col-md-2 text-alignment">
      <a style=" color:#ffcc00;" href="#"><img class="icon-image" src="{{asset('/images/3.png')}}" alt="Icon">
        <h5>Wallpaper</h5>
      </a>

    </div>
    <div class="col-6 col-md-2 text-alignment">
      <a style=" color:#ffcc00;" href="#"><img class="icon-image" src="{{asset('/images/3.png')}}" alt="Icon">
        <h5>Carpet</h5>
      </a>

    </div>
    <div class="col-6 col-md-2 text-alignment">
      <a style=" color:#ffcc00;" href="#"><img class="icon-image" src="{{asset('/images/3.png')}}" alt="Icon">
        <h5>Paint</h5>
      </a>

    </div>

    <!-- <div class="col-6 col-md-2 text-alignment">
      <a style=" color:#ffcc00;" href="#"><img class="icon-image" src="{{asset('/images/3.png')}}" alt="Icon">
        <h5>Furniture</h5>
      </a>

    </div>
    <div class="col-6 col-md-2 text-alignment">
      <a style=" color:#ffcc00;" href="#"><img class="icon-image" src="{{asset('/images/3.png')}}" alt="Icon">
        <h5>Wiring</h5>
      </a>

    </div> -->

  </div>

</div>

<br>

<!-- Hero Area End -->

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




  .image-slideshow {
    width: 100%;
    height: auto;
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