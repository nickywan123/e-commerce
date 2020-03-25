<div class="middleBar" style="border-bottom: 3px solid #fccb34;">
    <div class="container-90">
        <div class="row d-flex">
            <div class="col-sm-2 vertical-align mt-2 mb-3">
                <div class="row">
                    <div class="col-4 my-auto text-left p-1">
                        <button type="button" id="sidebarCollapse" class="btn">
                            <i class="fa fa-bars navigation-icon"></i>
                        </button>
                    </div>
                    <div class="col-4 col-md-6 text-right my-auto">
                        <a href="/shop">
                            <img class="navigation-logo" style="margin-right: 30px;" src="{{ asset('storage/logo/Bujishu_logo.png') }}" alt="">
                        </a>
                    </div>
                    <div class="col-4 hidden-md my-auto">
                        <ul class="nav justify-content-center-sm float-right pt-2">
                            @guest
                            <li class="nav-item m-1">
                                <div class="dropdown show">
                                    <!-- TODO: Create a class for the style -->
                                    <a class="btn btn-secondary dropdown-toggle my-account-button" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FBCC34; background-color: #000000; border: 1px solid #FBCC34; padding-right: 40px;">
                                        Menu
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="/login">Login</a>
                                        <a class="dropdown-item" href="/register">Register</a>
                                    </div>
                                </div>
                            </li>
                            @else
                            <li class="nav-item m-1">
                                <div class="dropdown show">
                                    <!-- TODO: Create a class for the style -->
                                    <a class="btn btn-secondary dropdown-toggle my-account-button" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FBCC34; background-color: #000000; border: 1px solid #FBCC34; padding-right: 40px;">
                                        My Account
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile <small>(WIP)</small></a>
                                        <a class="dropdown-item" href="/shop/order"><i class="fa fa-credit-card"></i> My Orders <small>(WIP)</small></a>
                                        <a href="/shop/cart" class="dropdown-item"><i class="fa fa-shopping-cart"></i> My Cart(WIP)</a>
                                        @hasrole('panel')
                                        <a href="/management" class="dropdown-item"><i class="fa fa-user-check"></i> Panel</a>
                                        @endhasrole
                                        @hasrole('dealer')
                                        <a href="/management" class="dropdown-item"><i class="fa fa-user-check"></i> Dealer</a>
                                        @endhasrole
                                        <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out-alt" style="color: #fbcc34;"></i> {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>

            </div>
            <!-- end col -->
            <div class="col-sm-8 vertical-align text-center my-auto">
                <form>
                    <div class="row grid-space-1">
                        <div class="col-12 my-auto">
                            <div class="pb-2 nav-content-sidebar-collapse">
                                <select class="form-control navigation-input input-lg w-25 hidden-sm border-left-rounded-10 margin-right-negative-with-border margin-right-border-color search-bar-size " name="category">
                                    <option value="all">All Categories <small>(WIP)</small></option>
                                    <!-- <optgroup label="Mens">

                                    </optgroup> -->
                                </select>
                                <input type="text" name="keyword" class="form-control navigation-input input-lg w-65-md w-85-sm margin-right-negative-with-border  margin-right-border-color border-rounded-0-md border-left-rounded-10-sm search-bar-size" placeholder="Search (WIP)">
                                <button id="search-button" class="btn navigation-input border-right-rounded-10"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-2 vertical-align my-auto">
                <ul class="nav justify-content-center-sm float-right pt-2 hidden-sm">
                    @guest
                    <li class="nav-item m-1">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item m-1">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                    @else
                    <li class="nav-item m-1">
                        <div class="dropdown show">
                            <!-- TODO: Create a class for the style -->
                            <a class="btn btn-secondary dropdown-toggle my-account-button nav-content-sidebar-collapse" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FBCC34; background-color: #000000; border: 1px solid #FBCC34; padding-right: 40px;">
                                My Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#"><i class="fa fa-user " style="color:#fbcc34;"></i> Profile <small>(WIP)</small></a>
                                <a class="dropdown-item" href="/shop/order"><i class="fa fa-credit-card " style="color:#fbcc34;"></i> My Orders <small>(WIP)</small></a>
                                <a href="/shop/cart" class="dropdown-item"><i class="fa fa-shopping-cart " style="color:#fbcc34;"></i> My Cart <small>(WIP)</small></a>
                                @hasrole('panel')
                                <a href="/management/panel" class="dropdown-item"><i class="fa fa-user-check " style="color:#fbcc34;"></i> Panel</a>
                                @endhasrole
                                @hasrole('dealer')
                                <a href="/management/dealer" class="dropdown-item"><i class="fa fa-user-check" style="color:#fbcc34;"></i> Dealer</a>
                                @endhasrole
                                <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out-alt" style="color:#fbcc34;"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
            <!-- end col -->
        </div>
        <!-- end  row -->
    </div>
</div>

<!-- <div class="bottom-bar shadow-sm" style="border-bottom: 3px solid #fccb34;">
    <div class="container-90">
        <div class="row">
            <div class="col-sm-12 justify-content-end-md justify-content-center-sm mb-1">
                <ul class="nav justify-content-center-sm justify-content-end-md float-right-md">
                    <li class="nav-item m-1">
                        <a class="nav-link" href="/shop/wishlist"><i class="fa fa-heart-o font-15 mr-1"></i> My Wishlist</a>
                    </li>
                    <li class="nav-item m-1">
                        <a class="nav-link" href="/shop/cart"><i class="fa fa-shopping-cart font-15 mr-1"></i> My Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> -->