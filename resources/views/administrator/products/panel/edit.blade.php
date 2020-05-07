@extends('layouts.administrator.main')

@section('breadcrumbs')

@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="form-row">
                    <div class="col-12 col-md-6 form-group">
                        <label for="product_code">Product Code</label>
                        <input type="text" name="product_code" id="product_code" value="{{ $product->parentProduct->product_code }}" class="form-control" readonly>
                    </div>

                    <div class="col-12 col-md-6 form-group">
                        <label for="product_quality">Product Quality</label>
                        <input type="text" name="product_quality" id="product_quality" value="{{ $product->parentProduct->quality->name }}" class="form-control" readonly>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 col-md-12 form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" name="product_name" id="product_name" value="{{ $product->parentProduct->name }}" class="form-control" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-12" style="border: 1px solid #f6f6f6;">
                        <div id="productImageCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($product->parentProduct->images as $image)
                                <li data-target="productImageCarousel" data-slide-to="{{ $image->id }}"></li>
                                @endforeach
                            </ol>

                            <div class="carousel-inner">
                                @foreach($product->parentProduct->images as $image)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <img class="d-block mw-100" src="{{ asset('storage/' . $image->path . $image->filename) }}" alt="">
                                </div>
                                @endforeach
                            </div>

                            <a href="#productImageCarousel" class="carousel-control-prev" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a href="#productImageCarousel" class="carousel-control-next" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <p class="text-center">{{ $product->parentProduct->images->count() }} image(s)</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8">
                <form action="/administrator/products/panels/update/{{ $product->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-12 col-md-6 form-group">
                            <label for="panel_id">Panel Account Id</label>
                            <select name="panel_id" id="panel_id" class="select2 form-control">
                                @foreach($panels as $panel)
                                <option value="{{ $panel->account_id }}">{{ $panel->account_id}} - {{ $panel->company_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 col-md-3 form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}">
                        </div>

                        <div class="col-12 col-md-3 form-group">
                            <label for="member_price">Member Price</label>
                            <input type="number" name="member_price" id="member_price" class="form-control" value="{{ $product->member_price }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 col-md-3 form-group">
                            <label for="delivery_fee">Delivery Fee</label>
                            <input type="number" name="delivery_fee" id="delivery_fee" class="form-control" value="{{ $product->delivery_fee }}">
                        </div>

                        <div class="col-12 col-md-3 form-group">
                            <label for="installation_fee">Installation Fee</label>
                            <input type="number" name="installation_fee" id="installation_fee" class="form-control" value="{{ $product->installation_fee }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 form-group">
                            <label for="product_description">Product Description</label>
                            <textarea name="product_description" id="product_description" cols="30" rows="10" class="form-control summernote">
                                {!! $product->product_description !!}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 form-group">
                            <label for="product_material">Product Materials <small>(Leave blank if not applicable)</small></label>
                            <textarea name="product_material" id="product_material" cols="30" rows="10" class="form-control summernote">
                                {!! $product->product_material !!}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 form-group">
                            <label for="product_consistency">Product Consistency <small>(Leave blank if not applicable)</small></label>
                            <textarea name="product_consistency" id="product_consistency" cols="30" rows="10" class="form-control summernote">
                                {!! $product->product_consistency !!}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 form-group">
                            <label for="product_package">Product Package <small>(Leave blank if not applicable)</small></label>
                            <textarea name="product_package" id="product_package" cols="30" rows="10" class="form-control summernote">
                                {!! $product->product_package !!}
                            </textarea>
                        </div>
                    </div>

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

                                <div class="col-12 col-md-3 form-group">
                                    <label for="attribute_price">Price <small>(Leave blank if not applicable.)</small></label>
                                    <input type="text" name="attribute_price[]" id="attribute_price" class="form-control" placeholder="1000" value="{{ $attribute->price }}">
                                </div>

                                <div class="col-12 col-md-3 form-group">
                                    <label for="attribute_member_price">Member Price <small>(Leave blank if not applicable.)</small></label>
                                    <input type="text" name="attribute_member_price[]" id="attribute_member_price" class="form-control" placeholder="1000" value="{{ $attribute->member_price }}">
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

                                <div class="col-12 col-md-3 form-group">
                                    <label for="attribute_price">Price <small>(Leave blank if not applicable.)</small></label>
                                    <input type="text" name="attribute_price[]" id="attribute_price" class="form-control" placeholder="1000">
                                </div>

                                <div class="col-12 col-md-3 form-group">
                                    <label for="attribute_member_price">Member Price <small>(Leave blank if not applicable.)</small></label>
                                    <input type="text" name="attribute_member_price[]" id="attribute_member_price" class="form-control" placeholder="1000">
                                </div>

                                <div class="col-12 col-md-3 text-center text-md-left change-to-remove">
                                    <button type="button" id="add_more_variation" class="btn btn-primary add-more-button">Add more</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="form-row">
                        <div class="col-12 text-right">
                            <input type="hidden" name="global_product_id" value="{{ $product->id }}">
                            <button type="submit" class="btn btn-primary">Save Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- Styles -->
@push('style')
<style>
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

<!-- Scripts -->
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

        $('body').on('click', '#add_more_variation', function() {
            var html = $('.add-more-div').last().clone(false);

            $(html).find('.change-to-remove').html('<button type="button" id="remove_variation" class="btn btn-danger remove-button">Remove</button>')

            $(html).find('#attribute_name').val('');

            $(html).find('#color_hex').val('');

            $(html).find('#attribute_price').val('');

            $(html).find('#attribute_member_price').val('');

            $('.add-more-div').last().after(html);

            $('.color_picker').colorpicker();
        });

        // Handle remove variation input.
        $('body').on('click', '#remove_variation', function() {
            $(this).parents('.add-more-div').remove();
        });
    });
</script>
@endpush