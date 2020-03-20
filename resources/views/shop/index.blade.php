@extends('layouts.shop.main')

@section('content')

{{-- 
<!--CSS Grid to display home page images -->

 <div class="container">

<div class="wrapper" id="body-content-collapse-sidebar">
 
  <div class="bed-grid">
    <img class="promo-image-bed" src="{{asset('/images/Home_Bed_compressed.jpg')}}" alt="">
    <a href="#">New Product <span class="">➡</span></a>
  </div>

  <div class="living-room-grid">
    <img class="promo-image-living-room" src="{{asset('/images/Shop_Page.jpg')}}" alt="">
    <a href="#">DC Home Design <span class="">➡</span></a>
  </div>

 

  <div class="sofa-grid">
    <img class="promo-image-sofa" src="{{asset('/images/Home_Sofa.jpg')}}" alt="">
    <a href="#">Top Rated <span class="">➡</span></a>
  </div>
</div>
</div> --}}


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












  .wrapper {
    display: grid;
    grid-template-columns: 3fr 2fr 3fr;
    grid-template-rows: repeat(8, 1fr);
    padding: 1em;
    grid-gap: 2.0em;
    background-color: black;

    height: 700px;
    max-width: 100%;
  }

  .wrapper>div {
    position: relative;
  }

  .wrapper>div>a {
    position: absolute;
    bottom: 10px;
    right: 10px;
    color: white;
    text-decoration: none;
  }

  .wrapper>div::after {
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    background-color: black;
    color: white;
    padding: .5rem;
  }

  .bed-grid{
    grid-column: 3;
    grid-row: 1/5;
    /* height: 140%;
    width: 70%; */
  }


  .pillow-grid{
    grid-column: 3;
    grid-row: 4 / 6;
    
    /* height: 140%;
    width: 100%; */
  }



 



  .living-room-grid{
    grid-column: 1 / 3;
    grid-row: 1 / 9;
   
  }



  .sofa-grid{
    /* grid-column-start: 3/6; */
    grid-row: 5/9;
  }



  .promo-image-bed{
    width: 100%;
    height: 100%;
    border-radius: 5px;
  }


  .promo-image-pillow{
    width: 100%;
    height: 100%;
    border-radius: 5px;
  }

 

  .promo-image-living-room{
    width: 100%;
    height: 100%;
    border-radius: 5px;
    /* margin-top: 50px; */
  }

  .promo-image-sofa{
    width: 100%;
    height: 100%;
    border-radius: 5px;
  }





  .promo-page-background-color{
    background-color: black;
  }





  .heading-part {
    border-bottom: 3px solid #e5e5e5;
    display: inline-block;
    width: 100%;
  }

  .main-title {
    margin-bottom: 0;
    font-size: 1.5rem;
    float: left;
    text-transform: uppercase;
  }

  .main-title::after {
    border-bottom: 3px solid #552244;
    content: "";
    display: block;
    margin-bottom: -3px;
    padding: 2px;
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
   
    .bed-grid {
      grid-column: 1/5;
      grid-row: 2 / 3;
      /* height: 120%; */
       width: 100%;

    }

    .pillow-grid {
      grid-column: 1/3;
      grid-row: 3/7;
      width: 100%;
      /* height: 45%; */
    }



  


    .living-room-grid{
      grid-column: 1 / 5;
      grid-row: 1/2;
      /* height: 120%; */
     margin-top: 5%;
    }



    .sofa-grid{
      grid-column: 1/5;
      grid-row: 3/10;
      /* height: 130%; */
      /* width: 130%; */
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