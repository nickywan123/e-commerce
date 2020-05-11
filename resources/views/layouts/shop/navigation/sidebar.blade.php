<nav id="sidebar">
    <div id="dismiss">
        <i class="fas fa-arrow-left"></i>
    </div>

    <div class="sidebar-header">
        <img class="sidebar-logo" src="{{ asset('storage/logo/Bujishu-logo.png') }}" alt="">
    </div>

    <ul class="list-unstyled components ">
        <h4 class="font-family-lato" style="color: #212529; padding: 5px 10px;"><strong>Shop By Category</strong></h4>
        <li>
            <a  href="/shop/product/panel-registration?panel=1918000101">Panel Registration</a>
            @foreach($categories as $category)
            <a  href="/shop/category/{{ $category->slug }}">{{ $category->name }}</a>
            @endforeach
            <!-- <a href="/category/bedsheet-mattress">Bedsheet & Mattress</a>
            <a href="/category/bedsheet-mattress">Cupboard</a>
            <a href="/category/bedsheet-mattress">Tables & Chairs</a>
            <a href="/category/bedsheet-mattress">Carpet</a>
            <a href="/category/curtain">Curtain</a>
            <a href="/category/bedsheet-mattress">Tiles</a>
            <a href="/category/bedsheet-mattress">Lighting</a>
            <a href="/category/bedsheet-mattress">Wall Papers</a>
            <a href="/category/bedsheet-mattress">Roof</a>
            <a href="/category/bedsheet-mattress">Doors</a>
            <a href="/category/bedsheet-mattress">Window</a>
            <a href="/category/bedsheet-mattress">Auxillary Propesrity Items</a>
            <a href="/category/product-services">Product & Services</a> -->
        </li>

        <!-- For future use of navigation bar expand -->
        <!-- <nav id="mysidebarmenu" class="amazonmenu">
            <ul>
                <li><a href="#">Item 1</a></li>
                <li><a href="#">Folder 0</a>
                    <div>
                        <ul>
                            <li><a href="#">Sub Item 0.1</a></li>
                            <li><a href="#">Sub Item 0.2</a></li>
                            <li><a href="#">Sub Item 0.3</a>
                            <li><a href="#">Sub Item 0.4</a>
                            <li><a href="#">Sub Item 0.5</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav> -->
    </ul>
</nav>