@extends('layouts.shop.main')



@section('content')
<div class="col-12 col-md-10 offset-md-1" style="min-height: 65vh;">
    <div class="row">
        <div class="col-12 mb-1">
            <div style="background-color: #e9ecef;">
                <ol class="breadcrumb text-capitalize" style="background-color: #f6f6f6;">

                    <li class="breadcrumb-item"><a href="/shop">Home</a></li>
                    <li class="breadcrumb-item active">Renovation</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row pb-4">
        <div class="col-12 mb-1">
            <h3 class="text-muted">Renovation</h3>
        </div>
    </div>

    <!-- Featured Categories -->
    <div class="row pb-1">
        <div class="col-12 mb-1">
            <h3 class="text-dark font-weight-bold">Featured Categories</h3>
            <hr>
        </div>
    </div>

    <!-- Child Categories -->
    <div class="row custom-mb-5">
        <div class="col-6 col-md-2 text-center">
            <a class="category-item category-link" href="javascript:void(0)">
                <div class="category-container">
                    <div class="category-image-container">
                        <img src="https://www.nicolrenovationsltd.co.nz/wp-content/uploads/2018/04/glenfield-kitchen-renovation-work.gif" alt="">
                        <p>Renovation</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-6 col-md-2 text-center">
            <a class="category-item category-link" href="javascript:void(0)">
                <div class="category-container">
                    <div class="category-image-container">
                        <img src="https://www.builderskart.com/image/cache/catalog/so_categories/electrical-1000x1000.jpg" alt="">
                        <p>Electrical</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-6 col-md-2 text-center">
            <a class="category-item category-link" href="javascript:void(0)">
                <div class="category-container">
                    <div class="category-image-container">
                        <img src="https://4.imimg.com/data4/UU/BX/MY-2822952/paint-work-services-500x500.jpeg" alt="">
                        <p>Paint</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-6 col-md-2 text-center">
            <a class="category-item category-link" href="javascript:void(0)">
                <div class="category-container">
                    <div class="category-image-container">
                        <img src="https://getsafeandsound.com/wp-content/uploads/2019/06/camera-installation.jpg" alt="">
                        <p>CCTV</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-6 col-md-2 text-center">
            <a class="category-item category-link" href="javascript:void(0)">
                <div class="category-container">
                    <div class="category-image-container">
                        <img src="https://alqattanac.com/images/service/4c.jpg" alt="">
                        <p>Air Conditioning</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-6 col-md-2 text-center">
            <a class="category-item category-link" href="javascript:void(0)">
                <div class="category-container">
                    <div class="category-image-container">
                        <img src="https://via.placeholder.com/640" alt="">
                        <p>Lorem</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- End Featured Categories -->

    <!-- Featured Deals -->
    <div class="row pb-1">
        <div class="col-12 mb-1">
            <h3 class="text-dark font-weight-bold">Featured Deals <small id="child-category-indicator" class='text-muted text-capitalize'></small></h3>
            <!-- <div class="boxed">
                <input type="radio" class="catalog-quality-filter" id="catalog-quality-all" name="catalog-quality" value="" checked>
                <label for="catalog-quality-all">All</label>

                <input type="radio" class="catalog-quality-filter" id="catalog-quality-standard" name="catalog-quality" value="standard">
                <label for="catalog-quality-standard">Standard</label>

                <input type="radio" class="catalog-quality-filter" id="catalog-quality-moderate" name="catalog-quality" value="moderate">
                <label for="catalog-quality-moderate">Moderate</label>

                <input type="radio" class="catalog-quality-filter" id="catalog-quality-premium" name="catalog-quality" value="premium">
                <label for="catalog-quality-premium">Premium</label>
            </div> -->
            <hr style="margin-top: 0.2rem;">
        </div>
    </div>

    <div id="category-product-container">
        <div class="row no-gutters">
            <!-- 1 -->
            <div class="col-12 col-md-3 pl-2 pr-2 pb-3">
                <div class="card p-3">
                    <div class="mx-auto mb-3">
                        <img src="https://www.designhill.com/resize_img.php?atyp=page_file&pth=ft_ca_ct||259||contestfile_1&flp=1549629075-15868770495c5d76930c87e8-24261090.jpg" class="mw-100" alt="">
                    </div>

                    <div>
                        <h5 class="text-dark text-center">
                            ABC Company Sdn Bhd
                        </h5>
                        <p class="mb-0 mt-2">
                            Panel Rating
                        </p>
                        @php $rating = 3; @endphp

                        @foreach(range(1,5) as $i)
                        <span class="fa-stack" style="width:1em">
                            <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                            @if($rating >0)
                            @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                            @else
                            <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                            @endif
                            @endif
                            @php $rating--; @endphp
                        </span>
                        @endforeach

                        <p class="mb-0 mt-2">
                            Rated By Customers
                        </p>
                        @php $rating = 4.5; @endphp

                        @foreach(range(1,5) as $i)
                        <span class="fa-stack" style="width:1em">
                            <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                            @if($rating >0)
                            @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                            @else
                            <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                            @endif
                            @endif
                            @php $rating--; @endphp
                        </span>
                        @endforeach
                        <p class="mb-1 mt-2">
                            Area Of Services
                        </p>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            Electrical
                        </span>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            CCTV
                        </span>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            Paint
                        </span>
                        <p class="mb-0 mt-3">
                            Vision
                        </p>
                        <span class="text-muted text-justify">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, similique.
                        </span>
                        <p class="mb-0 mt-2">
                            Mission
                        </p>
                        <span class="text-muted text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, mollitia?
                        </span>
                    </div>

                    <div class="mt-3">
                        <button type="button" class="btn bjsh-btn-gradient d-block w-100 font-weight-bold">Request For Quotation</button>
                    </div>
                </div>
            </div>
            <!-- End 1 -->

            <!-- 2 -->
            <div class="col-12 col-md-3 pl-2 pr-2 pb-3">
                <div class="card p-3">
                    <div class="mx-auto mb-3">
                        <img src="https://dcassetcdn.com/design_img/2980691/681558/681558_16439713_2980691_e831b887_image.png" class="mw-100" alt="">
                    </div>

                    <div>
                        <h5 class="text-dark text-center">
                            123 Company Sdn Bhd
                        </h5>
                        <p class="mb-0 mt-2">
                            Panel Rating
                        </p>
                        @php $rating = 3; @endphp

                        @foreach(range(1,5) as $i)
                        <span class="fa-stack" style="width:1em">
                            <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                            @if($rating >0)
                            @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                            @else
                            <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                            @endif
                            @endif
                            @php $rating--; @endphp
                        </span>
                        @endforeach

                        <p class="mb-0 mt-2">
                            Rated By Customers
                        </p>
                        @php $rating = 4.5; @endphp

                        @foreach(range(1,5) as $i)
                        <span class="fa-stack" style="width:1em">
                            <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                            @if($rating >0)
                            @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                            @else
                            <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                            @endif
                            @endif
                            @php $rating--; @endphp
                        </span>
                        @endforeach
                        <p class="mb-1 mt-2">
                            Area Of Services
                        </p>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            Electrical
                        </span>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            Wiring
                        </span>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            Air Conditioning
                        </span>
                        <p class="mb-0 mt-3">
                            Vision
                        </p>
                        <span class="text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, similique.
                        </span>
                        <p class="mb-0 mt-2">
                            Mission
                        </p>
                        <span class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, mollitia?
                        </span>
                    </div>

                    <div class="mt-3">
                        <button type="button" class="btn bjsh-btn-gradient d-block w-100 font-weight-bold">Request For Quotation</button>
                    </div>
                </div>
            </div>
            <!-- End 2 -->

            <!-- 3 -->
            <div class="col-12 col-md-3 pl-2 pr-2 pb-3">
                <div class="card p-3">
                    <div class="mx-auto mb-3">
                        <img src="https://lh3.googleusercontent.com/proxy/PUG1JBPK4W967uyD_5uJ_Ub0_ilLN9Tskc0k5wiKMo9iL2dJABi3yDS_4oitVeghjRbkLwqL0uXEst5HcPMhvyOZgwhLxDwktScfy2TVHtzuTc4GhmvzsW69LFqFbG2f28fOYVBF-sk" class="mw-100" alt="">
                    </div>

                    <div>
                        <h5 class="text-dark text-center">
                            XYZ Company Sdn Bhd
                        </h5>
                        <p class="mb-0 mt-2">
                            Panel Rating
                        </p>
                        @php $rating = 3; @endphp

                        @foreach(range(1,5) as $i)
                        <span class="fa-stack" style="width:1em">
                            <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                            @if($rating >0)
                            @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                            @else
                            <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                            @endif
                            @endif
                            @php $rating--; @endphp
                        </span>
                        @endforeach

                        <p class="mb-0 mt-2">
                            Rated By Customers
                        </p>
                        @php $rating = 4.5; @endphp

                        @foreach(range(1,5) as $i)
                        <span class="fa-stack" style="width:1em">
                            <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                            @if($rating >0)
                            @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                            @else
                            <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                            @endif
                            @endif
                            @php $rating--; @endphp
                        </span>
                        @endforeach
                        <p class="mb-1 mt-2">
                            Area Of Services
                        </p>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            Demolition
                        </span>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            CCTV
                        </span>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            Paint
                        </span>
                        <p class="mb-0 mt-3">
                            Vision
                        </p>
                        <span class="text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, similique.
                        </span>
                        <p class="mb-0 mt-2">
                            Mission
                        </p>
                        <span class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, mollitia?
                        </span>
                    </div>

                    <div class="mt-3">
                        <button type="button" class="btn bjsh-btn-gradient d-block w-100 font-weight-bold">Request For Quotation</button>
                    </div>
                </div>
            </div>
            <!-- End 3 -->

            <!-- 4 -->
            <div class="col-12 col-md-3 pl-2 pr-2 pb-3">
                <div class="card p-3">
                    <div class="mx-auto mb-3">
                        <img src="https://placeit-assets1.s3-accelerate.amazonaws.com/custom-pages/technology-logo-maker-lp/online-logo-design-template-for-an-eco-tech-company-2176l-206-el-1024x1024.png" class="mw-100" alt="">
                    </div>

                    <div>
                        <h5 class="text-dark text-center">
                            980 Company Sdn Bhd
                        </h5>
                        <p class="mb-0 mt-2">
                            Panel Rating
                        </p>
                        @php $rating = 3; @endphp

                        @foreach(range(1,5) as $i)
                        <span class="fa-stack" style="width:1em">
                            <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                            @if($rating >0)
                            @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                            @else
                            <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                            @endif
                            @endif
                            @php $rating--; @endphp
                        </span>
                        @endforeach

                        <p class="mb-0 mt-2">
                            Rated By Customers
                        </p>
                        @php $rating = 4.5; @endphp

                        @foreach(range(1,5) as $i)
                        <span class="fa-stack" style="width:1em">
                            <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                            @if($rating >0)
                            @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                            @else
                            <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                            @endif
                            @endif
                            @php $rating--; @endphp
                        </span>
                        @endforeach
                        <p class="mb-1 mt-2">
                            Area Of Services
                        </p>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            Electrical
                        </span>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            CCTV
                        </span>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            Paint
                        </span>
                        <p class="mb-0 mt-3">
                            Vision
                        </p>
                        <span class="text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, similique.
                        </span>
                        <p class="mb-0 mt-2">
                            Mission
                        </p>
                        <span class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, mollitia?
                        </span>
                    </div>

                    <div class="mt-3">
                        <button type="button" class="btn bjsh-btn-gradient d-block w-100 font-weight-bold">Request For Quotation</button>
                    </div>
                </div>
            </div>
            <!-- End 4 -->

            <!-- 5 -->
            <div class="col-12 col-md-3 pl-2 pr-2 pb-3">
                <div class="card p-3">
                    <div class="mx-auto mb-3">
                        <img src="https://placeit-assets1.s3-accelerate.amazonaws.com/custom-pages/technology-logo-maker-lp/online-logo-design-template-for-an-eco-tech-company-2176l-206-el-1024x1024.png" class="mw-100" alt="">
                    </div>

                    <div>
                        <h5 class="text-dark text-center">
                            980 Company Sdn Bhd
                        </h5>
                        <p class="mb-0 mt-2">
                            Panel Rating
                        </p>
                        @php $rating = 3; @endphp

                        @foreach(range(1,5) as $i)
                        <span class="fa-stack" style="width:1em">
                            <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                            @if($rating >0)
                            @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                            @else
                            <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                            @endif
                            @endif
                            @php $rating--; @endphp
                        </span>
                        @endforeach

                        <p class="mb-0 mt-2">
                            Rated By Customers
                        </p>
                        @php $rating = 4.5; @endphp

                        @foreach(range(1,5) as $i)
                        <span class="fa-stack" style="width:1em">
                            <i class="far fa-star fa-stack-1x" style="color: #fccb34;"></i>

                            @if($rating >0)
                            @if($rating >0.5)
                            <i class="fas fa-star fa-stack-1x" style="color: #fccb34;"></i>
                            @else
                            <i class="fas fa-star-half fa-stack-1x" style="color: #fccb34;"></i>
                            @endif
                            @endif
                            @php $rating--; @endphp
                        </span>
                        @endforeach
                        <p class="mb-1 mt-2">
                            Area Of Services
                        </p>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            Electrical
                        </span>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            CCTV
                        </span>
                        <span style="padding: 5px; margin-right: 3px; background-color: #FAFE62; border-radius: 5px;">
                            Paint
                        </span>
                        <p class="mb-0 mt-3">
                            Vision
                        </p>
                        <span class="text-muted">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, similique.
                        </span>
                        <p class="mb-0 mt-2">
                            Mission
                        </p>
                        <span class="text-muted">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, mollitia?
                        </span>
                    </div>

                    <div class="mt-3">
                        <button type="button" class="btn bjsh-btn-gradient d-block w-100 font-weight-bold">Request For Quotation</button>
                    </div>
                </div>
            </div>
            <!-- End 5 -->
        </div>
    </div>
