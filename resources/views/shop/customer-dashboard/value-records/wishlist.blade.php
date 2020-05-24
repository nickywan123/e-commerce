@extends('layouts.management.main-customer')



@section('content')


{{------------------Desktop Layout---------------------}}

<div class="hidden-sm">

<div class="row mt-3">
    <div class="col-12">
        <h3 style="font-size:25pt; font-weight:700;">Perfect List</h3>
    </div> 
</div>

<br>


{{-- <div class="row ">
    <div class="col-2">
        <a href="#" class="header-text-style"
        style="border-bottom: 2px solid rgb(250, 172, 24);">
        <strong >My Favourite</strong>
        </a>
    </div>

    <div class="col-2">
        <a href="#" class="header-text-style"><strong>My Home List</strong>
        </a>
    </div>
    <div class="col-3">
        <a href="#" class="header-text-style"><strong>Perfect Home List</strong>
        </a>
    
    </div>  
</div> --}}


<div class="container-fluid m-2 p-0" >
    <a href="#" class="text-style"
        style="border-bottom: 2px solid rgb(250, 172, 24);" ><strong>My Favourite
               </strong></a>
    <a href="#" class="text-style" ><strong>My Home List</strong></a>
    <a href="#" class="text-style" ><strong>Perfect Home List</strong></a>
   
</div>

<hr>


{{--Template for wish list--}}



<div class="card shadow-sm ">
    <div class="card-body">
       
        {{-- <h4 style="font-weight:bold; color:rgb(250, 172, 24);">Purchase #: 
        </h4>
        --}}
        <table class="table">
            <!-- Starting Item Template -->
        @if(count($favourite))
         @foreach ($favourite as $item)   
            <tr>
                <td class="align-top" style="max-width: 400px; border-top:white;">
                    <div class="row mb-5">
                        <div class="col-2 my-auto">
                            <a
                                href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}">
                                <img class="responsive-img p-1"
                                    style="height:200px;width:200px; max-width:300px;"
                                    src="{{ asset('storage/' . $item->product->parentProduct->images[0]->path . $item->product->parentProduct->images[0]->filename)}}"
                                    alt="Product Image">
                            </a>
                        </div>
                        <div class="col-6 my-auto padding-left-md">

                        
                            <a style="color:black; font-weight:bold;"
                                href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}">
                                <h4>{{ $item->product->parentProduct->name}}</h4>
                            </a>

                            <p class="text-capitalize">Sold by: {{$item->product->panel->company_name}}
                               </p>
                            <p class="text-capitalize">Unit Price:
                                <?php echo 'RM ' . number_format(($item->product->price / 100), 2); ?>
                            </p>
                            {{-- <button class="text-capitalize bjsh-btn-gradient"><a
                                    style="color:black; text-decoration:none;"
                                    href="/shop/product/">
                                    Buy It Again</a></button> --}}
                            
                            <p style="margin-top: 100px;">Added on: {{$item->created_at}}</p>
                        </div>

                        <div class="offset-2 mt-4">
                            {{-- Quantity: xx --}}
                        </div>

                        <div class="col-2 col-md-2 padding-button">
                            <button class="btn btn-md bjsh-btn-product-page font-weight-bold w-100 bjsh-button-mobile"><a
                                style="color:black; text-decoration:none;"
                                href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}">
                                Buy Now</a>
                            </button>
                            
                           
                            <form id="add-to-cart-form" style="display: inline;" method="POST" action="{{ route('shop.cart.add-item') }}">
                                @method('POST')
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $item->product_id }}">
                                <input type="hidden" id="product_attribute_color" name="product_attribute_color" value="">
                                <input type="hidden" id="product_attribute_size" name="product_attribute_size" value="">
                                <input type="hidden" id="product_attribute_temperature" name="product_attribute_temperature" value="">
                                <input type="hidden" name="productQuantity" value="1">
                            <button type="submit" class="btn btn-md bjsh-btn-product-page font-weight-bold w-100 bjsh-button-mobile mt-4" style="color:black; text-decoration:none;">
                             Add to Cart
                            </button>
                            </form>
                           
                           <div class="row">
                               <div class="offset-2 col-5">
                                <i class="fa fa-trash-o fa-2x text-muted mt-4 padding-left-icon"></i>
                               </div>
                           </div>
                        </div>
                    </div>
                    <hr>
                </td>
            </tr>
           
            @endforeach
            
            <!-- Ending Item Template -->
            @else
            <div class="row">
                <div class="col-12">
                    <strong class="mr-2 " style="font-size:15pt;"> Your Perfect List is empty.</strong>
                    <a class="btn bjsh-btn-gradient" href="/shop">Continue Shopping</a>
                </div>       
            </div>
            @endif    
        </table>
     
    </div>
</div>

</div>

{{--Ending template--}}




