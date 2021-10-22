@extends('errors::illustrated-layout')

@section('title', __('Action Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
@section('image')
<img class="img-fluid" src="https://loremflickr.com/768/731" alt="">
@endsection