@extends('layouts.shop.main')

@section('content')

@endsection

@push('script')
<script>
    $.ajax({
        url: "/web/cart",
        type: 'GET',
        success: function(res) {
            console.log(res);
        }
    });
</script>
@endpush