@extends('layouts.administrator.main')

@section('breadcrumbs')

@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>Product Code</td>
                    <td>Image</td>
                    <td>Product Name</td>
                    <td>Categories</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td style="width: 5%;">{{ $loop->iteration }}</td>
                    <td style="width: 15%;">{{ $product->product_code }}</td>
                    <td style="width: 10%">
                        @if($product->images)
                        <img class="mw-100" style="border-radius: 100%;" src="{{ asset('storage/' . $product->images[0]->path . $product->images[0]->filename) }}" alt="">
                        @endif
                    </td>
                    <td style="width: 35%;">{{ $product->name }}</td>
                    <td style="width: 15%;">
                        <ul class="list-unstyled">
                            @foreach($product->categories as $category)
                            <li>
                                {{ $category->name }}
                            </li>
                            @endforeach
                        </ul>
                    </td>
                    <td style="width: 20%;">
                        <a style="color: white; font-style: normal; border-radius: 5px;" href="/administrator/products/edit/{{ $product->id }}" class="btn btn-primary shadow-sm">Edit</a>

                        @if($product->product_status == 1)
                        <a style="color: white; font-style: normal; border-radius: 5px;" href="/administrator/products/product-unpublish/{{ $product->id }}" class="btn btn-danger shadow-sm">Disable</a>
                        @endif

                        @if($product->product_status == 2)
                        <a style="color: white; font-style: normal; border-radius: 5px;" href="/administrator/products/product-publish/{{ $product->id }}" class="btn btn-info shadow-sm">Enable</a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection