@extends('layouts.administrator.main')

@section('breadcrumbs')

@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h5>
                    Product Information
                </h5>
            </div>
            <div class="col-12">
                <div class="form-row">
                    <div class="col-12 col-md-2">
                        <img src="https://via.placeholder.com/1024" class="mw-100" alt="">
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="row">
                            <div class="col-12 col-md-3 form-group">
                                <label for="productName">Product Name</label>
                                <input type="text" id="productName" class="form-control" disabled value="Product Name" style="background-color: #ffffff;">
                            </div>
                            <div class="col-12 col-md-3 form-group">
                                <label for="productQuality">Product Quality</label>
                                <input type="text" id="productQuality" class="form-control" disabled value="Premium" style="background-color: #ffffff;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection