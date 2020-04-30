@extends('layouts.administrator.main')

@section('breadcrumb')

@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <form action="">
            <div class="row">
                <div class="col-12 col-md-4">

                </div>

                <div class="col-12 col-md-8">
                    <div class="form-row">
                        <div class="col-12 col-md-6 form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" id="product_name" class="form-control">
                        </div>

                        <div class="col-12 col-md-6 form-group">
                            <label for="product_code">Product Code</label>
                            <input type="text" name="product_code" id="product_code" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 col-md-8 form-group">
                            <label for="product_details">Product Details</label>
                            <textarea name="product_details" id="product_details" cols="30" rows="5" class="form-control"></textarea>
                        </div>

                        <div class="col-12 col-md-4 form-group">
                            <label for="product_quality">Product Quality</label>
                            <select name="product_quality" id="product_quality" class="select2 form-control">
                                <option value="1">Standard</option>
                                <option value="2">Moderate</option>
                                <option value="3">Premium</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="product_description">Product Description</label>
                            <textarea name="product_description" id="product_description" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="category[]">Categories</label>
                            <select name="category[]" class="form-control select2" multiple="multiple">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


@push('script')
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endpush