@extends('layouts.shop.main-bg-img')

@section('content')

<div class="background-image">
  <div class="container">
    <div class="row">
        <div class="offset-md-4 col-md-8 margin-top-text" >
             <h1 class="text-size-header" style="color:#ffcc00;">We're Sorry.</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 offset-md-3 col-md-8 text-white text-size-paragraph">
            <p class="ml-md-5">We are currently working on something new</p>
            <p>and we will be back soon with awesome new features.</p>
            <p class="margin-left-text">Thank you for your patience.</p>
        </div>
    </div>
    <div class="row">
        <div class="offset-md-5 col-md-7 mt-md-3">
            <a href="/shop" class="btn bjsh-btn-gradient" style="font-weight: 700">Continue Shopping</a>
        </div>
    </div>
  </div>
</div>


<style>
.background-image {
        background-image: url(/images/wip/coming-soon.jpg) ;
        background-repeat: no-repeat;
        background-position: center;
        background-size: 100vw 100vh;
        width: 100vw;
        height: 100vh;
    }  

@media(max-width:768px){
    .margin-top-text{
        margin-top: 7rem;
    }
}

@media(min-width:769px){
    .text-size-header{
        font-size:4rem;
    }
    .text-size-paragraph{
        font-size: 1.5rem;
    }
    .margin-top-text{
        margin-top: 8rem;
    }
    .margin-left-text{
        margin-left: 8rem;
    }
}
</style>

@endsection