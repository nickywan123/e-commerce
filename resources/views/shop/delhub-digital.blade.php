@extends('layouts.shop.main-delhub')

@section('content')


{{-----Desktop layout----}}
<div class="wrapper delhub-digital-bg-img hidden-sm">

<div class="row">
    <div class="ml-5 col-4">
        <h1 style="color: whitesmoke; margin-top: 6rem;">DELHUB DIGITAL</h1>
    </div>
</div>
<div class="row mt-5">

    <div class="offset-1 col-6" style="font-size:13pt; color:whitesmoke;">
        <p>The establishment of BUJISHU in 2020 was inspired by a group of experts who committed to providing quality home living style, enabling customers to access professional, accurate, time-saving, and value-for-money products and services while improving the conditions of their home or office environment.</p>
        <p>The founding members of BUJISHU have 11 years of comprehensive experience in raising the standards of home living. Using practical and effective architecture knowledge, and with a team of well-trained consultant, had since accumulated tens of thousands of home design experiences. The ingenious setting which incorporates both artistic, innovative & flourishing designs has received a lot of customer appreciation and testimonials.  Customers who fully commit to the best layout will enjoy lasting benefits.</p>
        <p>However, in the course of achieving the right living design, customers still find it difficult to obtain the right items even after investing countless resources, making needless errors and delaying the crucial time to improve the living environment and missing the benefits of early perfection.</p>
        <p>We are making your VOICE heard! We know Customers wanted to do it RIGHT at the First time. In Moving towards future cyber world, we first launched an innovative e-commerce hub, riding on the conveniences of networking technology to showcase the best products or services that meet the artistic and thriving living designs, so that consumers can easily satisfy their home or office design needs and thereby reap the benefits of a good environment that lead towards a happy, healthy, productive and affluent life.</p>
    </div>

    <div class="col-5">
        <div class="row">
            <div class="offset-1 col-5">
                <img src="{{asset('/storage/delhub-digital/2020.png')}}" alt="Bujishu-Project">
            </div>
            <div class="col-6 mt-5">
                <h1 style=" color:whitesmoke;">Our Projects</h1>
                <img class="mt-3" src="{{asset('/storage/delhub-digital/2021.png')}}" alt="2021-Project">
            </div>
        </div>
        <div class="row">
            <div class="offset-3 col-9">
                <img class="mt-3" src="{{asset('/storage/delhub-digital/2022.png')}}" alt="2022-Project">
            </div>
        </div>

    </div>
    
   

</div>


    <div class="row pl-5 pr-2 footer-margin">
        <div class="col-6 col-md-3 text-center text-md-left ">
            <ul class=" pr-2 pl-2">
                <li>
                    <p style="font-size: 1.1rem; color:white;">CONTACT US</p>
                    <p class="bujishu-white mb-1 " style="font-size: 0.9rem;">
                        1.26.5,
                        Menara Bangkok Bank
                        <br>
                        Kuala Lumpur, Malaysia
                    </p>
                </li>
                <li>
                    <p class="bujishu-white mb-1 " style="font-size: 0.9rem;">
                         Tel: 03-1234 5678
                    </p>
                </li>
               
            </ul>
        </div>
        <div class="offset-5 col-md-3 " style="padding-top:100px;">
            <h6 class="text-right mb-0 pt-1 pb-1 " style="color:black; font-size:13pt;">@ 2020 Delhub Digital. All Rights Reserved</h6>
        </div>
    </div>
    
    

</div>




{{-----Mobile layout----}}

<div class="hidden-md delhub-digital-bg-mobile-img">

<div class="row mt-2">
    <div class="offset-1 col-11">
        <h1 style="color: white; ">DELHUB DIGITAL</h1>
    </div>
</div>

<div class="row mt-3">
    <div class="offset-1 col-10" style="color:white; font-size:8pt;">
        <p>The establishment of BUJISHU in 2020 was inspired by a group of experts who committed to providing quality home living style, enabling customers to access professional, accurate, time-saving, and value-for-money products and services while improving the conditions of their home or office environment.</p>
        <p>The founding members of BUJISHU have 11 years of comprehensive experience in raising the standards of home living. Using practical and effective architecture knowledge, and with a team of well-trained consultant, had since accumulated tens of thousands of home design experiences. The ingenious setting which incorporates both artistic, innovative & flourishing designs has received a lot of customer appreciation and testimonials.  Customers who fully commit to the best layout will enjoy lasting benefits.</p>
        <p>However, in the course of achieving the right living design, customers still find it difficult to obtain the right items even after investing countless resources, making needless errors and delaying the crucial time to improve the living environment and missing the benefits of early perfection.</p>
        <p>We are making your VOICE heard! We know Customers wanted to do it RIGHT at the First time. In Moving towards future cyber world, we first launched an innovative e-commerce hub, riding on the conveniences of networking technology to showcase the best products or services that meet the artistic and thriving living designs, so that consumers can easily satisfy their home or office design needs and thereby reap the benefits of a good environment that lead towards a happy, healthy, productive and affluent life.</p>
    </div>
</div>

<div class="row">
    <div class="offset-3 col-8">
        <h2 style="color: white; ">Our Projects</h2>
    </div>
</div>

<div class="row">
    <div class="offset-3 col-9">
        <img src="{{asset('/storage/delhub-digital/2020.png')}}" style="width:50%;" alt="Bujishu-Project">
    </div>
</div>
<div class="row mt-3">
    <div class="offset-3 col-9">
        <img src="{{asset('/storage/delhub-digital/2021.png')}}" style="width:50%;" alt="Bujishu-Project">
    </div>
</div>
<div class="row mt-3">
    <div class="offset-3 col-9">
        <img src="{{asset('/storage/delhub-digital/2022.png')}}" style="width:50%;" alt="Bujishu-Project">
    </div>
</div>

<div class="row pl-3">
    <div class="">
        <ul class="list-unstyled pr-2 pl-2 pt-5">
            <li>
                <p style="font-size: 1.0rem; color:white;">CONTACT US</p>
                <p class="bujishu-white mb-1 " style="font-size: 0.8rem;">
                    1.26.5,
                    Menara Bangkok Bank
                    <br>
                    Kuala Lumpur, Malaysia
                </p>
            </li>
            <li>
                <p class="bujishu-white mb-1 " style="font-size: 0.8rem;">
                     Tel: 03-1234 5678
                </p>
            </li>
            <li>
                <p class="bujishu-white mb-1 " style="font-size: 0.8rem;">
                    @ 2020 Bujishu. All Rights Reserved
               </p>  
            </li>
           
        </ul> 
    </div>
</div>

</div>

<style>
 @media (max-width: 767px) {
        .hidden-sm {
            display: none;
        }
        
      
    }

    @media (min-width: 768px) {
        .hidden-md {
            display: none;
        }
       
        .footer-margin{
            margin-top: 1rem;
        }
        
    }


</style>
@endsection