{{------------Mobile Layout--------------}}

<div class="hidden-md">
    <div class="row mt-3">
        <div class="col-12">
            <h3 style="font-size:25pt; font-weight:700;">Perfect List</h3>
        </div> 
    </div>


  
    <div class="row">
        <div class="col-4">
            <a class="header-text-style" style="font-size:9pt; border-bottom:1px solid rgb(250, 172, 24);" href="">My Favourite</a>
        </div>
        <div class="col-4">
           <a class="header-text-style" style="font-size:9pt;" href="">My Home List</a>
        </div>
        <div class="col-4">
            <a class="header-text-style" style="font-size:9pt;" href="">Perfect List</a>
        </div>
    </div>



    <div class="card shadow-sm ">
        <div class="card-body">
           
            {{-- <h4 style="font-weight:bold; color:rgb(250, 172, 24);">Purchase #: 
            </h4>
            --}}
            <table class="table">
                <!-- Starting Item Template -->
            @if(count($favourite))
             @foreach ($favourite as $item)   
                <tr>
                    <td class="align-top">
    
                        <div class="row mb-5">
                            <div class="col-12">
                                <a
                                    href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}">
                                    <img class="responsive-img p-1"
                                        
                                        src="{{ asset('storage/' . $item->product->parentProduct->images[0]->path . $item->product->parentProduct->images[0]->filename)}}"
                                        alt="Product Image">
                                </a>
                            </div>
                            <div class="col-12">
          
                                <a style="color:black; font-weight:bold; font-size:10pt; text-align:center;"
                                    href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}">
                                    <h4>{{ $item->product->parentProduct->name}}</h4>
                                </a>
    
                                <p style="font-size:10pt;" class="text-capitalize">Sold by: {{$item->product->panel->company_name}}
                                   </p>
                                <p style="font-size:10pt;" class="text-capitalize">Unit Price:
                                    <?php echo 'RM ' . number_format(($item->product->price / 100), 2); ?>
                                </p>
                                {{-- <button class="text-capitalize bjsh-btn-gradient"><a
                                        style="color:black; text-decoration:none;"
                                        href="/shop/product/">
                                        Buy It Again</a></button> --}}
                                
                                <p style="font-size:10pt;">Added on: {{$item->created_at}}</p>
                            </div>
    
                            {{-- <div class="offset-2 col-1 mt-4">
                                Quantity: xx
                            </div>
     --}}
                            <div class="col-12">
                                <button class="text-capitalize bjsh-btn-gradient btn-size"><a
                                    style="color:black; text-decoration:none;"
                                    href="/shop/product/{{ $item->product->parentProduct->name_slug}}?panel={{$item->product->panel_account_id}}">
                                    Buy Now</a>
                                </button>
                                <form id="add-to-cart-form" style="display: inline;" method="POST" action="{{ route('shop.cart.add-item') }}">
                                    @method('POST')
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $item->product_id }}">
                                    <input type="hidden" id="product_attribute_color" name="product_attribute_color" value="">
                                    <input type="hidden" id="product_attribute_size" name="product_attribute_size" value="">
                                    <input type="hidden" id="product_attribute_temperature" name="product_attribute_temperature" value="">
                                    <input type="hidden" name="productQuantity" value="1">
                                <button type="submit" class="text-capitalize bjsh-btn-gradient btn-size mt-4" style="color:black; text-decoration:none;">
                                 Add to Cart
                                </button>
                                </form>
                                <div class="row">
                                    <div class="offset-4 offset-sm-3 col-3">
                                        <i class="fa fa-trash-o fa-2x text-muted mt-4 "></i>
                                    </div>
                                </div>
                               
                            </div>
                           
                        </div>
                      
                    </td>
                </tr>
                
                @endforeach
                <!-- Ending Item Template -->
                @else
                <div class="row">
                    <div class="col-12">
                        <strong class="mr-2 " style="font-size:15pt;"> Your Perfect List is empty.</strong>
                        <a class="btn bjsh-btn-gradient" href="/shop">Continue Shopping</a>
                    </div>
                   
                </div>
                @endif
               
            </table>
            <hr>
        </div>
    </div>


</div>


<style>

@media(min-width:1320px) and (max-width:1500px){
    .padding-left-md{
        padding-left: 6rem !important;
    }
    .padding-left-icon{
        padding-left: 3rem !important;
    }
}

.text-style {
            color: rgb(250, 172, 24);
            margin-right: 45px;

        }


.header-text-style{
    color: rgb(250, 172, 24);
}


.btn-size{
    width:100%;
}


.fa.fa-trash-o:before{
    color:#fbcc34;
    
 
}

@media(max-width:767px) {
            .hidden-sm {
                display: none;
            }

        }

 @media(min-width:767px) {
    .hidden-md {
                display: none;
            }

        }

