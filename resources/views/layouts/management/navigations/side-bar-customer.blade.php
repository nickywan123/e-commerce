<div class="sidebar sidebar-bg-color">
    <nav class="sidebar-nav">
        <ul class="nav sidebar-margin-top">

            <li class="nav-item" >
              <div class="icon-text-align">
                 <a class="nav-link " href="/shop/dashboard/orders/index">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/orders.png')}}" alt="My Orders" style="height: 50px; width: 50px; border-radius:0px;">
                 </a>
                 <p class="text-color">Value Records</p>
             </div>
            </li>
         
  
            <li class="nav-item">
             <div class="icon-text-align">
                 <a class="nav-link" href="/shop/dashboard/wishlist/index">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/wishlist.png')}}" alt="Wish List" style="height: 50px; width: 50px; border-radius:0px;">
                 </a>
                 <p class="text-color">My Perfect List</p>
            </div>
            </li>
        
            <li class="nav-item">
              <div class="icon-text-align">
                 <a class="nav-link" href="/shop/dashboard/change-password">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/change-password-icon.png')}}" alt="Change Password" style="height: 50px; width: 50px; border-radius:0px;">
                 </a>
                 <p class="text-color"  style="text-align:center;">Password</p>
              </div>
            </li>
            
            
            <li class="nav-item">
              <div class="icon-text-align">
                 <a class="nav-link" href="/shop">
                  <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/shop.png')}}" alt="Shop" style="height: 50px; width: 50px; border-radius:0px;">
                 </a>
                 <p class="text-color" style="text-align:center;">Shop</p>
              </div>          
            </li>

            @hasrole('panel')
            <li class="nav-item">
                <div class="icon-text-align">
                   <a class="nav-link" href="/management/panel/orders">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/panel.png')}}" alt="Panel" style="height: 50px; width: 50px; border-radius:0px;">
                   </a>
                   <p class="text-color" style="text-align:center;">Panel</p>
                </div>          
              </li>
            @endhasrole


        </ul>
    </nav>
    {{-- <button class="sidebar-minimizer brand-minimizer" type="button"></button> --}}
</div>





<style>
    .icon-text-align{
        display: inline-block;
       /* text-align: center; */
       margin-left:10px;
    }

    .text-color{
      
        font-family:Corbel;
        font-size: 10pt;
        color: #ffcc00;
    }
</style>