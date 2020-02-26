@extends('layouts.shop.main')

@section('content')
<div class="container pl-0 pr-0">
    <div>
        <img class="w-100" src="https://ww8.ikea.com/seaapp3/banners/carousel/wk7/my/en/LaunchThreeHomePage_carousel.jpg" style="height: 600px; width: 1920px;" alt="">
    </div>
    <div class="pt-1">
        @foreach ($categories as $category)
        <div class="heading-part">
            <h1 class="main-title">{{ $category->name }}</h1>
        </div>
        <div class="row pt-3">
            @foreach($category->childCategory as $childCategory)
            <div class="col-lg-2 col-6">
                <a href="/shop/category/{{ $childCategory->slug }}">
                    <img src="{{ asset('assets/images/category-icons/'.$childCategory->image->url) }}" alt="{{ $childCategory->name }}" class="w-100 rounded">
                    <p class="text-center pt-1 text-capitalize" style="font-size: 1.2rem;">{{ $childCategory->name }}</p>
                </a>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</div>
@endsection

@push('style')
<style>
    .heading-part {
        border-bottom: 3px solid #e5e5e5;
        display: inline-block;
        width: 100%;
    }

    .main-title {
        margin-bottom: 0;
        font-size: 1.5rem;
        float: left;
        text-transform: uppercase;
    }

    .main-title::after {
        border-bottom: 3px solid #552244;
        content: "";
        display: block;
        margin-bottom: -3px;
        padding: 2px;
    }
</style>
@endpush

@push('script')
<script>
    $(document).ready(function() {
        // Example get request
        // $.get('https://swapi.co/api/people/1/', // url
        //     function(data, textStatus, jqXHR) { // success callback
        //         alert('status: ' + textStatus + ', data:' + data.name);
        //     });
    });
</script>
@endpush