@media(min-width: 760px) and (max-width:1200px){
    .padding-left-md{
        padding-left: 8rem !important;
    }
    .padding-button{
        padding: 0px;
        
    }
    .padding-left-icon{
        padding-left: 1rem;
    }
}

@media(min-width:1500px){
            .padding-left-icon{
        padding-left: 4rem !important;
    }
        }



</style>


<script>

// function onPageload() {
           

//             inputColor = $('#product_attribute_color');
//             inputSize = $('#product_attribute_size');
//             inputTemperature = $('#product_attribute_temperature');

//             priceTag = $('#price_tag');
//             memberPriceTag = $('#member_price_tag');

//             if ($('input[name="color"]:checked').val()) {
//                 panelColor = $('input[name="color"]:checked').val();
//             } else {
//                 panelColor = null;
//             }

//             if ($('input[name="size"]:checked').val()) {
//                 panelSize = $('input[name="size"]:checked').val();
//             } else {
//                 panelSize = null;
//             }

//             if ($('input[name="temperature"]:checked').val()) {
//                 panelTemperature = $('input[name="temperature"]:checked').val();
//             } else {
//                 panelTemperature = null;
//             }

//             let priceByAttr;
//             let mmbrPriceByAttr;

//             if (
//                 $('input[name="color"]:checked').data('price')) {
//                 priceByAttr = $('input[name="color"]:checked').data('price');
//             } else if ($('input[name="size"]:checked').data('price')) {
//                 priceByAttr = $('input[name="size"]:checked').data('price');
//             } else if ($('input[name="temperature"]:checked').data('price')) {
//                 priceByAttr = $('input[name="temperature"]:checked').data('price')
//             } else {
//                 priceByAttr = 0;
//             }

//             if ($('input[name="color"]:checked').data('member-price')) {
//                 mmbrPriceByAttr = $('input[name="color"]:checked').data('member-price');
//             } else if ($('input[name="size"]:checked').data('price')) {
//                 mmbrPriceByAttr = $('input[name="size"]:checked').data('member-price');
//             } else if ($('input[name="temperature"]:checked').data('member-price')) {
//                 mmbrPriceByAttr = $('input[name="temperature"]:checked').data('member-price')
//             } else {
//                 mmbrPriceByAttr = 0;
//             }

//             inputColor.val(panelColor);
//             inputSize.val(panelSize);
//             inputTemperature.val(panelTemperature);


//             if (priceByAttr != 0) {
//                 priceTag.text('RM ' + priceByAttr);
//             }

//             if (mmbrPriceByAttr != 0) {
//                 memberPriceTag.text('RM ' + mmbrPriceByAttr);
//             }
//         }

//         $('.panel-product-attributes').on('click', function(e) {
//             inputColor = $('#product_attribute_color');
//             inputSize = $('#product_attribute_size');
//             inputTemperature = $('#product_attribute_temperature');
           

//             if ($('input[name="color"]:checked').val()) {
//                 panelColor = $('input[name="color"]:checked').val();
//             } else {
//                 panelColor = null;
//             }

//             if ($('input[name="size"]:checked').val()) {
//                 panelSize = $('input[name="size"]:checked').val();
//             } else {
//                 panelSize = null;
//             }

//             if ($('input[name="temperature"]:checked').val()) {
//                 panelTemperature = $('input[name="temperature"]:checked').val();
//             } else {
//                 panelTemperature = null;
//             }

//             if (
//                 $('input[name="color"]:checked').data('price')) {
//                 priceByAttr = $('input[name="color"]:checked').data('price');
//             } else if ($('input[name="size"]:checked').data('price')) {
//                 priceByAttr = $('input[name="size"]:checked').data('price');
//             } else if ($('input[name="temperature"]:checked').data('price')) {
//                 priceByAttr = $('input[name="temperature"]:checked').data('price')
//             } else {
//                 priceByAttr = 0;
//             }

//             if ($('input[name="color"]:checked').data('member-price')) {
//                 mmbrPriceByAttr = $('input[name="color"]:checked').data('member-price');
//             } else if ($('input[name="size"]:checked').data('price')) {
//                 mmbrPriceByAttr = $('input[name="size"]:checked').data('member-price');
//             } else if ($('input[name="temperature"]:checked').data('member-price')) {
//                 mmbrPriceByAttr = $('input[name="temperature"]:checked').data('member-price')
//             } else {
//                 mmbrPriceByAttr = 0;
//             }

//             inputColor.val(panelColor);
//             inputSize.val(panelSize);
//             inputTemperature.val(panelTemperature);
          

//             if (priceByAttr != 0) {
//                 priceTag.text('RM ' + priceByAttr);
//             }

//             if (mmbrPriceByAttr != 0) {
//                 memberPriceTag.text('RM ' + mmbrPriceByAttr);
//             }
//         });

//         onPageload();

</script>
@endsection