@extends('layouts.administrator.main')

@section('breadcrumb')

@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">

        <div class="row">
            <div class="col-12 col-md-4">
                <form method="post" action="{{ route('administrator.products.store-image', ['productId' => $product->id]) }}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                    @csrf
                </form>
            </div>


            <div class="col-12 col-md-8">
                <form method="post" action="{{ route('administrator.products.update', ['productId' => $product->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-12 col-md-6 form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" name="product_name" id="product_name" class="form-control" value="{{ $product->name }}">
                        </div>

                        <div class="col-12 col-md-6 form-group">
                            <label for="product_code">Product Code</label>
                            <input type="text" name="product_code" id="product_code" class="form-control" value="{{ $product->product_code }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 col-md-4 form-group">
                            <label for="product_quality">Product Quality</label>
                            <select name="product_quality" id="product_quality" class="select2 form-control">
                                <option value="1">Standard</option>
                                <option value="2">Moderate</option>
                                <option value="3">Premium</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 form-group">
                            <label for="product_details">Product Details</label>
                            <textarea name="product_details" id="product_details" cols="30" rows="10" class="form-control summernote">
                                {!! $product->details !!}
                            </textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 form-group">
                            <label for="product_description">Product Description</label>
                            <textarea name="product_description" id="product_description" cols="30" rows="10" class="form-control summernote">
                                {!! $product->description !!}
                            </textarea>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-12 form-group">
                            <label for="category[]">Categories</label>
                            <select name="category[]" class="form-control select2" multiple="multiple">
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div> -->

                    <h5>Categories</h5>


                    <div class="row">
                        @foreach($categories as $category)
                        <div class="col-12 col-md-6 form-check mb-2 mt-2">
                            <input type="checkbox" name="categories[]" id="category_check{{ $category->id }}" value="{{ $category->id }}" class="form-check-input" {{ ($product->categories->contains($category->id)) ? 'checked' : '' }}>
                            <label class="font-weight-bold form-check-label" for="category_check{{ $category->id }}">{{ $category->name }}</label>

                            @foreach($category->childCategories as $childCategory)
                            <div class="row">
                                <div class="col-12 form-check ml-1 mr-1">
                                    <input type="checkbox" name="categories[]" id="category_check{{ $childCategory->id }}" value="{{ $childCategory->id }}" {{ ($product->categories->contains($childCategory->id)) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="category_check{{ $childCategory->id }}">{{ $childCategory->name }}</label>

                                    @foreach($childCategory->childCategories as $anotherChildCategory)
                                    <div class="row">
                                        <div class="col-12 form-check ml-1 mr-1">
                                            <input type="checkbox" name="categories[]" id="category_check{{ $anotherChildCategory->id }}" value="{{ $anotherChildCategory->id }}" {{ ($product->categories->contains($anotherChildCategory->id)) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="category_check{{ $anotherChildCategory->id }}">{{ $anotherChildCategory->name }}</label>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                    </div>

                    <h5 class="mt-4">Product Variations</h5>

                    @if($product->attributes->count() > 0)
                    @foreach($product->attributes as $attribute)
                    <input type="hidden" name="attribute_id[]" value="{{ $attribute->id }}">
                    <div class="row add-more-div">
                        <div class="col-12 col-md-12">
                            <div class="form-row">
                                <div class="col-12 col-md-3 form-group">
                                    <label for="attribute_type">Variation Type</label>
                                    <select name="attribute_type[1]" id="attribute_type" class="form-control my-auto">
                                        <option value="">Select Variation Type</option>
                                        <option value="color" {{ ($attribute->attribute_type == 'color') ? 'selected' : '' }}>Color</option>
                                        <option value="size" {{ ($attribute->attribute_type == 'size') ? 'selected' : '' }}>Size</option>
                                        <option value="light-temperature" {{ ($attribute->attribute_type == 'light-temperature') ? 'selected' : '' }}>Light Temperature</option>
                                    </select>
                                </div>

                                <div class="col-12 col-md-3 form-group">
                                    <label for="attribute_name">Variation Name</label>
                                    <input type="text" name="attribute_name[1]" id="attribute_name" class="form-control" placeholder="Yellow / 120cm * 200cm / Daylight" value="{{ $attribute->attribute_name }}">
                                </div>

                                <div class="col-12 col-md-3 form-group">
                                    <label for="color_hex">Variation Color <small>(Leave blank if not applicable.)</small></label>
                                    <div class="input-group color_picker">
                                        <input type="text" name="color_hex[1]" id="color_hex" class="form-control" value="{{ $attribute->color_hex }}">
                                        <span class="input-group-append">
                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 text-center text-md-left change-to-remove">
                                    @if($loop->first)
                                    <button type="button" id="add_more_variation" class="btn btn-primary add-more-button">Add more</button>
                                    @else
                                    <button type="button" id="remove_variation" class="btn btn-danger remove-button">Remove</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="row add-more-div">
                        <div class="col-12 col-md-12">
                            <div class="form-row">
                                <div class="col-12 col-md-3 form-group">
                                    <label for="attribute_type">Variation Type</label>
                                    <select name="attribute_type[1]" id="attribute_type" class="form-control my-auto">
                                        <option value="">Select Variation Type</option>
                                        <option value="color">Color</option>
                                        <option value="size">Size</option>
                                        <option value="light-temperature">Light Temperature</option>
                                    </select>
                                </div>

                                <div class="col-12 col-md-3 form-group">
                                    <label for="attribute_name">Variation Name</label>
                                    <input type="text" name="attribute_name[1]" id="attribute_name" class="form-control" placeholder="Yellow / 120cm * 200cm / Daylight">
                                </div>

                                <div class="col-12 col-md-3 form-group">
                                    <label for="color_hex">Variation Color <small>(Leave blank if not applicable.)</small></label>
                                    <div class="input-group color_picker">
                                        <input type="text" name="color_hex[1]" id="color_hex" class="form-control">
                                        <span class="input-group-append">
                                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 text-center text-md-left change-to-remove">
                                    <button type="button" id="add_more_variation" class="btn btn-primary add-more-button">Add more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <div class="col-12 text-right">
                            <button type="button" class="btn btn-danger">Cancel</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection

@push('style')
<style>
    .dz-image img {
        max-width: 100%;
    }

    .add-more-button {
        margin-top: 30px;
    }

    .remove-button {
        margin-top: 30px;
    }

    @media (max-width: 767px) {
        .add-more-button {
            margin-top: 0;
        }

        .remove-button {
            margin-top: 0;
        }
    }
</style>
@endpush


@push('script')
<script>
    $(document).ready(function() {
        $('.select2').select2();

        $('.summernote').summernote({
            height: 300, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
        });

        $('.color_picker').colorpicker();

        // Handle adding more variations input.
        $('body').on('click', '#add_more_variation', function() {
            var html = $('.add-more-div').last().clone(false);

            $(html).find('.change-to-remove').html('<button type="button" id="remove_variation" class="btn btn-danger remove-button">Remove</button>')

            $(html).find('#attribute_name').val('');

            $(html).find('#color_hex').val('');

            $('.add-more-div').last().after(html);

            $('.color_picker').colorpicker();
        });

        // Handle remove variation input.
        $('body').on('click', '#remove_variation', function() {
            $(this).parents('.add-more-div').remove();
        });
    });

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
                url: '{{ route("administrator.products.edit", ["productId" => $product->id])}}',
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
                url: "{{ route('administrator.products.delete-image', ['productId' => $product->id]) }}",
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
</script>
@endpush