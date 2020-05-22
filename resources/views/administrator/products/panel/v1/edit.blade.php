@extends('layouts.administrator.main')

@section('breadcrumbs')

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <a href="" class="btn btn-dark" style="border-radius: 0.25rem; color: #ffffff;">Go Back</a>
    </div>
</div>
<div class="card shadow-sm mt-3">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <h5>
                    Product Information
                </h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <img src="https://via.placeholder.com/1024" class="mw-100" alt="">
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="row">
                            <div class="col-12 col-md-4 form-group">
                                <label for="productName">Product Name</label>
                                <input type="text" id="productName" class="form-control" disabled value="Product Name" style="background-color: #ffffff;">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="productQuality">Product Quality</label>
                                <input type="text" id="productQuality" class="form-control" disabled value="Premium" style="background-color: #ffffff;">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="productCode">Product Code</label>
                                <input type="text" id="productCode" class="form-control" disabled value="bjs-product-code" style="background-color: #ffffff;">
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <!-- Start Form -->
                    <div class="col-12 col-md-10 offset-md-1">
                        <form action="">
                            <div class="row">
                                <div class="col-12 col-md-4 text-md-right my-auto">
                                    <p>
                                        Panel Account ID <small class="text-danger">*</small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-8 form-group">
                                    <select name="panel_id" id="panel_id" class="select2 form-control">
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-4 text-md-right my-auto">
                                    <p>
                                        Price <small class="text-danger">*</small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-8 form-group">
                                    <input type="text" name="price" id="price" class="form-control input-mask-price">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-4 text-md-right my-auto">
                                    <p>
                                        DC Customer's Price <small class="text-danger">*</small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-8 form-group">
                                    <input type="text" name="member_price" id="member_price" class="form-control input-mask-price">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-4 text-md-right my-auto">
                                    <p>
                                        Ships From <small class="text-danger">*</small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-8 form-group">
                                    <select name="ships_from" id="ships_from" class="select2 form-control">
                                        <option value="">Option 1</option>
                                        <option value="">Option 2</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-4 text-md-right my-auto">
                                    <p>
                                        Available In <small class="text-danger">*</small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-8" id="availableInContainer">
                                    <div class="row no-gutters default-item">
                                        <div class="col-12 col-md-6 form-group p-1">
                                            <select name="available_in[]" id="available_in" class="select2 form-control">
                                                <option value="">West Malaysia</option>
                                                <option value="">East Malaysia</option>
                                            </select>
                                        </div>
                                        <div class="col-10 col-md-6 form-group p-1">
                                            <input type="text" name="available_in_price[]" id="available_in_price" class="form-control input-mask-price d-inline-block" style="width: 75%;">

                                            <button type="button" class="btn btn-danger d-none" style="width: 20%;" onclick="removeAvailableInElement(this);">
                                                <i class="fa fa-minus"></i>
                                            </button>

                                            <button type="button" class="btn btn-success" style="width: 20%;" onclick="addMoreAvailableInElement();">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-4 text-md-right my-auto">
                                    <p>
                                        Product Description <small class="text-danger">*</small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-8 form-group">
                                    <textarea name="product_description" id="product_description" cols="30" rows="10" class="form-control summernote">
                                    </textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-4 text-md-right my-auto">
                                    <p>
                                        Product Materials <small class="text-danger">*</small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-8 form-group">
                                    <textarea name="product_material" id="product_material" cols="30" rows="10" class="form-control summernote">
                                    </textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-4 text-md-right my-auto">
                                    <p>
                                        Product Consistency <small class="text-danger">*</small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-8 form-group">
                                    <textarea name="product_consistency" id="product_consistency" cols="30" rows="10" class="form-control summernote">
                                    </textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-4 text-md-right my-auto">
                                    <p>
                                        Product Package <small class="text-danger">*</small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-8 form-group">
                                    <textarea name="product_package" id="product_package" cols="30" rows="10" class="form-control summernote">
                                    </textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    function addMoreAvailableInElement() {
        let availableInContainer = $('#availableInContainer')
        let currentItem = availableInContainer.find('.default-item');

        currentItem.find('.btn.btn-danger').removeClass('d-none');
        currentItem.find('.btn.btn-success').addClass('d-none');
        currentItem.removeClass('default-item');

        let cloneItem = currentItem.clone();

        cloneItem.addClass('default-item');
        cloneItem.find('.btn.btn-danger').addClass('d-none');
        cloneItem.find('.btn.btn-success').removeClass('d-none');
        cloneItem.appendTo(availableInContainer).show();
    }

    function removeAvailableInElement(element) {
        $(element).parent().parent().remove();
    }

    $(document).ready(function() {

        let priceSelectors = document.getElementsByClassName('input-mask-price');

        let priceInputMask = new Inputmask({
            'mask': '9999.99',
            'numericInput': true,
            'digits': 2,
            'digitsOptional': false,
            'placeholder': '0'
        });

        for (var i = 0; i < priceSelectors.length; i++) {
            priceInputMask.mask(priceSelectors.item(i));
        }

        $('.select2').select2({
            theme: 'bootstrap4',
        });

        $('.summernote').summernote({
            height: 200, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
        });
    });
</script>
@endpush

@push('style')
<style>

</style>
@endpush