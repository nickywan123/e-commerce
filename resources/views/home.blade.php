@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Select your account to view:</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

              

 <br>  

                    @can('view shop')
                    <a href="/shop">Visit Shop</a>
                    @endcan
                    <br>
                    @can('view dealer')
                    <a href="/dashboard/dealer">Visit Dealer Dashboard</a>
                    @endcan
                    <br>
                    @can('view panel')
                    <a href="/dashboard/panel">Visit Panel Dashboard</a>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
