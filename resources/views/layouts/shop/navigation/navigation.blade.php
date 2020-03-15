<div class="middleBar">
    <div class="container-90">
        <div class="row d-flex">
            <div class="col-sm-2 vertical-align hidden-xs">
                <div class="row">
                    <div class="col-6 my-auto text-left p-1">
                        <button type="button" id="sidebarCollapse" class="btn">
                            <i class="fa fa-bars navigation-icon"></i>
                        </button>
                    </div>
                    <div class="col-6 text-right my-auto">
                        <a href="javascript:void(0);">
                            <img class="navigation-logo" style="margin-right: 30px;" src="{{ asset('storage/logo/bujishu.png') }}" alt="">
                        </a>
                    </div>
                </div>

            </div>
            <!-- end col -->
            <div class="col-sm-6 vertical-align text-center my-auto">
                <form>
                    <div class="row grid-space-1">
                        <div class="col-12 my-auto">
                            <div>
                                <select class="form-control navigation-input input-lg w-25 hidden-sm border-left-rounded-10 margin-right-negative-with-border" name="category">
                                    <option value="all">All Categories</option>
                                    <optgroup label="Mens">
                                        <option value="shirts">Shirts</option>
                                        <option value="coats-jackets">Coats & Jackets</option>
                                        <option value="underwear">Underwear</option>
                                        <option value="sunglasses">Sunglasses</option>
                                        <option value="socks">Socks</option>
                                        <option value="belts">Belts</option>
                                    </optgroup>
                                </select>
                                <input type="text" name="keyword" class="form-control navigation-input input-lg w-65-md w-85-sm margin-right-negative-with-border border-rounded-0-md border-left-rounded-10-sm" placeholder="Search">
                                <button id="search-button" class="btn navigation-input border-right-rounded-10"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-4 vertical-align my-auto">
                <ul class="nav justify-content-center-sm float-right pt-2">
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
                            <a class="btn btn-secondary dropdown-toggle my-account-button" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #FBCC34; background-color: #000000; border: 1px solid #FBCC34; padding-right: 40px;">
                                My Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Profile <small>(wip)</small></a>
                                <a class="dropdown-item" href="#">My Orders <small>(wip)</small></a>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </li>
                    @hasrole('panel')
                    <li class="nav-item m-1">
                        <a href="/management" class="nav-link btn  btn-register">Panel</a>
                    </li>
                    @endhasrole
                    @hasrole('dealer')
                    <li class="nav-item m-1">
                        <a href="/management" class="nav-link btn  btn-register">Dealer</a>
                    </li>
                    @endhasrole
                    @endguest
                </ul>
            </div>
            <!-- end col -->
        </div>
        <!-- end  row -->
    </div>
</div>

<div class="bottom-bar shadow-sm" style="border-bottom: 3px solid #fccb34;">
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
</div>