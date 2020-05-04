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
                        <input type="text" name="product_code" id="product_code" value="{{ $product->product_code }}" class="form-control" readonly>
                    </div>

                    <div class="col-12 col-md-6 form-group">
                        <label for="product_quality">Product Quality</label>
                        <input type="text" name="product_quality" id="product_quality" value="{{ $product->quality->name }}" class="form-control" readonly>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-12 col-md-12 form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" name="product_name" id="product_name" value="{{ $product->name }}" class="form-control" readonly>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-12" style="border: 1px solid #f6f6f6;">
                        <div id="productImageCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                @foreach($product->images as $image)
                                <li data-target="productImageCarousel" data-slide-to="{{ $image->id }}"></li>
                                @endforeach
                            </ol>

                            <div class="carousel-inner">
                                @foreach($product->images as $image)
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
                        <p class="text-center">{{ $product->images->count() }} image(s)</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-8">
                <form action="">
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
                            <input type="number" name="price" id="price" class="form-control">
                        </div>

                        <div class="col-12 col-md-3 form-group">
                            <label for="member_price">Member Price</label>
                            <input type="number" name="member_price" id="member_price" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 col-md-3 form-group">
                            <label for="delivery_fee">Delivery Fee</label>
                            <input type="number" name="delivery_fee" id="delivery_fee" class="form-control">
                        </div>

                        <div class="col-12 col-md-3 form-group">
                            <label for="installation_fee">Installation Fee</label>
                            <input type="number" name="installation_fee" id="installation_fee" class="form-control">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 form-group">
                            <label for="product_description">Product Description</label>
                            <textarea name="product_description" id="product_description" cols="30" rows="10" class="form-control summernote">
                            </textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 form-group">
                            <label for="product_material">Product Materials <small>(Leave blank if not applicable)</small></label>
                            <textarea name="product_material" id="product_material" cols="30" rows="10" class="form-control summernote">
                            </textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 form-group">
                            <label for="product_consistency">Product Consistency <small>(Leave blank if not applicable)</small></label>
                            <textarea name="product_consistency" id="product_consistency" cols="30" rows="10" class="form-control summernote">
                            </textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 form-group">
                            <label for="product_package">Product Package <small>(Leave blank if not applicable)</small></label>
                            <textarea name="product_package" id="product_package" cols="30" rows="10" class="form-control summernote">
                            </textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-12 text-right">
                            <button type="submit" class="btn btn-primary">Create Product</button>
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
    });
</script>
@endpush