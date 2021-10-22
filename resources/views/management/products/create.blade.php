@extends('layouts.management.main')

@section('breadcrumbs')
{{ Breadcrumbs::view('partials.breadcrumbs.breadcrumbs-management', 'management.product.create') }}
@endsection

@section('content')
<img src="{{asset('/images/inProgress.gif')}}" alt="No Logo">
@endsection