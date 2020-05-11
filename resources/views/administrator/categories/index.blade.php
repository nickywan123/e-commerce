@extends('layouts.administrator.main')

@section('breadcrumb')

@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <div>
            <div class="row">
                <div class="col-12 text-right p-2">
                    <a href="{{ route('administrator.categories.create') }}" style="color: white; font-style: normal; border-radius: 5px;" class="btn btn-dark">Create New Category</a>
                </div>
            </div>
        </div>
        <div class="table-responsive m-2">
            <table id="categories-table" class="table table-striped table-bordered" style="min-width: 1366px; width:">
                <thead>
                    <tr>
                        <td style="width: 1%;">No.</td>
                        <td></td>
                        <td>Category Name</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td class="text-center">
                            {{ $loop->iteration }}
                        </td>
                        <td style="width: 10%;">
                            <img class="mw-100" style="border-radius: 10px;" src="{{ asset('storage/' . $category->image->path . $category->image->filename) }}" alt="">
                        </td>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td style="width: 20%;">
                            <a style="color: white; font-style: normal; border-radius: 5px;" href="/administrator/categories/edit/{{ $category->id }}" class="btn btn-primary">Edit</a>
                            <a style="color: white; font-style: normal; border-radius: 5px;" href="/administrator/categories/delete/{{ $category->id }}" class="btn btn-danger">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function() {
        $('#categories-table').DataTable();
    });
</script>
@endpush