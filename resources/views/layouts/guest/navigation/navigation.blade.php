<div class="middleBar pt-1 pb-1">
    <div class="container-90">
        <div class="row d-flex">
            <div class="col-12 col-md-4 offset-md-8 vertical-align my-auto">
                <ul class="nav float-right font-size-125">
                    @if(!Request::is('login'))
                    <li class="nav-item m-1">
                        <a class="nav-link hover-white" href="/login">Login</a>
                    </li>
                    @endif
                    @if(!Request::is('register'))
                    <li class="nav-item m-1">
                        <a class="nav-link hover-white" href="/register">Join</a>
                    </li>
                    @endif
                    @if(!Request::is('register-dealer'))
                    <li class="nav-item m-1">
                        <a class="nav-link hover-white" href="/register-dealer">Be A Dealer</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>