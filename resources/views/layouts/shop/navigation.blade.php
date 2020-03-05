<!-- Top Header Area Start -->
<section class="top-header" style="background-color: #FFDF00;">
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
                                            <span class="sign-in" style="color: #000000;">Sign in</span> <span style="color: #000000;">|</span>
                                            <span class="join" style="color: #000000;">Join</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->userInfo->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                </li>
                                <li class="dealer"> 
                                    <a href="/dashboard/dealer" > Switch To Dealer Account</a>

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
<section class="logo-header" style="background-color: #000000;">
    <div class="container">
        <div class="row ">
            <div class="col-lg-2 col-sm-6 col-5 remove-padding">
                <div class="logo">
                    <a href="/shop">
                        <img style="width: 156px; height: auto;" src="{{ asset('storage/logo/bujishu.png') }}" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-sm-12 remove-padding order-last order-sm-2 order-md-2 my-auto">
                <div class="search-box-wrapper">
                    <div class="search-box" style="border: 1px solid #FFDF00;">
                        <div class="categori-container" id="catSelectForm" style="background-color: #FFDF00;">
                            <select name="category" id="category_select" class="categoris">
                                <option value="" style="background-color: #FFDF00;">Categories</option>
                                <option value="#" style="background-color: #FFDF00;">Category 1</option>
                                <option value="#" style="background-color: #FFDF00;">Category 1</option>
                            </select>
                        </div>

                        <form id="searchForm" class="search-form">
                            <input type="text" id="prod_name" name="search" placeholder="Search" value="" autocomplete="off" style="color: #FFDF00;">
                            <div class="autocomplete">
                                <div id="myInputautocomplete-list" class="autocomplete-items">
                                </div>
                            </div>
                            <button type="submit" style="background-color: #FFDF00;"><i class="icofont-search-1" style="color: #000000;"></i></button>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-lg-2 col-sm-6 col-7 remove-padding order-lg-last my-auto">
                <div class="helpful-links" style="display: block; padding-bottom: 20px; padding-top: 0;">
                    <ul class="helpful-links-inner">
                        <li class="my-dropdown" data-toggle="tooltip" data-placement="top" title="Cart">
                            <a href="javascript:;" class="cart carticon">
                                <div class="icon">
                                    <i class="icofont-cart" style="color: #FFDF00; font-size: 25px; font-weight: 0;"></i>
                                    <span class="cart-quantity" id="cart-count">
                                        {{ ($cart != null) ? $cart->count() : '0' }}
                                    </span>
                                </div>
                            </a>
                            <div class="my-dropdown-menu" id="cart-items">
                                @include('layouts.shop.partials.cart-preview')
                            </div>
                        </li>
                        <li class="wishlist" data-toggle="tooltip" data-placement="top" title="Wishlist">
                            <a href="javascript:;" data-toggle="modal" id="wish-btn" data-target="#comment-log-reg" class="wish">
                                <i class="icofont-favourite" style="color: #FFDF00; font-size: 25px; font-weight: 0;"></i>
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
<div class="mainmenu-area mainmenu-bb" style="background: rgb(153,102,0); background: linear-gradient(90deg, rgba(153,102,0,1) 0%, rgba(255,249,204,1) 30%, rgba(192,144,46,1) 55%, rgba(236,213,135,1) 80%, rgba(255,249,204,1) 100%);">
    <div class="container">
        <div class="row align-items-center mainmenu-area-innner">
            <div class="col-lg-3 col-md-6 categorimenu-wrapper remove-padding">
                <!--categorie menu start-->
                <div class="categories_menu">
                    <div class="categories_title" style="background-color: #FFDF00;">
                        <h2 class="categori_toggle" style="color: #000000;"><i class="fa fa-bars"></i> Category <i class="fa fa-angle-down arrow-down" style="color: #000000;"></i></h2>
                    </div>
                    <div class="categories_menu_inner">
                        <ul>
                            @foreach($categories as $category)
                            @if($category->subcategories->isEmpty())
                            <li class="text-capitalize">
                                <a href="/shop/category/{{ $category->slug }}"><img src="{{ asset('assets/images/category-icons/'.$category->image->url) }}"> {{ $category->name }}</a>
                            </li>

                            @else
                            <li class="dropdown_list text-capitalize">
                                <div class="img">
                                    <img src="{{ asset('assets/images/category-icons/'.$category->image->url) }}" alt="{{ $category->name }}">
                                </div>
                                <div class="link-area">
                                    <span><a href="/shop/category/{{ $category->slug }}">{{ $category->name }}</a></span>
                                    <a href="javascript:;">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <ul class="categories_mega_menu column_1">
                                    @foreach($category->subcategories as $subcategory)
                                    <li>
                                        <a href="/shop/category/{{ $subcategory->slug }}">{{ $subcategory->name }}</a>
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