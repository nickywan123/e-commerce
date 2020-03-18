@extends('layouts.shop.main')

@section('content')


<!--CSS Grid to display home page images -->


<div class="wrapper">
 
  <div class="bed-grid">
    <img class="promo-image-bed" src="{{asset('/images/Home_Bed_compressed.jpg')}}" alt="">
    <a href="#">New Product <span class="">➡</span></a>
  </div>
  <div class="pillow-grid">
    <img class="promo-image-pillow" src="{{asset('/images/Home_Pillow_compressed.jpg')}}" alt="">
    <a href="#">Best Seller <span class="">➡</span></a></div>
  <div class="kitchen-grid">
    <img class="promo-image-kitchen" src="{{asset('/images/Home_Kitchen_compressed.jpg')}}" alt="">
    <a href="#">Offer <span class="">➡</span></a>
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

@endsection

@push('style')
<style>
  .wrapper {
    display: grid;
    grid-template-columns: 3fr 2fr 3fr;
    grid-template-rows: repeat(8, 1fr);
    padding: 5em;
    grid-gap: 2.5em;
    background-color: black;

    height: 900px;
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
    grid-column: 1/2;
    grid-row: 1/4;
    /* height: 140%;
    width: 70%; */
  }


  .pillow-grid{
    grid-column: 2;
    grid-row: 1 / 4;
    /* height: 140%;
    width: 100%; */
  }



  .kitchen-grid{
    grid-column: 3;
    grid-row: 2 / 5;
  }



  .living-room-grid{
    grid-column: 1 / 3;
    grid-row: 4 / -1;
   
  }



  .sofa-grid{
    grid-column-start: 3;
    grid-row: 5 / -1;
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

  .promo-image-kitchen{
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


    .bed-grid {
      grid-column: 1/5;
      grid-row: 1 / 3;
      /* height: 120%; */
       width: 100%;

    }

    .pillow-grid {
      grid-column: 1/5;
      grid-row: -7/5;
      width: 100%;
      /* height: 45%; */
    }



    .kitchen-grid{
      grid-column: 1/5;
      grid-row: 5/6;
     
      /* height: 115% */
      
    }



    .living-room-grid{
      grid-column: 1 / 5;
      grid-row: -3/9;
      /* height: 120%; */
     margin-top: 5%;
    }



    .sofa-grid{
      grid-column: 1/5;
      grid-row: 6/6;
      /* height: 130%; */
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