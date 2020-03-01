@extends('layouts.shop.main')

@section('content')
<div>
    <!-- Breadcrumb here -->
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-7 pt-1 pl-1 pr-1">
                <img src="{{ $product->images[0]->url }}" alt="" style="width: 100%; height: 450px">
            </div>
            <div class="col-12 col-md-5 pt-1 pl-1 pr-1">
                <div class="row">
                    <div class="col-12 text-md-left text-center">
                        <h1 class="pl-0 pr-0 text-capitalize" style="font-size: 2.5rem; margin: 0;">{{ $product->name }}</h1>
                        <p style="font-size: 1.5rem; font-weight: 550;">RM {{ $product->price }}</p>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-12 text-md-left text-center">
                        <p>{{ $product->summary }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pt-2">
                        <div class="w-100-sm w-50-md float-left-md pt-4 text-md-left text-center">
                            <p>Quantity</p>
                        </div>

                        <div class="w-100-sm w-50-md float-right-md pt-4">
                            <div class="input-group ">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                        <span class="fa fa-minus"></span>
                                    </button>
                                </span>
                                <input type=" text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                                        <span class="fa fa-plus"></span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pt-3 pb-3">
                        <a href="/shop/add-to-cart/{{ $product->id }}" class="btn btn-primary d-block">Add to cart</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    fetch('https://jsonplaceholder.typicode.com/posts').then(function(response) {
        // The API call was successful!
        console.log('success!', response);
    }).catch(function(err) {
        // There was an error
        console.warn('Something went wrong.', err);
    });
</script>
@endpush

@push('style')
<style>
    @media (max-width: 576px) {
        .hidden-sm {
            display: none;
        }

        .w-100-sm {
            width: 100%;
        }
    }

    @media (min-width: 768px) {
        .hidden-md {
            display: none;
        }

        .float-right-md {
            float: right;
        }

        .float-left-md {
            float: left;
        }

        .w-50-md {
            width: 50%;
        }
    }
</style>
@endpush

@push('script')
<script>
    //plugin bootstrap minus and plus
    //http://jsfiddle.net/laelitenetwork/puJ6G/
    $('.btn-number').click(function(e) {
        e.preventDefault();

        fieldName = $(this).attr('data-field');
        type = $(this).attr('data-type');
        var input = $("input[name='" + fieldName + "']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if (type == 'minus') {

                if (currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                }
                if (parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if (type == 'plus') {

                if (currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if (parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function() {
        $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {

        minValue = parseInt($(this).attr('min'));
        maxValue = parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());

        name = $(this).attr('name');
        if (valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if (valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }


    });
    $(".input-number").keydown(function(e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
            // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) ||
            // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script>
@endpush