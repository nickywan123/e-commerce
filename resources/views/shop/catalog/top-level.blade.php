@extends('layouts.shop.main')

@section('content')
<div class="container-fluid pt-3 pb-3">
    <div class="row">
        <div class="col-12 col-md-8 offset-md-2">
            <h3 class="text-dark">Featured Categories</h3>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col-2">
            <div class="p-3 shadow-sm" style="background-color: #ffffff;">
                <h5 class="text-dark">Panel</h5>
                <ul class="list-unstyled pl-2">
                    <li>
                        <a href="">Company A</a>
                    </li>
                    <li>
                        <a href="">Company B</a>
                    </li>
                    <li>
                        <a href="">Company C</a>
                    </li>
                </ul>

                <h5 class="text-dark">Price</h5>
                <ul class="list-unstyled pl-2">
                    <li>
                        <a href="">Under RM25</a>
                    </li>
                    <li>
                        <a href="">RM25 - RM50</a>
                    </li>
                    <li>
                        <a href="">RM50 - RM100</a>
                    </li>
                    <li>
                        <a href="">RM100 - RM200</a>
                    </li>
                    <li>
                        <a href="">RM200 & Above</a>
                    </li>
                    <li>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <input type="text" class="form-control" id="price_min" placeholder="Min">
                            </div>
                            <div class="form-group col-6">
                                <input type="text" class="form-control" id="price_max" placeholder="Max">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection