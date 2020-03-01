@extends('layouts.shop.main')

@section('content')
<div>
    <!-- Breadcrumb here -->
    <div class="container">
        <h1 class="mt-2 pl-0 pr-0" style="font-size: 2.3rem; color: #000;">Your Shopping Cart</h1>
        <hr>
        <div class="row">
            <div class="col-6">
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <img class="responsive-img" src="https://via.placeholder.com/520" alt="">
                            </div>
                            <div class="col-8">
                                <button class="btn btn-sm btn-danger float-right">Delete</button>
                                <h4>Product 1</h4>
                                <h5>RM 50.00</h5>
                                <div>
                                    <ul class="list-unstyled">
                                        <li>Color: Black</li>
                                        <li>Dimesions: 500 x 200 x 100</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <img class="responsive-img" src="https://via.placeholder.com/520" alt="">
                            </div>
                            <div class="col-8">
                                <button class="btn btn-sm btn-danger float-right" id="DeleteCartItem">Delete</button>
                                <h4>Product 1</h4>
                                <h5>RM 50.00</h5>
                                <div>
                                    <ul class="list-unstyled">
                                        <li>Color: Black</li>
                                        <li>Dimesions: 500 x 200 x 100</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                <div class="text-right">
                    <button class="btn btn-primary">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $('#DeleteCartItem').click(function() {
        $.ajax({
            url: '/api/shop/cart/delete/1',
            type: 'DELETE',
            contentType: 'application/json',
            success: function(result) {
                console.log(result);
                alert(result);
            },
            error: function(result) {
                //
            }
        });
    });
</script>
@endpush