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
                <h4>
                    Product Information
                </h4>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-md-2">
                        <img src="@if ($product->defaultImage) !Default Image Here ! @else {{ asset('assets/images/errors/image-not-found.png') }} @endif" class="mw-100" alt="">
                    </div>
                    <div class="col-12 col-md-10">
                        <div class="row">
                            <div class="col-12 col-md-4 form-group">
                                <label for="productName">Product Name</label>
                                <input type="text" id="productName" class="form-control" disabled value="{{ $parentProduct->name }}" style="background-color: #ffffff;">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="productQuality">Product Quality</label>
                                <input type="text" id="productQuality" class="form-control" disabled value="{{ $parentProduct->quality->name }}" style="background-color: #ffffff;">
                            </div>
                            <div class="col-12 col-md-4 form-group">
                                <label for="productCode">Product Code</label>
                                <input type="text" id="productCode" class="form-control" disabled value="{{ $parentProduct->product_code }}" style="background-color: #ffffff;">
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
                                <div class="col-12">
                                    <h5 class="mb-3">Product By Panel ..</h5>
                                </div>

                                <div class="col-12 col-md-4 text-md-right my-auto">
                                    <p>
                                        Panel Account ID <small class="text-danger">*</small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-8 form-group">
                                    <select name="panel_id" id="panel_id" class="select2 form-control">
                                        <option value="default">Please choose a panel.</option>
                                        @foreach($panels as $panel)
                                        <option value="{{ $panel->account_id }}" {{ ($product->panel_account_id == $panel->account_id) ? 'selected' : '' }}>{{ $panel->account_id }} - {{ $panel-> company_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-4 text-md-right my-auto">
                                    <p>
                                        Price (RM) <small class="text-danger">*</small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-8 form-group">
                                    <input type="text" name="price" id="price" class="form-control input-mask-price" value="{{ $product->price }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-md-4 text-md-right my-auto">
                                    <p>
                                        DC Customer's Price (RM) <small class="text-danger">*</small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-8 form-group">
                                    <input type="text" name="member_price" id="member_price" class="form-control input-mask-price" value="{{ $product->member_price }}">
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
                                        <option value="default">Please choose origin state..</option>
                                        @foreach($states as $state)
                                        <option value="{{ $state->id }}" {{ ($product->origin_state_id == $state->id) ? 'selected' : '' }}>{{ $state->name }}</option>
                                        @endforeach
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
                                                <option value="default">Please choose a state..</option>
                                                @foreach($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                @endforeach
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

                            <hr>

                            <h5 class="mb-3">Product Variations ..</h5>

                            <div class="row">
                                <div class="col-12 col-md-2 text-md-right my-auto">
                                    <p>
                                        Variations <small class="text-danger">*</small>
                                    </p>
                                </div>
                                <div class="col-12 col-md-10" id="variationContainer">
                                    <div class="row no-gutters default-item p-2 mb-1" style="border: 1px solid #b3b3b3; border-radius: 5px;">
                                        <div class="col-12 col-md-3 form-group p-1">
                                            <select name="product_variation[]" id="product_variation" class="select2 form-control">
                                                <option value="">Color</option>
                                                <option value="">Size</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-3 form-group p-1">
                                            <input type="text" name="product_variation_name[]" id="product_variation_name" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="col-12 col-md-6 form-group p-1">
                                            <input type="text" name="product_variation_price[]" id="product_variation_price" class="form-control input-mask-price d-inline" placeholder="Price" style="width: 49.3%;">

                                            <input type="text" name="product_variation_member_price[]" id="product_variation_member_price" class="form-control input-mask-price d-inline" placeholder="DC Customer Price" style="width: 49.3%;">
                                        </div>

                                        <div class="col-6 p-1">
                                            <button type="button" class="btn btn-danger d-none" style="width: 20%;" onclick="removeProductVariationElement(this);">
                                                <i class="fa fa-minus"></i>
                                            </button>

                                            <button type="button" class="btn btn-success" style="width: 20%;" onclick="addMoreProductVariationElement();">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-2">
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

        currentItem.find('select.select2').select2('destroy');
        currentItem.find('.btn.btn-danger').removeClass('d-none');
        currentItem.find('.btn.btn-success').addClass('d-none');
        currentItem.removeClass('default-item');

        let cloneItem = currentItem.clone(false).hide();

        cloneItem.find('select.select2').removeAttr('data-select2-id').removeAttr('id');
        cloneItem.find('option').removeAttr('data-select2-id');
        cloneItem.addClass('default-item');
        cloneItem.find('.btn.btn-danger').addClass('d-none');
        cloneItem.find('.btn.btn-success').removeClass('d-none');
        cloneItem.appendTo(availableInContainer);
        cloneItem.slideDown();

        availableInContainer.find('select.select2').select2({
            theme: 'bootstrap4',
        });

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
    }

    function removeAvailableInElement(element) {
        $(element).parent().parent().slideUp(500, function() {
            $(this).remove();
        });
    }

    function addMoreProductVariationElement() {
        let availableInContainer = $('#variationContainer')

        let currentItem = availableInContainer.find('.default-item');

        currentItem.find('select.select2').select2('destroy');
        currentItem.find('.btn.btn-danger').removeClass('d-none');
        currentItem.find('.btn.btn-success').addClass('d-none');
        currentItem.removeClass('default-item');

        let cloneItem = currentItem.clone(false).hide();

        cloneItem.find('select.select2').removeAttr('data-select2-id').removeAttr('id');
        cloneItem.find('option').removeAttr('data-select2-id');
        cloneItem.addClass('default-item');
        cloneItem.find('.btn.btn-danger').addClass('d-none');
        cloneItem.find('.btn.btn-success').removeClass('d-none');
        cloneItem.appendTo(availableInContainer);
        cloneItem.slideDown();

        availableInContainer.find('select.select2').select2({
            theme: 'bootstrap4',
        });

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
    }

    function removeProductVariationElement(element) {
        $(element).parent().parent().slideUp(500, function() {
            $(this).remove();
        });
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