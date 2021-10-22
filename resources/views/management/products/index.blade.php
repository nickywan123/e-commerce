@extends('layouts.management.main')

@section('breadcrumbs')
{{ Breadcrumbs::view('partials.breadcrumbs.breadcrumbs-management', 'management.product.create') }}
@endsection

@section('content')

<img src="{{asset('/images/workinprogress.jpg')}}" alt="No Logo">
@endsection