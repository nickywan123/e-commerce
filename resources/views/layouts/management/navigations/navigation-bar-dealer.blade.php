<header class="app-header navbar navbar-bg-color navbar-border-bottom-color nav-height ">

    {{--Navbar icon mobile--}}
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <i class="fa fa-bars navigation-icon"></i>
    </button> 
     
    {{--Navbar icon desktop--}}
    {{-- <button class="navbar-toggler sidebar-toggler d-md-down-none"  type="button" data-toggle="sidebar-lg-show">
        <i class="fa fa-bars navigation-icon"></i>
    </button> --}}
   

    <a class="navbar-brand img-logo-margin-left" href="/shop">
        <img class="navbar-brand-full margin-right-logo-mobile img-logo-resize" src="{{asset('storage/logo/bujishu-logo-2020.png')}}" width="40" height="40" alt="Bujishu Logo">
        <img class="navbar-brand-minimized" src="{{asset('storage/logo/bujishu-logo-2020.png')}}" width="30" height="30" alt="Bujishu Logo">
    </a>

    <h4 style="color:#ffcc00;">Welcome to Dealer Dashboard</h4>

    <ul class="nav navbar-nav ml-auto">      
      <h5 style="margin-right:10px; color:#ffcc00;" class="welcome-text "  >{{Auth::user()->userInfo->full_name}}</h5> 
      <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
           <img class="img-avatar" src="{{asset('storage/avatar/default-avatar.jpg')}}" alt="{{ Auth::user()->userInfo->full_name }}">
         </a>
            <div class="dropdown-menu dropdown-menu-right">
                {{-- <div class="dropdown-header text-center">
                    <strong>Settings</strong>
                </div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-user"></i> Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-usd"></i> Payments
                    <span class="badge badge-secondary">42</span>
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-file"></i> Projects
                    <span class="badge badge-primary">42</span>
                </a>
                <div class="divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-shield"></i> Lock Account</a> --}}
                {{-- <a class="dropdown-item" href="#">
                    <i class="fa fa-lock"></i> Logout</a> --}}
                  
                <a class="dropdown-item" href="{{ route('shop.dashboard.dealer.profile') }}">
                   <i class="fa fa-user" style="color:#fbcc34;"></i>Profile         
                </a>
                <a class="dropdown-item" href="{{ route('shop.dashboard.customer.home') }}">
                    <i class="fa fa-user" style="color:#fbcc34;"></i> My Dashboard         
                </a>
                @hasrole('panel')
                <a class="dropdown-item" href="{{ route('management.panel.home') }}">
                    <i class="fa fa-user" style="color:#fbcc34;"></i> Panel Dashboard         
                </a>
                @endhasrole
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  <i class="fa fa-lock" style="color:#fbcc34;"></i>  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
    {{-- <button class="navbar-toggler aside-menu-toggler d-md-down-none" type="button" data-toggle="aside-menu-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button> --}}
    
  
</header>