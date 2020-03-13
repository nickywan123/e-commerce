    <!--=========MIDDEL-TOP_BAR============-->

    <div class="middleBar">
        <div class="container-90">
            <div class="row d-flex">
                <div class="col-sm-2 vertical-align hidden-xs">
                    <div class="row">
                        <div class="col-6 my-auto text-left p-1">
                            <a href="javascript:void(0);" id="side-menu-trigger">
                                <i class="fa fa-bars navigation-icon"></i>
                            </a>

                        </div>
                        <div class="col-6 text-right my-auto">
                            <a href="javascript:void(0);">
                                <img class="navigation-logo" style="margin-right: 30px;" src="http://demo3.bujishu.com/storage/logo/bujishu.png" alt="">
                            </a>
                        </div>
                    </div>

                </div>
                <!-- end col -->
                <div class="col-sm-6 vertical-align text-center my-auto">
                    <form>
                        <div class="row grid-space-1">
                            <div class="col-12 my-auto">
                                <select class="form-control input-lg w-25 hidden-sm" style="border-right:5px solid #fbcc34;margin-right:-5px; border-top-left-radius: 10px;border-bottom-left-radius: 10px;" name="category">
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
                                <input type="text" name="keyword" class="form-control input-lg w-65-md w-85-sm" style="border-right:5px solid #fbcc34;margin-right:-5px;" placeholder="Search">
                                <button class="btn" style="background-color:#ffffff; color:black ;border-top-right-radius: 10px; border-bottom-right-radius:10px;"><i class="fa fa-search"></i></button>
                            </div>
                            <!-- <div class="col-6">
                                <input type="text" name="keyword" class="form-control input-lg" placeholder="Search">
                            </div>
                            <div class="col-3 text-left">
                                <button class="btn btn-primary"><i class="fa fa-search"></i></button> 
                            </div> -->
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </form>
                </div>
                <!-- end col -->
                <div class="col-sm-4 vertical-align hidden-xs my-auto">
                    <!-- <div class="header-item mr-5">
                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Wishlist"> <i class="fa fa-heart-o"></i> <sub>32</sub> </a>
                    </div>
                    <div class="header-item">
                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title=""
                            data-original-title="Compare"> <i class="fa fa-refresh"></i> <sub>2</sub> </a>
                    </div> -->
                    <ul class="nav justify-content-center-sm float-md-right my-auto hidden-sm">
                        <li class="nav-item m-1">
                            <a class="nav-link colorlink-gold" href="">My Account</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link colorlink-gold" href="">Login</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link colorlink-gold" href="">Register</a>
                        </li>
                        <li class="nav-item m-1">
                            <a href="" class=" btn grad1"><b>PANEL</b></a>
                        </li>
                        <li class="nav-item m-1">
                            <a href="" class="btn grad1"><b>DEALER</b></a>
                        </li>
                    </ul>
                </div>
                <!-- end col -->
            </div>
            <!-- end  row -->
        </div>
    </div>

    <div class="bottom-bar shadow-sm" style="border-bottom:#ffca05 2px solid">
        <div class="container-90">
            <div class="row display-table" style="margin-bottom:30px">
                <div class="col-sm-12 justify-content-end-md justify-content-center-sm ">
                    <ul class="nav justify-content-center-sm float-right-md mb-0 ">
                        <li class="nav-item m-1">
                            <a class="nav-link colorlink-gold" href=""><i class="fa fa-heart-o font-15 mr-1"></i> My Wishlist</a>
                        </li>
                        <li class="nav-item m-1">
                            <a class="nav-link  colorlink-gold" href=""> <img class=”img-logo” src="{{ asset('images/cart.png') }}" style="width:28px; height: 30px;" /> My Cart</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation side-menu">
        <div class="row">
            <div class="col-12" style="background-color: #000;">
                <h4>Shop By Category</h4>
            </div>
        </div>
        <ul class="navbar-nav animate side-nav" style="background-color: #fbcc34;">
            <li class="nav-item has-sub">
                <a href="#">Menu 1</a>
                <ul>
                    <li class="has-sub"> <a href="#">Submenu 1.1</a>
                    </li>
                    <li><a href="#">Submenu 1.2</a></li>
                </ul>
            </li>
            <li class="has-sub"> <a href="#">Menu 2</a>
                <ul>
                    <li><a href="#">Submenu 2.1</a></li>
                    <li><a href="#">Submenu 2.2</a></li>
                </ul>
            </li>
            <li class="has-sub"> <a href="#">Menu 3</a>
                <ul>
                    <li><a href="#">Submenu 3.1</a></li>
                    <li><a href="#">Submenu 3.2</a></li>
                </ul>
            </li>
        </ul>
    </div>