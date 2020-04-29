@extends('layouts.shop.main')



@section('content')
<div class="col-12 col-md-10 offset-md-1" style="min-height: 65vh;">
    <div class="row">
        <div class="col-12 mb-1">
            @if($categoryLevel == 1)
            {{ Breadcrumbs::view('partials.breadcrumbs.breadcrumbs', 'shop.category.first', $category) }}
            @endif

            @if($categoryLevel == 2)
            {{ Breadcrumbs::view('partials.breadcrumbs.breadcrumbs', 'shop.category.second', $category) }}
            @endif

            @if($categoryLevel == 3)
            {{ Breadcrumbs::view('partials.breadcrumbs.breadcrumbs', 'shop.category.third', $category, $parentCategory) }}
            @endif
        </div>
    </div>
    <div class="row pb-4">
        <div class="col-12 mb-1">
            <h3 class="text-muted">{{ $category->name }}</h3>
        </div>
    </div>

    @if($childCategories->count() > 0)
    <div class="row pb-1">
        <div class="col-12 mb-1">
            <h3 class="text-dark font-weight-bold">Multi Needs</h3>
            <hr>
        </div>
    </div>

    <!-- Child Categories -->
    <div class="row custom-mb-5">
        @foreach($childCategories as $childCategory)
        @if($childCategory->childCategories->count() != 0)
        <div class="col-6 col-md-2 text-center">
            <div class="animated-category-container">
                <div class="animated-category-image-container">
                    <img src="{{ asset('storage/' . $childCategory->image->path . '/' . $childCategory->image->filename) }}" alt="{{ $childCategory->name }}">
                    <p>{{ $childCategory->name }}</p>
                </div>
                <div class="animated-category-list-container">
                    <hr class="w-50 mt-1 mb-1">
                    <ul class="list-unstyled">
                        @foreach($childCategory->childCategories as $anotherChildCategory)
                        <li>
                            <a class="animated-category-list-container-item category-link" data-value="{{ $anotherChildCategory->slug }}" data-name="{{ $anotherChildCategory->name }}" href="javascript:void(0)">{{ $anotherChildCategory->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @else
        <div class="col-6 col-md-2 text-center">
            <a class="category-item category-link" data-value="{{ $childCategory->slug }}" data-name="{{ $childCategory->name }}" href="javascript:void(0)">
                <div class="category-container">
                    <div class="category-image-container">
                        <img src="{{ asset('storage/' . $childCategory->image->path . '/' . $childCategory->image->filename) }}" alt="{{ $childCategory->name }}" alt="{{ $childCategory->name }}">
                        <p>{{ $childCategory->name }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @endforeach
    </div>
    @endif

    <div class="row pb-1" id="scroll-to">
        <div class="col-12 mb-1">
            <h3 class="text-dark font-weight-bold">Focus Deals <small id="child-category-indicator" class='text-muted text-capitalize'></small></h3>
            <div class="boxed">
                <!-- <input type="radio" class="catalog-quality-filter" id="catalog-quality-all" name="catalog-quality" value="" checked>
                <label for="catalog-quality-all">All</label> -->

                <input type="radio" class="catalog-quality-filter" id="catalog-quality-standard" name="catalog-quality" value="standard">
                <label for="catalog-quality-standard">Standard</label>

                <input type="radio" class="catalog-quality-filter" id="catalog-quality-moderate" name="catalog-quality" value="moderate">
                <label for="catalog-quality-moderate">Moderate</label>

                <input type="radio" class="catalog-quality-filter" id="catalog-quality-premium" name="catalog-quality" value="premium" checked>
                <label for="catalog-quality-premium">Premium</label>
            </div>
            <hr style="margin-top: 0.2rem;">
        </div>
    </div>

    <div id="loadingDiv" class="text-center">
        <div class="spinner-border text-warning" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div id="category-product-container">
        <!-- Ajax response loaded here -->
    </div>
</div>
</div>
</div>
@endsection

@push('style')
<style>
    .product-rating li {
        display: inline;
    }

    .radius-100 {
        border-radius: 100%;
    }

    .item-info {
        color: rgb(91, 91, 91);
    }

    .item-info h5 {
        font-weight: 600;
        margin: 0;
    }

    .item-info p {
        font-weight: 450;
        font-family: sans-serif;
        font-size: 1rem;
    }

    .item-info .item-price {
        font-size: 1.3rem;
        font-weight: 650;
    }

    .slide-right-overlay {
        position: absolute;
        bottom: 0;
        left: 100%;
        right: 0;
        background-color: rgba(255, 255, 255, 0.4);
        overflow: hidden;
        width: 0;
        height: 100%;
        transition: .5s ease;
        padding-top: 1rem;
    }

    .item-overlay-container:hover .slide-right-overlay {
        width: 100%;
        left: 0;
        padding-left: 1rem;
    }

    .item-overlay-container {
        position: relative;
    }

    .item-overlay {
        position: absolute;
        top: 10px;
        right: 0;
        background: rgb(91, 91, 91);
        background: rgba(91, 91, 91, 0.9);
    }

    .item-quality {
        padding: .25rem;
        font-size: 1rem;
        color: #ffffff;
    }

    .fa.fa-star {
        color: #6e6e6e;
    }

    .fa.fa-star.checked {
        color: #fccb34;
    }

    /* Custom animation */
    .slide-up-image-container {
        position: relative;
    }

    .slide-up-image {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 100%;
        transition: all .3s ease-in-out;
    }

    .slide-up-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(255, 255, 255, 0.99);
        overflow: hidden;
        width: 100%;
        height: 0;
        transition: .5s ease;

    }

    .slide-up-overlay-content {
        color: white;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .slide-up-image-container:hover .slide-up-image {
        transform: scale(0.65);
    }

    .slide-up-image-container:hover .slide-up-overlay {
        height: 100%;
        border: 1px solid #fccb34;
    }

    .spinner-border {
        display: inline-block;
        width: 7rem;
        height: 7rem;
        vertical-align: text-bottom;
        border: 0.75em solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner-border 0.75s linear infinite;
        animation: spinner-border 0.75s linear infinite;
    }

    .box {
        position: relative;
    }

    .ribbon {
        position: absolute;
        right: -5px;
        top: -5px;
        z-index: 1;
        overflow: hidden;
        width: 75px;
        height: 75px;
        text-align: right;
    }

    .ribbon.standard span {
        font-size: 10px;
        font-weight: bold;
        color: #1f1f1f;
        text-transform: uppercase;
        text-align: center;
        line-height: 20px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        width: 100px;
        display: block;
        background: #79A70A;
        background: linear-gradient(#E3BD9D 0%, #FFD4C9 100%);
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 19px;
        right: -21px;
    }

    .ribbon.standard span::before {
        content: "";
        position: absolute;
        left: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid #FFD4C9;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #FFD4C9;
    }

    .ribbon.standard span::after {
        content: "";
        position: absolute;
        right: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid transparent;
        border-right: 3px solid #FFD4C9;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #FFD4C9;
    }

    .ribbon.moderate span {
        font-size: 10px;
        font-weight: bold;
        color: #1f1f1f;
        text-transform: uppercase;
        text-align: center;
        line-height: 20px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        width: 100px;
        display: block;
        background: #79A70A;
        background: linear-gradient(#AFC4E3 0%, #C7D4FF 100%);
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 19px;
        right: -21px;
    }

    .ribbon.moderate span::before {
        content: "";
        position: absolute;
        left: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid #C7D4FF;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #C7D4FF;
    }

    .ribbon.moderate span::after {
        content: "";
        position: absolute;
        right: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid transparent;
        border-right: 3px solid #C7D4FF;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #C7D4FF;
    }

    .ribbon.premium span {
        font-size: 10px;
        font-weight: bold;
        color: #1f1f1f;
        text-transform: uppercase;
        text-align: center;
        line-height: 20px;
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        width: 100px;
        display: block;
        background: #79A70A;
        background: linear-gradient(#FCCB34 0%, #FCED14 100%);
        box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
        position: absolute;
        top: 19px;
        right: -21px;
    }

    .ribbon.premium span::before {
        content: "";
        position: absolute;
        left: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid #FCED14;
        border-right: 3px solid transparent;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #FCED14;
    }

    .ribbon.premium span::after {
        content: "";
        position: absolute;
        right: 0px;
        top: 100%;
        z-index: -1;
        border-left: 3px solid transparent;
        border-right: 3px solid #FCED14;
        border-bottom: 3px solid transparent;
        border-top: 3px solid #FCED14;
    }

    .tooltip-container {
        position: relative;
        text-align: left;
    }

    .tooltip-container .right {
        width: 300px;
        top: 50%;
        left: 90%;
        margin-left: 10px;
        transform: translate(0, -50%);
        padding: 0;
        color: #EEEEEE;
        background-color: #444444;
        font-weight: normal;
        font-size: 13px;
        border-radius: 8px;
        position: absolute;
        z-index: 99999999;
        box-sizing: border-box;
        box-shadow: 0 1px 8px rgba(0, 0, 0, 0.5);
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.8s;
    }

    .tooltip-container .left {
        width: 300px;
        top: 50%;
        right: 90%;
        margin-right: 10px;
        transform: translate(0, -50%);
        padding: 0;
        color: #EEEEEE;
        background-color: #444444;
        font-weight: normal;
        font-size: 13px;
        border-radius: 8px;
        position: absolute;
        z-index: 99999999;
        box-sizing: border-box;
        box-shadow: 0 1px 8px rgba(0, 0, 0, 0.5);
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.8s;
    }

    .tooltip-container:hover .right {
        visibility: visible;
        opacity: 1;
    }

    .tooltip-container:hover .left {
        visibility: visible;
        opacity: 1;
    }

    .tooltip-container .text-content {
        padding: 10px 20px;
    }

    .boxed label {
        display: inline-block;
        min-width: 50px;
        padding: 10px;
        border: solid 1px #ccc;
        border-radius: 10px;
        transition: all 0.3s;
    }

    .boxed label.color-options {
        display: inline-block;
        margin-right: 5px;
        min-width: 0;
        width: 40px;
        height: 40px;
        padding: 10px;
        border: solid 1px #ccc;
        border-radius: 100%;
        transition: all 0.3s;
    }

    .boxed input[type="radio"] {
        display: none;
    }

    .boxed input[type="radio"]:checked+label {
        border: solid 1px #fccb34;
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
        box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.75);
    }
</style>
@endpush

@push('script')
<script>
    $(document).ready(function() {
        /*
        Author: Wan Shahruddin
        */

        /* Variables */
        // Assign the element with loadingDiv as its ID into a variable.
        // Hide/show based on ajax request status.
        var loading = $('#loadingDiv').hide();

        // Assign the element with category-product-container as its id into a variable.
        // Element to load ajax response into.
        const ItemContainer = $('#category-product-container');

        // Assign the element with child-category-indicator as its id into a variable.
        // Element to load sub category name into.
        let chidCategoryIndicator = $('#child-category-indicator');

        // Initialize an empty variable.
        // Used to initialize mCustomScrollbar after ajax request.
        let left;

        // Initialize an empty variable.
        // Used to initialize mCustomScrollbar after ajax request.
        let right;

        // Initialize an empty variable.
        // Used to filter product based on quality.
        let productQuality = null;

        // Setup ajax to include csrf token.
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let categorySlug = "{{ $category->slug }}";

        // Function to run on page load.
        onPageLoad();

        // Make an ajax request to get all product beloging to a category.
        function onPageLoad() {
            // $.ajax({
            //     async: true,
            //     beforeSend: function() {
            //         // Show loading spinner.
            //         loading.show();
            //         ItemContainer.hide();
            //     },
            //     complete: function() {
            //         // Hid loading spinner.
            //         loading.hide();
            //         ItemContainer.show();
            //     },
            //     url: "{{ route('web.shop.category', ['categorySlug' => $category->slug])}}",
            //     type: "GET",
            //     success: function(result) {
            //         // Load response into specified element.
            //         ItemContainer.html(result);

            //         // Assign element with left/right class into a variable.
            //         left = ItemContainer.find('.left');
            //         right = ItemContainer.find('.right')

            //         // Initialize mCustomScrollbar
            //         left.mCustomScrollbar({
            //             'theme': 'minimal'
            //         });

            //         // Initialize mCustomScrollbar
            //         right.mCustomScrollbar({
            //             'theme': 'minimal'
            //         });
            //     },
            //     error: function(result) {
            //         // Log into console if there's an error.
            //         console.log(result.status + ' ' + result.statusText);
            //     }
            // });

            // Get checked radio button value and put into a variable.
            productQuality = $('input[name="catalog-quality"]:checked').val();

            let baseUrl = '{{ route("web.shop.category.filter", ["categorySlug" => ":categorySlug"]) }}';

            baseUrl = baseUrl.replace(':categorySlug', categorySlug);

            $.ajax({
                async: true,
                beforeSend: function() {
                    // Show loading spinner.
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    // Hide loading spinner.
                    loading.hide();
                    ItemContainer.show();
                },
                url: baseUrl,
                type: "POST",
                data: {
                    // POST data.
                    quality: productQuality,
                },
                success: function(result) {
                    // Load ajax response into specified element.
                    ItemContainer.html(result);

                    // Assign element with left/right class into a variable.
                    left = ItemContainer.find('.left');
                    right = ItemContainer.find('.right')

                    // Initialize mCustomScrollbar
                    left.mCustomScrollbar({
                        'theme': 'minimal'
                    });

                    // Initialize mCustomScrollbar
                    right.mCustomScrollbar({
                        'theme': 'minimal'
                    });
                },
                error: function(result) {
                    // Log into console if there's an error.
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        }

        // Handle click event on element with category-link as its class.
        $('.category-link').on('click', function(e) {
            // Prevent default behavior.
            // <a> tag is used here, prevent it from linking to another page or refreshing the page.
            e.preventDefault();

            $("#catalog-quality-all").prop("checked", true);


            categorySlug = $(this).data('value');
            categoryName = $(this).data('name');

            var jump = ('#scroll-to');
            var new_position = $(jump).offset();


            $.ajax({
                async: true,
                beforeSend: function() {
                    // Show loading spinner.
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    // Hide loading spinner.
                    loading.hide();

                    // Load categoryName into specified element.
                    chidCategoryIndicator.text('/ ' + categoryName)
                    ItemContainer.show();
                },
                url: "/web/shop/category/" + categorySlug,
                type: "get",
                success: function(result) {
                    // Load ajax response into specified element.
                    ItemContainer.html(result);
                    $('html, body').stop().animate({
                        scrollTop: new_position.top
                    }, 500);
                },
                error: function(result) {
                    // Log into console if there's an error.
                    console.log(result.status + ' ' + result.statusText);
                }
            });

        });

        // Handle click event on element with the class of catalog-quality-filter.
        // Filter products based on quality.
        $('.catalog-quality-filter').on('click', function(e) {
            // Get checked radio button value and put into a variable.
            productQuality = $('input[name="catalog-quality"]:checked').val();

            let baseUrl = '{{ route("web.shop.category.filter", ["categorySlug" => ":categorySlug"]) }}';

            baseUrl = baseUrl.replace(':categorySlug', categorySlug);

            $.ajax({
                async: true,
                beforeSend: function() {
                    // Show loading spinner.
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    // Hide loading spinner.
                    loading.hide();
                    ItemContainer.show();
                },
                url: baseUrl,
                type: "POST",
                data: {
                    // POST data.
                    quality: productQuality,
                },
                success: function(result) {
                    // Load ajax response into specified element.
                    ItemContainer.html(result);

                    // Assign element with left/right class into a variable.
                    left = ItemContainer.find('.left');
                    right = ItemContainer.find('.right')

                    // Initialize mCustomScrollbar
                    left.mCustomScrollbar({
                        'theme': 'minimal'
                    });

                    // Initialize mCustomScrollbar
                    right.mCustomScrollbar({
                        'theme': 'minimal'
                    });
                },
                error: function(result) {
                    // Log into console if there's an error.
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        });

        $(document).on('click', '.catalog-item', function(e) {
            e.preventDefault();
            let modal = $(this).data('modal');
            if ($(window).innerWidth() <= 768) {
                $(modal).modal('show');
            }
        });

        /* End Author */

        /* Author: Nicholas */


        // Run query search function
        // onQueryLoad();

        // onFilterLoad();
        function onQueryLoad() {
            $.ajax({
                async: true,
                beforeSend: function() {
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    loading.hide();
                    ItemContainer.show();
                },
                url: "{{ route('web.shop.category', ['categorySlug' =>" + query + "])}}",
                type: "get",
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        }



        $('#search-button').on('click', function(e) {
            e.preventDefault();
            var query = document.getElementById('search-box').value;
            query = query.replace(/\s+/g, '-').toLowerCase();


            $.ajax({
                async: true,
                beforeSend: function() {
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    loading.hide();
                    chidCategoryIndicator.text('/ ' + query)
                    ItemContainer.show();

                },
                url: "/web/shop/category/" + query,
                type: "get",
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        });

        /*Filter section*/

        function onFilterLoad() {
            $.ajax({
                async: true,
                beforeSend: function() {
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    loading.hide();
                    ItemContainer.show();
                },
                url: "{{ route('web.shop.category', ['categorySlug' => $category->slug])}}",
                type: "get",
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {

                    console.log(result.status + ' ' + result.statusText);
                }
            });
        }

        $('#white').on('click', function(e) {
            e.preventDefault();
            // var query=document.getElementById('search-box').value;
            // query = query.replace(/\s+/g, '-').toLowerCase();


            $.ajax({
                async: true,
                beforeSend: function() {
                    loading.show();
                    ItemContainer.hide();
                },
                complete: function() {
                    loading.hide();
                    chidCategoryIndicator.text('/ ' + categoryName)
                    ItemContainer.show();

                },
                url: "/web/shop/category/" + categorySlug,
                type: "get",
                success: function(result) {
                    ItemContainer.html(result);
                },
                error: function(result) {
                    console.log(result.status + ' ' + result.statusText);
                }
            });
        });



        // Price range slider

        $("#price-range-slider").ionRangeSlider({
            skin: "flat",
            min: 0,
            max: 500,
            from: 0,
            to: 500,
            type: 'double',
            prefix: "RM",

        });


    });
</script>
@endpush