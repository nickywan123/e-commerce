@extends('layouts.app')

@section('content')


<script>
    $.ajax({

        url: '/newpage',
        type: 'POST',
        data: requestString,
        dataType: "text",
        processData: false,
        contentType: false,
        success: function(completeHtmlPage) {
            alert("Success");
            $("html").empty();
            $("html").append(completeHtmlPage);

        },
        error: function() {
            alert("error in loading");
        }

    });
</script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://fonts.googleapis.com/css?family=Libre+Franklin" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<!--<div class="container">
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
</div>-->
@endsection
