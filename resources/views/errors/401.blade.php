@extends('errors::illustrated-layout')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
@section('image')
<img class="img-fluid" src="https://loremflickr.com/768/731" alt="">
@endsection