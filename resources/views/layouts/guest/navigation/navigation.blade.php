<div class="middleBar pt-1 pb-1">
    <div class="container-90">
        <div class="row d-flex">
            <div class="col-12 col-md-4 offset-md-8 vertical-align my-2">
                <ul class="nav float-right font-size-125">
                    @if(!Request::is('login'))
                    <li class="nav-item m-1">
                        <a href="/login " class="btn  grad2 bjsh-btn-gradient btn-small-screen font-family "><b>{{ __('LOGIN') }}</b></a>
                    </li>
                    @endif
                    @if(!Request::is('register'))
                    <li class="nav-item m-1">
                        <a class="btn  grad2 bjsh-btn-gradient btn-small-screen font-family-lat" href="/register"><b>{{ __('JOIN') }}</b></a>
                    </li>
                    @endif
                    @if(!Request::is('register-dealer'))
                    <li class="nav-item m-1">
                        <a href="/register-dealer " class="btn  grad2 bjsh-btn-gradient btn-small-screen font-family"><b>{{ __('Be A DEALER') }}</b></a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>