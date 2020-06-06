@extends('layouts.shop.main-bg-img')

@section('content')

<div class="background-image background-image-mobile">
  <div class="row">
      <div class="offset-md-5 col-md-6 mt-md-3">
          <h1 class="text-header-font-size" style="color:#ffcc00;">Our Vision, Culture, Value</h1>
      </div>
  </div>
  <div class="row">
      <div class="offset-md-5 col-md-6">
          <h3 class="text-header-mobile" style="font-weight: 700;">WHO WE ARE</h3>
          <p class="text-word-size">We aspire to create a DREAM HOME for all. We strive to do our part to make life better. We provide high-quality merchandise, great value, and exceptional customer service</p>
      </div>
  </div>
  <div class="row">
      <div class="offset-md-5 col-md-6 text-word-size" >
          <p class="m-0">At Bujishu, our mission is to build Quality & Sustainable HOME LIVING STYLE :</p>
          <ul class="pl-4">
              <li>Setting high standards on home living design</li>
              <li>Optimized quality of home living products</li>
              <li>Create Prosperous Family Business</li>
              <li>Promote Happy Family relationship</li>
          </ul>
      </div>
  </div>
  <div class="row">
      <div class="offset-md-5 col-md-6 text-word-size" >
        <h3 class="text-header-mobile" style="font-weight: 700;">HOW WE WORK</h3>
        <p class="m-0">As a Company, we strive to lead by our guiding principles and cultures:</p>
        <ul class="pl-4">
            <li>Commits to our craft</li>
            <li>Pursue Growth & Learning</li>
            <li>Drive Change & Technology Innovation </li>
            <li>Build Positive Team & Family Spirit</li>
            <li>Warmth Relationship with Community</li>
            <li>Promote Literature & Arts</li>
        </ul>
      </div>
  </div>
  <div class="row">
      <div class="offset-md-5 col-md-6 text-word-size">
        <h3 class="text-header-mobile" style="font-weight: 700;">WHAT WE VALUE</h3>
        <ul class="pl-4">
            <li>Providing customers with an easy, enjoyable and secure online experience to complete their home living design in shortest time possible</li>
            <li>Highest standards of home living products to enhance the quality of home lifestyles</li>
            <li>Provide value-added high quality merchandise to our customers.</li>
        </ul>
      </div>
  </div>
</div>

<style>
    
@media(min-width:768px){
    .text-header-font-size{
        font-size:3rem;
    }
    .text-word-size{
        font-size:1.1rem;
    }
    .background-image {
        background-image: url(/images/our-vision-culture-value/our-vision-bg.jpg) ;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100vw 100vh;
        width: 100vw;
        height: 100vh;
    }
}

@media(max-width:768px){
    .background-image-mobile {
        background-image: url(/images/our-vision-culture-value/our-vision-bg-mobile.jpg) ;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100vw 100vh;
        width: 100vw;
        height: 100vh;
    }

    .text-header-mobile{
        font-size: 1rem;
    }
}
</style>

@endsection