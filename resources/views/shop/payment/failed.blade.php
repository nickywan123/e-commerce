@extends('layouts.shop.main')

@section('content')
<div class="container" style="position: relative; min-height: 85vh;">
    <div class="card container" style="position: absolute; left: 50%; top: 50%; transform: translate(-50%, -50%);">
        <div class="card-body">
            <h1 class="text-center">
                Oops, looks like something went wrong. Please try gain.
            </h1>
            <h3 class="text-center">
                Failed to process your payment.
            </h3>
            <div class="text-center mt-3">
                <a class="btn bjsh-btn-gradient" href="/shop/cart">Try Again</a>
            </div>
            <div class="mt-3">
                <p class="text-center">
                    Error: {{ $errorMessage }}
                </p>
            </div>
        </div>
    </div>
</div>
@endsection