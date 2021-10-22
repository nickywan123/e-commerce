@extends('layouts.administrator.main')

@section('breadcrumb')

@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <form action="">
            <div class="col-12">
                <div class="form-row">
                    <div class="col-6 form-group">
                        <label for="category_name">Category Name</label>
                        <input class="form-control" type="text" name="category_name" id="category_name">
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection