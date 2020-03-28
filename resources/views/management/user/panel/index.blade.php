@extends('layouts.management.main')

@section('breadcrumbs')
{{ Breadcrumbs::view('partials.breadcrumbs.breadcrumbs-management', 'management.product.create') }}
@endsection

@section('content')
<div>
    <div class="row mb-2">
        <div class="col-6">

        </div>
        <div class="col-6 text-right">
            <a href="{{ route('management.user.panel.create') }}" class="btn bjsh-btn-gradient">Create New Panel</a>
        </div>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>No.</th>
                    <th>Company Name</th>
                    <th>Company SSM</th>
                    <th>Email</th>
                    <th>PIC Name</th>
                    <th>PIC Email</th>
                    <th>PIC Contact</th>
                </tr>
                @foreach($panels as $panel)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $panel->company_name }}</td>
                    <td>{{ $panel->ssm_number }}</td>
                    <td>{{ $panel->user->email }}</td>
                    <td>{{ $panel->pic_name }}</td>
                    <td>{{ $panel->pic_email }}</td>
                    <td>{{ $panel->pic_contact }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection