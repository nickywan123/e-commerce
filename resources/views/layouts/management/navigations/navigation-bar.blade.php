<header class="app-header navbar navbar-bg-color navbar-border-bottom-color nav-height ">

    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon" ></span>
    </button>

    <button class="navbar-toggler sidebar-toggler d-md-down-none"  type="button" data-toggle="sidebar-lg-show">
        {{-- <span class="navbar-toggler-icon"></span> --}}
        <i class="fa fa-bars navigation-icon"></i>
    </button>

    <a class="navbar-brand img-logo-margin-left" href="#">
        <img class="navbar-brand-full margin-right-logo-mobile img-logo-resize" src="{{asset('images/Bujishu_logo.png')}}" width="89" height="50" alt="Bujishu Logo">
        <img class="navbar-brand-minimized" src="{{asset('images/Bujishu_logo.png')}}" width="30" height="30" alt="Bujishu Logo">
    </a>

    

    <ul class="nav navbar-nav ml-auto">
        <h5 class="welcome-panel-text"  >Welcome, ABC Company</h5>
        
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img class="img-avatar" src="{{asset('images/panel-company.png')}}" alt="{{ Auth::user()->userInfo->full_name }}">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
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
                    <i class="fa fa-shield"></i> Lock Account</a>
                <a class="dropdown-item" href="#">
                    <i class="fa fa-lock"></i> Logout</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
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