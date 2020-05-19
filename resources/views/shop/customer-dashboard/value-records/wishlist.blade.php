@extends('layouts.management.main-customer')



@section('content')

<br>

<div class="row ">
    <div class="col-12">
        <h2><strong>Perfect List</strong></h2>
    </div> 
</div>

<br>


<div class="row ">
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
                <td  class="align-top" style="max-width: 400px; border-top:white;">

                    <div class="row mb-5">
                        <div class="col-2 my-auto">
                            <a
                                href="/shop/product/">
                                <img class="responsive-img p-1"
                                    style="height:200px;width:200px; max-width:300px;"
                                    src="{{ asset('storage/' . $item->product->parentProduct->images[0]->path . $item->product->parentProduct->images[0]->filename)}}"
                                    alt="Product Image">
                            </a>
                        </div>
                        <div class="col-6 my-auto">

                        <h4>{{ $item->product->parentProduct->name}}</h4>
                            <a style="color:black; font-weight:bold;"
                                href="/shop/product/"></a>

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

                        <div class="offset-2 col-1 mt-4">
                            Quantity: xx
                        </div>

                        <div class="col-1">
                            <button class="text-capitalize bjsh-btn-gradient btn-size"><a
                                style="color:black; text-decoration:none;"
                                href="/shop/product/">
                                Buy Now</a>
                            </button>
                            
                            <button class="text-capitalize bjsh-btn-gradient btn-size mt-4"><a
                                style="color:black; text-decoration:none;"
                                href="/shop/product/">
                               Add to Cart</a>
                            </button>
                           
                            <i class="fa fa-trash-o fa-2x text-muted mt-4 ml-5"></i>
                        </div>
                    </div>
                </td>
            </tr>
          
            @endforeach
            <!-- Ending Item Template -->
            @else
            <div class="row">
                <div class="col-6">
                    <strong style="font-size: 15pt;">Your Perfect List is empty</strong>
                </div>
               
            </div>
            @endif
        </table>
     
    </div>
</div>



{{--Ending template--}}

<style>

.header-text-style{
    color:black;
}


.btn-size{
    width:100%;
}


.fa.fa-trash-o:before{
    color:#fbcc34;
    
 
}


</style>


@endsection