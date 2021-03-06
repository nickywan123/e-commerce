@extends('layouts.shop.main-bg-img')

@section('content')

<div class="backgroundImg-about-us" >

<div class="row m-0">
    <div class="offset-md-3 col-md-9 mt-3 mt-md-5">
        <h3 class="text-header-font" style="color:#fbcc34;">ABOUT US</h3>
    </div>
</div>
<div class="row mt-md-5 mt-2 m-0">
    <div class="offset-md-1 col-md-6 text-paragraph-font">
        <p>The establishment of BUJISHU in 2020 was inspired by a group of experts who committed to providing quality home living style, enabling customers to access professional, accurate, time-saving, and value-for-money products and services while improving the conditions of their home or office environment.</p>
        <p>The founding members of BUJISHU have 11 years of comprehensive experience in raising the standards of home living. Using practical and effective architecture knowledge, and with a team of well-trained consultant, had since accumulated tens of thousands of home design experiences. The ingenious setting which incorporates both artistic, innovative & flourishing designs has received a lot of customer appreciation and testimonials.  Customers who fully commit to the best layout will enjoy lasting benefits.</p>
        <p>However, in the course of achieving the right living design, customers still find it difficult to obtain the right items even after investing countless resources, making needless errors and delaying the crucial time to improve the living environment and missing the benefits of early perfection.</p>
        <p>We are making your VOICE heard! We know Customers wanted to do it RIGHT at the First time. In Moving towards future cyber world, we first launched an innovative e-commerce hub, riding on the conveniences of networking technology to showcase the best products or services that meet the artistic and thriving living designs, so that consumers can easily satisfy their home or office design needs and thereby reap the benefits of a good environment that lead towards a happy, healthy, productive and affluent life.</p>
    </div>
</div>

</div>




<style>

.backgroundImg-about-us{

    background-image: url(/images/about-us/about-us.png);
    background-repeat: no-repeat;
    background-position: fixed;
    background-size: cover;
    background-size: 100vw 100vh;
    width: 100vw;
    height: 100vh;
}

@media(max-width:768px){
    .text-header-font{
        font-size:15px;;
    }
    .text-paragraph-font{
        font-size: 1px;
    }
}

@media(min-width:768px){
    .text-header-font{
        font-size:45pt;
    }
    .text-paragraph-font{
        font-size: 13pt;
    }
}
</style>
@endsection