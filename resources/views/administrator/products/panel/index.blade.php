@extends('layouts.administrator.main')

@section('breadcrumbs')

@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <div class="mb-3">
            <div class="text-right">
                <button type="button" class="btn btn-info text-light" data-toggle="modal" data-target="#newProductModal">New Product</button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="newProductModal" tabindex="-1" role="dialog" aria-labelledby="newProductModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newProductModalLabel">New Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="/administrator/products/panels/create" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <select name="new_product_id" id="new_product_id" class="select2 form-control input-lg" style="width: 100%;">
                                                @foreach($globalProducts as $globalProduct)
                                                <option value="{{ $globalProduct->id }}">
                                                    {{ $globalProduct->product_code }} - {{ $globalProduct->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Create Product</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Product Code</td>
                    <td>Image</td>
                    <td>Product Name</td>
                    <td>Categories</td>
                    <td>Sold By</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($panelProducts as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{ $product->parentProduct->product_code }}
                    </td>
                    <td style="width: 10%">
                        @if($product->parentProduct->images)
                        <img class="mw-100" style="border-radius: 100%;" src="{{ asset('storage/' . $product->parentProduct->images[0]->path . $product->parentProduct->images[0]->filename) }}" alt="">
                        @endif
                    </td>
                    <td>
                        {{ $product->parentProduct->name }}
                    </td>
                    <td>
                        <ul class="list-unstyled">
                            @foreach($product->parentProduct->categories as $category)
                            <li>
                                {{ $category->name }}
                            </li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        {{ $product->panel->company_name }}
                    </td>
                    <td>
                        <a style="color: white; font-style: normal; border-radius: 5px;" href="/administrator/products/edit/{{ $product->id }}" class="btn btn-primary shadow-sm">Edit</a>

                        <a style="color: white; font-style: normal; border-radius: 5px;" href="/administrator/products/product-unpublish/{{ $product->id }}" class="btn btn-danger shadow-sm">Disable</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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