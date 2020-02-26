<!-- Top Header Area Start -->
<section class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 remove-padding">
                <div class="content">
                    <!-- For future use  -->
                    <!-- <div class="left-content">
                            <div class="list">
                                <ul>
                                    <li>
                                        <div class="language-selector">
                                            <i class="fa fa-globe"></i>
                                            <select name="language" class="language selectors nice">
                                                <option value="#">Language Select</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="currency-selector">
                                            <span>$</span>
                                            <select name="currency" class="currency selectors nice">
                                                <option value="#">Currency Select</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    <!-- .\--- -->
                    <div class="left-content"></div>

                    <div class="right-content">
                        <div class="list">
                            <ul>
                                <li class="login">
                                    <a href="#" class="sign-log">
                                        <div class="links">
                                            <span class="sign-in">Sign in</span> <span>|</span>
                                            <span class="join">Join</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="sell-btn">Sell</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Top Header Area End -->

<!-- Logo Header Area Start -->
<section class="logo-header">
    <div class="container">
        <div class="row ">
            <div class="col-lg-2 col-sm-6 col-5 remove-padding">
                <div class="logo">
                    <a href="#">
                        <img src="https://via.placeholder.com/156x44" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12 remove-padding order-last order-sm-2 order-md-2">
                <div class="search-box-wrapper">
                    <div class="search-box">
                        <div class="categori-container" id="catSelectForm">
                            <select name="category" id="category_select" class="categoris">
                                <option value="">Categories</option>
                                <option value="#">Category 1</option>
                                <option value="#">Category 1</option>
                            </select>
                        </div>

                        <form id="searchForm" class="search-form">
                            <input type="text" id="prod_name" name="search" placeholder="Search" value="" autocomplete="off">
                            <div class="autocomplete">
                                <div id="myInputautocomplete-list" class="autocomplete-items">
                                </div>
                            </div>
                            <button type="submit"><i class="icofont-search-1"></i></button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-sm-6 col-7 remove-padding order-lg-last">
                <div class="helpful-links">
                    <ul class="helpful-links-inner">
                        <li class="my-dropdown" data-toggle="tooltip" data-placement="top" title="Cart">
                            <a href="javascript:;" class="cart carticon">
                                <div class="icon">
                                    <i class="icofont-cart"></i>
                                    <span class="cart-quantity" id="cart-count">0</span>
                                </div>

                            </a>
                            <div class="my-dropdown-menu" id="cart-items">
                                <p>Card view here</p>
                            </div>
                        </li>
                        <li class="wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                            <a href="javascript:;" data-toggle="modal" id="wish-btn" data-target="#comment-log-reg" class="wish">
                                <i class="icofont-favourite"></i>
                                <span id="wishlist-count">0</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Logo Header Area End -->

<!-- Main Menu Area Start -->
<div class="mainmenu-area mainmenu-bb">
    <div class="container">
        <div class="row align-items-center mainmenu-area-innner">
            <div class="col-lg-3 col-md-6 categorimenu-wrapper remove-padding">
                <!--categorie menu start-->
                <div class="categories_menu">
                    <div class="categories_title">
                        <h2 class="categori_toggle"><i class="fa fa-bars"></i> Category <i class="fa fa-angle-down arrow-down"></i></h2>
                    </div>
                    <div class="categories_menu_inner">
                        <ul>
                            @foreach($categories as $category)
                            @if($category->childCategory->isEmpty())
                            <li class="text-capitalize">
                                <a href="/shop/category/{{ $category->slug }}"><img src="{{ $category->image->url }}"> {{ $category->name }}</a>
                            </li>

                            @else
                            <li class="dropdown_list text-capitalize">
                                <div class="img">
                                    <img src="{{ $category->image->url }}" alt="{{ $category->name }}">
                                </div>
                                <div class="link-area">
                                    <span><a href="/shop/category/{{ $category->slug }}">{{ $category->name }}</a></span>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <ul class="categories_mega_menu column_1">
                                    @foreach($category->childCategory as $childCategory)
                                    <li>
                                        <a href="/shop/category/{{ $childCategory->slug }}">{{ $childCategory->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!--categorie menu end-->
            </div>
        </div>
    </div>
</div>
<!-- Main Menu Area End -->