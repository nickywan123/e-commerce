<footer style="max-width:100%; overflow: hidden; border-top: 3px solid #fbcc34; padding-top: 0.5rem; background-color: #000;">
    <div class="row pl-2 pr-2">
        <div class="col-6 col-md-2 text-center text-md-left">
            <h5 class="pr-1 pl-1 bujishu-gold">Information</h5>
            <ul class="list-unstyled pr-2 pl-2 bujishu-gold">
                <li>
                    <a class="bujishu-gold" href="">About Us</a>
                </li>
                <li>
                    <a class="bujishu-gold" href="">FAQ</a>
                </li>
                <li>
                    <a class="bujishu-gold" href="">Privacy Policy</a>
                </li>
            </ul>
        </div>
        <div class="col-6 col-md-2 text-center text-md-left">
            <h5 class="pr-1 pl-1 bujishu-gold">Account</h5>
            <ul class="list-unstyled pr-2 pl-2">
                @if(!Auth::check())
                <li>
                    <a class="bujishu-gold" href="">Sign In</a>
                </li>
                @endif
                <li>
                    <a class="bujishu-gold" href="">My Cart</a>
                </li>
                <li>
                    <a class="bujishu-gold" href="">My Wishlist</a>
                </li>
            </ul>
        </div>
    </div>
</footer>

<section class="container-fluid" style="background-color: #000;">
    <h6 class="text-right" style="color:white;">@ 2020 Bujishu. All Rights Reserved</h6>
</section>