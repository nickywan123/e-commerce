<div class="sidebar sidebar-bg-color">
    <nav class="sidebar-nav">
        <ul class="nav sidebar-margin-top">
            <li class="nav-item ">
                <div class="icon-text-align">
                <a class="nav-link " href="/management/panel/orders">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/orders.png')}}" alt="My Orders" style="height: 50px; width: 50px; border-radius:0px;">
                </a>
                <p class="text-color">Orders Tracking</p>
            </div>
            </li>
         
            {{-- <li class="nav-item ">
                <div class="icon-text-align">
                <a class="nav-link " href="#">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/wishlist.png')}}" alt="My WishList" style="height: 50px; width: 50px;  border-radius:0px;">
                </a>
                <p>My Perfect List</p>
                </div>
            </li>
   --}}
        
           
            <li class="nav-item">
                <div class="icon-text-align">
                <a class="nav-link" href="/shop">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/shop.png')}}" alt="Shop" style="height: 50px; width: 50px; border-radius:0px;">
                </a>
                <p class="text-color">Shop</p>
                </div>
            </li>

            <li class="nav-item">
                <div class="icon-text-align">
                <a class="nav-link" href="/management/panel/change-password">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/change-password-icon.png')}}" alt="Change Password" style="height: 50px; width: 50px; border-radius:0px;">
                </a>
                <p class="text-color">Password</p>
                </div>
            </li>       


        </ul>
    </nav>
    {{-- <button class="sidebar-minimizer brand-minimizer" type="button"></button> --}}
</div>

<style>
    .icon-text-align{
        display: inline-block;
         text-align: center;
         margin-left:10px;
    }


    .text-color{
      
        font-family:Corbel;
        font-size: 10pt;
        color: #ffcc00;
    }
</style>
