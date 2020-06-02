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
        <img class="navbar-brand-full margin-right-logo-mobile img-logo-resize" src="{{asset('storage/logo/Bujishu-logo.png')}}" width="40" height="40" alt="Bujishu Logo">
        <img class="navbar-brand-minimized" src="{{asset('storage/logo/Bujishu-logo.png')}}" width="30" height="30" alt="Bujishu Logo">
    </a>

  

    <ul class="nav navbar-nav ml-auto">      
      <h5 style="margin-right:10px" class="welcome-text ">{{Auth::user()->userInfo->full_name}}</h5> 
      <li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
           <img class="img-avatar" src="{{asset('storage/avatar/default-avatar.jpg')}}" alt="{{ Auth::user()->userInfo->full_name }}">
         </a>
            <div class="dropdown-menu dropdown-menu-right">
         
                <a class="dropdown-item" href="{{ route('management.company.profile') }}">
                    <i class="fa fa-user" style="color:#fbcc34;"></i> Panel Profile             
                </a>
                <a class="dropdown-item" href="{{ route('shop.dashboard.customer.home') }}">
                    <i class="fa fa-user" style="color:#fbcc34;"></i> My Dashboard         
                </a>
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