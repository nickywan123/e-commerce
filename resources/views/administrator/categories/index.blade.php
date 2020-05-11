@extends('layouts.administrator.main')

@section('breadcrumb')

@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped" style="min-width: 1366px;">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td></td>
                        <td>Category Name</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td style="width: 5%;">
                            {{ $loop->iteration }}
                        </td>
                        <td style="width: 10%;">
                            <img class="mw-100" style="border-radius: 100%;" src="{{ asset('storage/' . $category->image->path . $category->image->filename) }}" alt="">
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