</div>
</div>
</div>
@endsection

@push('style')
<style>
    .product-rating li {
        display: inline;
    }

    .radius-100 {
        border-radius: 100%;
    }

    .item-info {
        color: rgb(91, 91, 91);
    }

    .item-info h5 {
        font-weight: 600;
        margin: 0;
    }

    .item-info p {
        font-weight: 450;
        font-family: sans-serif;
        font-size: 1rem;
    }

    .item-info .item-price {
        font-size: 1.3rem;
        font-weight: 650;
    }

    .slide-right-overlay {
        position: absolute;
        bottom: 0;
        left: 100%;
        right: 0;
        background-color: rgba(255, 255, 255, 0.4);
        overflow: hidden;
        width: 0;
        height: 100%;
        transition: .5s ease;
        padding-top: 1rem;
    }

    .item-overlay-container:hover .slide-right-overlay {
        width: 100%;
        left: 0;
        padding-left: 1rem;
    }

    .item-overlay-container {
        position: relative;
    }

    .item-overlay {
        position: absolute;
        top: 10px;
        right: 0;
        background: rgb(91, 91, 91);
        background: rgba(91, 91, 91, 0.9);
    }

    .item-quality {
        padding: .25rem;
        font-size: 1rem;
        color: #ffffff;
    }

    .fa.fa-star {
        color: #6e6e6e;
    }

    .fa.fa-star.checked {
        color: #fccb34;
    }

    /* Custom animation */
    .slide-up-image-container {
        position: relative;
    }

    .slide-up-image {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 100%;
        transition: all .3s ease-in-out;
    }

    .slide-up-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.99);
        overflow: hidden;
        width: 100%;
        height: 0;
        transition: .5s ease;

    }

    .slide-up-overlay-content {
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .slide-up-image-container:hover .slide-up-image {
        transform: scale(0.65);
    }

    .slide-up-image-container:hover .slide-up-overlay {
        height: 100%;
        border: 1px solid #fccb34;
    }

    .spinner-border {
        display: inline-block;
        width: 7rem;
        height: 7rem;
        vertical-align: text-bottom;
        border: 0.75em solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner-border 0.75s linear infinite;
        animation: spinner-border 0.75s linear infinite;
    }

    .box {
        position: relative;
    }

    .ribbon {
        position: absolute;
        right: -5px;
        top: -5px;
        z-index: 1;
        overflow: hidden;
        width: 75px;
        height: 75px;
        text-align: right;
    }

    .ribbon.standard span {
        font-size: 10px;
        font-weight: bold;
        color: #1f1f1f;
        text-transform: uppercase;
        text-align: center;
        line-height: 20px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        width: 100px;
        display: block;
        background: #79A70A;
        background: linear-gradient(#E3BD9D 0%, #FFD4C9 100%);
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 19px;
        right: -21px;
    }

    .ribbon.standard span::before {
        content: "";
        position: absolute;
        left: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid #FFD4C9;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #FFD4C9;
    }

    .ribbon.standard span::after {
        content: "";
        position: absolute;
        right: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid transparent;
        border-right: 3px solid #FFD4C9;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #FFD4C9;
    }

    .ribbon.moderate span {
        font-size: 10px;
        font-weight: bold;
        color: #1f1f1f;
        text-transform: uppercase;
        text-align: center;
        line-height: 20px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        width: 100px;
        display: block;
        background: #79A70A;
        background: linear-gradient(#AFC4E3 0%, #C7D4FF 100%);
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 19px;
        right: -21px;
    }

    .ribbon.moderate span::before {
        content: "";
        position: absolute;
        left: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid #C7D4FF;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #C7D4FF;
    }

    .ribbon.moderate span::after {
        content: "";
        position: absolute;
        right: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid transparent;
        border-right: 3px solid #C7D4FF;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #C7D4FF;
    }

    .ribbon.premium span {
        font-size: 10px;
        font-weight: bold;
        color: #1f1f1f;
        text-transform: uppercase;
        text-align: center;
        line-height: 20px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        width: 100px;
        display: block;
        background: #79A70A;
        background: linear-gradient(#FCCB34 0%, #FCED14 100%);
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 19px;
        right: -21px;
    }

    .ribbon.premium span::before {
        content: "";
        position: absolute;
        left: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid #FCED14;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #FCED14;
    }

    .ribbon.premium span::after {
        content: "";
        position: absolute;
        right: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid transparent;
        border-right: 3px solid #FCED14;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #FCED14;
    }

    .tooltip-container {
        position: relative;
        text-align: left;
    }

    .tooltip-container .right {
        width: 300px;
        top: 50%;
        left: 90%;
        margin-left: 10px;
        transform: translate(0, -50%);
        padding: 0;
        color: #EEEEEE;
        background-color: #444444;
        font-weight: normal;
        font-size: 13px;
        border-radius: 8px;
        position: absolute;
        z-index: 99999999;
        box-sizing: border-box;
        box-shadow: 0 1px 8px rgba(0, 0, 0, 0.5);
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.8s;
    }

    .tooltip-container .left {
        width: 300px;
        top: 50%;
        right: 90%;
        margin-right: 10px;
        transform: translate(0, -50%);
        padding: 0;
        color: #EEEEEE;
        background-color: #444444;
        font-weight: normal;
        font-size: 13px;
        border-radius: 8px;
        position: absolute;
        z-index: 99999999;
        box-sizing: border-box;
        box-shadow: 0 1px 8px rgba(0, 0, 0, 0.5);
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.8s;
    }

    .tooltip-container:hover .right {
        visibility: visible;
        opacity: 1;
    }

    .tooltip-container:hover .left {
        visibility: visible;
        opacity: 1;
    }

    .tooltip-container .text-content {
        padding: 10px 20px;
    }

    .boxed label {
        display: inline-block;
        min-width: 50px;
        padding: 10px;
        border: solid 1px #ccc;
        border-radius: 10px;
        transition: all 0.3s;
    }

    .boxed label.color-options {
        display: inline-block;
        margin-right: 5px;
        min-width: 0;
        width: 40px;
        height: 40px;
        padding: 10px;
        border: solid 1px #ccc;
        border-radius: 100%;
        transition: all 0.3s;
    }

    .boxed input[type="radio"] {
        display: none;
    }

    .boxed input[type="radio"]:checked+label {
        border: solid 1px #fccb34;
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
    }
</style>
@endpush

@push('script')
<script>

</script>
@endpush