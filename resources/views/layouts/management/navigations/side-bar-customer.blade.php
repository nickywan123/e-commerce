<div class="wrapper" >
 <div class="sidebar sidebar-bg-color h-100">
    <nav class="sidebar-nav" >
        <ul class="nav" style="margin-top: 2rem;">

            {{-- <li class="nav-item"  >
                <div class="icon-text-align">
                   <a class="nav-link " href="{{ route('shop.dashboard.customer.profile') }}">
                      <img class="img-avatar" src="{{asset('/storage/customer/profile.png')}}" alt="Profile" style="height: 100px; width: 100px; ">
                   </a>          
               </div>
              </li>
            --}}
    

            <li class="nav-item" >
              <div class="icon-text-align">
                 <a class="nav-link " href="{{route('shop.customer.orders')}}">
                    <img class="img-avatar" src="{{asset('/storage/customer/sidebar-icons/value-records.png')}}" alt="My Orders" style="height: 100px; width: 100px; ">
                 </a>          
             </div>
            </li>
         
  
            <li class="nav-item">
             <div class="icon-text-align">
                 <a class="nav-link" href="{{route('shop.wishlist.home')}}">
                    <img class="img-avatar" src="{{asset('/storage/customer/sidebar-icons/perfect-list.png')}}" alt="Wish List" style="height: 100px; width: 100px; ">
                 </a>
           
            </div>
            </li>
        
            {{-- <li class="nav-item">
              <div class="icon-text-align">
                 <a class="nav-link" href="/shop/dashboard/change-password">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/change-password.png')}}" alt="Change Password" style="height: 100px; width: 100px; ">
                 </a>
               
              </div>
            </li> --}}
            
            
            <li class="nav-item" >
              <div class="icon-text-align">
                 <a class="nav-link" href="/shop">
                  <img class="img-avatar" src="{{asset('/storage/customer/sidebar-icons/continue-shopping.png')}}" alt="Shop" style="height: 100px; width: 100px; ">
                 </a>
                
              </div>          
            </li>
            {{-- @hasrole('dealer')
            <li class="nav-item">
                <div class="icon-text-align">
                   <a class="nav-link" href="{{route('management.dealer.home')}}">
                    <img class="img-avatar" src="{{asset('/storage/customer/sidebar-icons/dealer.png')}}" alt="Dealer" style="height: 100px; width: 100px; ">
                   </a>
                 
                </div>          
              </li>
         @endhasrole

            @hasrole('panel')
            <li class="nav-item">
                <div class="icon-text-align">
                   <a class="nav-link" href="{{route('management.panel.home')}}">
                    <img class="img-avatar" src="{{asset('/storage/customer/sidebar-icons/panel-page.png')}}" alt="Panel" style="height: 100px; width: 100px; ">
                   </a>
                 
                </div>          
              </li>
            @endhasrole --}}

            {{-- <li class="nav-item" >
                <div class="icon-text-align">
                   <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                      <img class="img-avatar" src="{{asset('/storage/customer/logout.png')}}" alt="Logout" style="height: 100px; width: 100px; ">
                   </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>
              </li> --}}

        </ul>
    </nav>
    {{-- <button class="sidebar-minimizer brand-minimizer" type="button"></button> --}}
</div>


</div>


<style>
    .icon-text-align{
        display: inline-block;
       /* text-align: center; */
       margin: -10px 0;
      
    }

.text-color{
      
       
        font-size: 10pt;
        color: #ffcc00;
    }

  .sidebar .sidebar-nav {
    width: 120px;
    
   }
/* 
   .sidebar{
       height: 1160px;
   } */

.ps--active-x > .ps__rail-x,
.ps--active-y >.ps__rail-y {
  display: hidden;
  background-color: transparent;
}

 
</style>