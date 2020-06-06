

<div class="sidebar sidebar-bg-color-dealer" style=" width: 240px; margin-top: 1rem;">
    <nav class="sidebar-nav">
      <ul class="list-unstyled components">
         <br>
         <h4 style="color:black; padding: 5px 10px;"><strong>Dashboard</strong></h4>
         
         
         {{-- <li>
          <a href="/category/bedsheet-mattress" class="sidebar-text-color ">Profile</a>
         </li> --}}
         <li class="text-hover">
            <a href="{{route('management.dealer.home')}}" class="sidebar-text-color ">Overview</a>
         </li>
         <li class="text-hover">
            <a href="{{route('dealer.sales.summary')}}" class="sidebar-text-color ">Sales Summary</a>
         </li>
         <li class="text-hover">
            <a href="{{route('management.dealer.statement.home')}}" class="sidebar-text-color ">Monthly Income</a>
         </li>
         <li class="text-hover">
            <a href="{{route('shop.wip')}}" class="sidebar-text-color ">Notice</a>
         </li>
         <li class="text-hover">
            <a href="{{route('shop.wip')}}" class="sidebar-text-color ">Promotion/Special Offer</a>
         </li>
         {{-- @hasrole('panel')
         <li class="text-hover">
            <a href="{{route('management.panel.home')}}" class="sidebar-text-color ">Panel Dashboard</a>
         </li>
         @endhasrole --}}
         <li class="text-hover">
            <a href="/shop" class="sidebar-text-color ">Continue Shopping</a>
         </li>
      </ul>
    </nav> 
</div>


        {{-- <ul class="nav sidebar-margin-top">

            <li class="nav-item" >
              <div class="icon-text-align">
                 <a class="nav-link " href="/shop/dashboard/orders/index">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/value-orders.png')}}" alt="My Orders" style="height: 100px; width: 100px; border-radius:0px;">
                 </a>
          
             </div>
            </li>
         
  
            <li class="nav-item">
             <div class="icon-text-align">
                 <a class="nav-link" href="/shop/dashboard/wishlist/index">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/perfect-list.png')}}" alt="Wish List" style="height: 100px; width: 100px; border-radius:0px;">
                 </a>
                
            </div>
            </li>
        
            <li class="nav-item">
              <div class="icon-text-align">
                 <a class="nav-link" href="/shop/dashboard/change-password">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/change-password.png')}}" alt="Change Password" style="height: 100px; width: 100px; border-radius:0px;">
                 </a>
      
              </div>
            </li>
            
            
            <li class="nav-item">
              <div class="icon-text-align">
                 <a class="nav-link" href="/shop">
                  <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/shop-icon.png')}}" alt="Shop" style="height: 100px; width: 100px; border-radius:0px;">
                 </a>
                 
              </div>          
            </li>

            <li class="nav-item">
              <div class="icon-text-align">
                 <a class="nav-link" href="/management/dealer/sales-summary">
                  <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/panel.png')}}" alt="Sales" style="height: 100px; width: 100px; border-radius:0px;">
                
                </a>
                <p style="font-size: small;">Sales Summary</p>
                
                 
              </div>          
            </li>


            @hasrole('panel')
            <li class="nav-item">
                <div class="icon-text-align">
                   <a class="nav-link" href="/management/panel/orders">
                    <img class="img-avatar" src="{{asset('/storage/panel-dashboard-icons/panel-page.png')}}" alt="Panel" style="height: 100px; width: 100px; border-radius:0px;">
                   </a>
                 
                </div>          
              </li>
            @endhasrole


        </ul> --}}
   
    {{-- <button class="sidebar-minimizer brand-minimizer" type="button"></button> --}}






<style>

   .text-hover{
      padding-bottom: 10px;
   }

   .text-hover:hover{
      color: black;
      background: #fbcc34;
      text-decoration:  none!important;
  }


   a:hover{
      color: black;
      text-decoration: none;
   }
  

    .sidebar-text-color{
      
       
        font-size: 14pt;
        color: black;
        margin-left:10px;
    }


</style>