@extends('layouts.shop.main')

@section('content')



	<!-- Hero Area Start -->
  <section class="hero-area">
    

     
        <div class="hero-area-slider">
          <div class="slide-progress"></div>
          <!--class for display banner -->
          <div class="intro-carousel">
            
              <div class="intro-content " style="background-image: url({{asset('/images/Shop_Page.jpg')}})">
                
              </div>
            
          </div>

        </div>
   
            
          
  </section>
  <br>


  <div class="container">
 <div class="row">
   
 <div class="col-6 col-md-2">
 <a style="color:#ffcc00;" href="#"><img class="icon-image" src="{{asset('/images/1.png')}}" alt="Icon"> <h5>Electrical</h5></a>

 </div>
 <div class="col-6 col-md-2">
  <a style=" color:#ffcc00;"  href="#"><img class="icon-image" src="{{asset('/images/2.png')}}" alt="Icon"> <h5>Beds & Mattress</h5></a>
  
  </div>

  <div class="col-6 col-md-2">
    <a style=" color:#ffcc00;"  href="#"><img class="icon-image" src="{{asset('/images/3.png')}}" alt="Icon"><h5>Curtain</h5></a>
   
  </div>

</div>

 </div>



  <!-- Hero Area End -->

@endsection

@push('style')
<style>



.icon-image{

  height: 15vh;
  widows: 15vh;
}

/*-----------------------------
** Hero Area Start
------------------------------*/



.hero-area .hero-area-slider .intro-carousel .intro-content {
  background-size: cover;
  height: 500px;
  
  display: flex;
  align-items: center;
  background-position: center !important;
  background-size: cover !important;
  background-repeat: no-repeat !important;

  margin-top: 10px;
    margin-left: 80px;
    margin-right: 80px;
  }
  .hero-area .hero-area-slider .intro-carousel .intro-content.slide-one {
    text-align: left; }
  .hero-area .hero-area-slider .intro-carousel .intro-content.slide-two {
    text-align: center; }
  .hero-area .hero-area-slider .intro-carousel .intro-content.slide-three {
    text-align: right; }

    .hero-area .hero-area-slider .intro-carousel .intro-content .slider-content .layer-1 .subtitle {
      font-size: 24px;
      font-weight: 700;
      color: #143250;
       }
    .hero-area .hero-area-slider .intro-carousel .intro-content .slider-content .layer-1 .title {
      font-size: 36px;
      font-weight: 700;
      color: #ff5500;
       }

    .hero-area .hero-area-slider .intro-carousel .intro-content .slider-content .layer-2 .text {
      font-size: 16px;
      font-weight: 600;
      color: #143250;
      max-width: 400px;
      display: inline-block; }

    .hero-area .hero-area-slider .intro-carousel .intro-content .slider-content .layer-3 a {
      margin-top: 15px;
      text-align: center;
      border: 1px solid #ff5500;
    }
    .hero-area .hero-area-slider .intro-carousel .intro-content .slider-content .layer-3 a:hover {
      background: #fff;
      color: #ff5500;
    }

    .hero-area .hero-area-slider .intro-carousel .intro-content .slider-content .layer-3 a i{
  font-size: 13px;}


/* hero Slider dot design Start */

.hero-area .hero-area-slider .owl-controls .owl-dots {
  display: block;
  position: absolute;
  text-align: center;
  margin-top: 0px;
  left: 50%;
  transform: translateX(-50%);
  bottom: 20px;
}
  .hero-area .hero-area-slider .owl-controls .owl-dots .owl-dot {
    width: 25px;
    height: 6px;
    background: #fff;
    display: inline-block;
    border-radius: 0px;
    transform: skewX(-30deg);
    margin: 0px 3px 0px;
    -webkit-transition: 0.3s ease-in;
    -moz-transition: 0.3s ease-in;
    -o-transition: 0.3s ease-in;
    transition: 0.3s ease-in;
    box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.1);
  }
    .hero-area .hero-area-slider .owl-controls .owl-dots .owl-dot.active {
      background: #fff;
      width: 50px
    }


  .promo-page-background-color{
    background-color: black;
  }



  

  @media(max-width:767px) {

    .hero-area .hero-area-slider .intro-carousel .intro-content {
  background-size: cover;
  height: 400px;
  margin-right: 10px;
  margin-left: 10px;
  display: flex;
  align-items: center;
  background-position: center !important;
  background-size: cover !important;
  background-repeat: no-repeat !important;
  }
   
   

 


  }
</style>
@endpush



@push('script')
<script>
  $(document).ready(function() {
    // Example get request
    // $.get('https://swapi.co/api/people/1/', // url
    //     function(data, textStatus, jqXHR) { // success callback
    //         alert('status: ' + textStatus + ', data:' + data.name);
    //     });
  });
</script>
@endpush