@extends('layouts.administrator.main')

@section('breadcrumbs')

@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <a href="{{ route('administrator.v1.products') }}" class="btn btn-dark" style="border-radius: 0.25rem; color: #ffffff;">Go Back Home</a>
    </div>
</div>
<div class="card shadow-sm mt-3">
    <div class="card-body">
        <!-- <div class="row">
            <div class="col-12 col-md-4">
                <form method="post" action="{{ route('administrator.products.store-image', ['productId' => $product->id]) }}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                    @csrf
                </form>
            </div>
        </div> -->
        <div class="row">
            <div class="col-12">
                <h4>
                    Product Information ..
                </h4>
            </div>
            <div class="col-12">
                <form action="{{ route('administrator.v1.products.update', ['id' => $product->id]) }}" id="edit-global-product-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12 col-md-4 text-md-right my-auto">
                            <p>
                                Product Name <small class="text-danger">*</small>
                            </p>
                        </div>
                        <div class="col-12 col-md-8 form-group">
                            <input type="text" id="productName" name="productName" class="form-control" value="{{ $product->name }}">
                            <div class="valid-feedback feedback-icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="invalid-feedback feedback-icon">
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 text-md-right my-auto">
                            <p>
                                Product Code <small class="text-danger">*</small>
                            </p>
                        </div>
                        <div class="col-12 col-md-8 form-group">
                            <input type="text" name="productCode" id="productCode" class="form-control" value="{{ $product->product_code }}">
                            <div class="valid-feedback feedback-icon">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="invalid-feedback feedback-icon">
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 text-md-right my-auto">
                            <p>
                                Product Quality <small class="text-danger">*</small>
                            </p>
                        </div>
                        <div class="col-12 col-md-8 form-group">
                            <select name="productQuality" id="productQuality" class="select2 form-control">
                                <option value="default">Select a quality..</option>
                                @foreach($qualities as $quality)
                                <option value="{{ $quality->id }}" {{ ($product->quality_id == $quality->id) ? 'selected' : '' }}>{{ $quality->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 text-md-right my-auto">
                            <p>
                                Product Featured Image <small class="text-danger">*</small>
                            </p>
                        </div>
                        <div class="col-12 col-md-8 form-group">
                            <img id="featuredPreview" src="@if ($product->defaultImage) {{ asset('storage/' . $product->defaultImage->path . $product->defaultImage->filename) }} @else {{ asset('assets/images/errors/image-not-found.png') }} @endif" alt="Preview Image" style="width: 15rem; height: auto; margin-bottom: 1rem;">
                            <input type="file" name="productImage" id="productImage" class="form-control-file" onchange="document.getElementById('featuredPreview').src = window.URL.createObjectURL(this.files[0])">
                            <small>Please make sure image is in 1:1 display ratio (square).</small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 text-md-right my-auto">
                            <p>
                                Image Gallery <small class="text-danger">*</small>
                            </p>
                        </div>
                        <div class="col-12 col-md-8 form-group">
                            <button type="button" class="btn btn-secondary shadow-sm" data-toggle="modal" data-target="#imageGalleryModal">Add More Image</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 text-md-right my-auto">
                            <p>
                                Product Brand Logo <small class="text-danger">*</small>
                            </p>
                        </div>
                        <div class="col-12 col-md-8 form-group">
                            <img id="brandLogoPreview" src="@if ($product->brandImage) {{ asset('storage/' . $product->brandImage->path . $product->brandImage->filename) }} @else {{ asset('assets/images/errors/image-not-found.png') }} @endif" alt="Preview Image" style="width: 15rem; height: auto; margin-bottom: 1rem;">
                            <input type="file" name="brandLogo" id="brandLogo" class="form-control-file" onchange="document.getElementById('brandLogoPreview').src = window.URL.createObjectURL(this.files[0])">
                            <small>Please make sure image is in 1:1 display ratio (square).</small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 text-md-right my-auto">
                            <p>
                                Product Details <small class="text-danger">*</small>
                            </p>
                        </div>
                        <div class="col-12 col-md-8 form-group">
                            <textarea name="productDetails" id="productDetails" cols="30" rows="10" class="form-control summernote">
                                {!! $product->details !!}
                            </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 text-md-right my-auto">
                            <p>
                                Product Descriptions <small class="text-danger">*</small>
                            </p>
                        </div>
                        <div class="col-12 col-md-8 form-group">
                            <textarea name="productDescriptions" id="productDetails" cols="30" rows="10" class="form-control summernote">
                                {!! $product->description !!}
                            </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 text-md-right my-auto">
                            <p>
                                Product Categories <small class="text-danger">*</small>
                            </p>
                        </div>
                        <div class="col-12 col-md-8 form-group">
                            <select class="select2 form-control" id="productCategory" name="categories[]" multiple="multiple">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ ($product->categories->contains($category->id)) ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 text-md-right my-auto">
                            <p>
                                Product Status
                            </p>
                        </div>
                        <div class="col-12 col-md-8 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="productPublished" id="productPublished" checked>
                                <label class="custom-control-label" for="productPublished">Publish after saving.</label>
                                <br>
                                <small>Uncheck if you want the product to not be published after saving.</small>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 text-right">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Image Gallery Modal -->
<div class="modal fade" id="imageGalleryModal" tabindex="-1" role="dialog" aria-labelledby="imageGalleryModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="{{ route('administrator.products.store-image', ['productId' => $product->id]) }}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                            @csrf
                        </form>
                    </div>
                    <div class="col-12">
                        <small>Image will be stored automatically.</small>
                        <small>Please make sure image is in 1:1 display ratio (square).</small>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    // Dropzone
    Dropzone.options.dropzone = {
        maxFilesize: 12,
        renameFile: function(file) {
            var productId = '{{ $product->id }}';
            var dt = new Date();
            var time = dt.getTime();
            var ext = file.name.split('.').pop();
            return productId + '-' + time + '.' + ext;
        },
        init: function() {
            myDropzone = this;
            $.ajax({
                url: "{{ route('administrator.v1.products.get-image', ['id' => $product->id])}}",
                type: 'GET',
                data: {
                    request: 'fetch'
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    $.each(response, function(key, value) {
                        var mockFile = {
                            filename: value.name,
                            size: value.size
                        };

                        myDropzone.emit("addedfile", mockFile);
                        myDropzone.emit("thumbnail", mockFile, "/storage/uploads/images/products/{{ $product->id }}/" + value.name);
                        myDropzone.emit("complete", mockFile);
                        myDropzone.files.push(mockFile);
                    });

                }
            });
        },
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        timeout: 50000,
        removedfile: function(file) {
            console.log(file.filename);
            var name;
            if (!file.filename) {
                name = file.upload.filename;
            } else {
                name = file.filename;
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                type: 'POST',
                url: "{{ route('administrator.v1.products.delete-image', ['id' => $product->id]) }}",
                data: {
                    filename: name
                },
                success: function(data) {
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }
            });
            var fileRef;
            return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        success: function(file, response) {
            console.log(response);
        },
        error: function(file, response) {
            return false;
        }
    };

    $(document).ready(function() {
        $('select.select2').select2({
            theme: 'bootstrap4',
        });

        $('.summernote').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
        });

        // Variable Initialization.
        // Input into variables.
        const productName = $('#productName');
        const productCode = $('#productCode');
        const productQuality = $('#productQuality');

        // Input validation
        productName.on('keyup', function() {
            if ($(this).val().length == 0) {
                $(this).removeClass('is-valid');
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
            }
        });

        productCode.on('keyup', function() {
            if ($(this).val().length == 0) {
                $(this).removeClass('is-valid');
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
                $(this).addClass('is-valid');
            }
        });
        // End input validation.

        // Form validation & submission.
        $('#edit-global-product-form').on('submit', function(event) {
            let errors = 0;

            // Validation
            if (productName.val().length == 0) {
                errors = errors + 1;
                productName.removeClass('is-valid');
                productName.addClass('is-invalid');
            }
            if (productCode.val().length == 0) {
                errors = errors + 1;
                productCode.removeClass('is-valid');
                productCode.addClass('is-invalid');
            }
            if (productQuality.val() == 'default') {
                errors = errors + 1;
                productQuality.removeClass('is-valid');
                productQuality.addClass('is-invalid');
            }
            if ($('#productCategory :selected').length == 0) {
                errors = errors + 1;
                $('#productCategory').removeClass('is-valid');
                $('#productCategory').addClass('is-invalid');
            }

            if (errors > 0) {
                toastr.error('Please make sure the input highlighted in RED is correctly filled in.');
                return false;
            } else {
                return true;
            }
        });


    });
</script>
@endpush

@push('style')
<style>
    .valid-feedback.feedback-icon {
        position: absolute;
        width: auto;
        bottom: 10px;
        right: 30px;
        margin-top: 0;
    }

    .invalid-feedback.feedback-icon {
        position: absolute;
        width: auto;
        bottom: 10px;
        right: 30px;
        margin-top: 0;
    }
</style>
@endpush