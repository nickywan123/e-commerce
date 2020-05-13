<div class="wrapper" style="height: 100%; ">
<div class="sidebar sidebar-bg-color">
    <nav class="sidebar-nav">
        <ul class="nav sidebar-margin-top">

            <li class="nav-item"  >
                <div class="icon-text-align">
                   <a class="nav-link " href="{{ route('shop.dashboard.customer.profile') }}">
                      <img class="img-avatar" src="{{asset('/storage/customer/profile.png')}}" alt="Profile" style="height: 100px; width: 100px; ">
                   </a>          
               </div>
              </li>
           
    

            <li class="nav-item" >
              <div class="icon-text-align">
                 <a class="nav-link " href="/shop/dashboard/orders/index">
                    <img class="img-avatar" src="{{asset('/storage/customer/value-records.png')}}" alt="My Orders" style="height: 100px; width: 100px; ">
                 </a>          
             </div>
            </li>
         
  
            <li class="nav-item">
             <div class="icon-text-align">
                 <a class="nav-link" href="/shop/dashboard/wishlist/index">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/perfect-list.png')}}" alt="Wish List" style="height: 100px; width: 100px; ">
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
                  <img class="img-avatar" src="{{asset('/storage/customer/continue-shopping.png')}}" alt="Shop" style="height: 100px; width: 100px; ">
                 </a>
                
              </div>          
            </li>

            @hasrole('panel')
            <li class="nav-item">
                <div class="icon-text-align">
                   <a class="nav-link" href="/management/panel/orders">
                    <img class="img-avatar" src="{{asset('/storage/customer/panel.png')}}" alt="Panel" style="height: 100px; width: 100px; ">
                   </a>
                 
                </div>          
              </li>
            @endhasrole

            <li class="nav-item" >
                <div class="icon-text-align">
                   <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                      <img class="img-avatar" src="{{asset('/storage/customer/logout.png')}}" alt="Logout" style="height: 100px; width: 100px; ">
                   </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </div>
              </li>

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
      
        font-family:Corbel;
        font-size: 10pt;
        color: #ffcc00;
    }

  .sidebar .sidebar-nav {
    width: 120px;
   }

   .sidebar{
       height: 1160px;
   }

 
</style>