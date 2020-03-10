<style>
    .caret {
        color: red;
    }

    .image {

        margin-top: -80px;
        margin-left: 100px;
        height: 70px;

    }

    .topnav-right {
        float: right;
    }


    /*navigation*/

    .navigation {
        padding: 0;
        margin: 0;
        
        line-height: 1;
      
    }

    .navigation ul,
    .navigation ul li,
    .navigation ul ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .navigation ul {
        position: relative;
        z-index: 500;
        float: left;
    }

    .navigation ul li {
        float: left;
        min-height: 0.05em;
        line-height: 1em;
        vertical-align: middle;
        position: relative;

    }

    .navigation ul li.hover,
    .navigation ul li:hover {
        position: relative;
        z-index: 510;
        cursor: default;
        background-color: #ffffff;
    }

    .navigation ul ul {
        visibility: hidden;
        position: absolute;
        top: 100%;
        left: 0px;
        z-index: 520;
        width: 100%;
    }

    .navigation ul ul li {
        float: none;
    }

    .navigation ul ul ul {
        top: 0;
        right: 0;
    }

    .navigation ul li:hover>ul {
        visibility: visible;

    }

    .navigation ul ul {
        top: 0;
        left: 99%;
    }

    .navigation ul li {
        float: none;
    }
.navbar{
    border-bottom: 1px solid #fbcc34;
}
    .navigation ul ul {
        margin-top: 0.05em;
    }

    .navigation {
        width: 0;
        background: white;
        font-family: 'roboto', Tahoma, Arial, sans-serif;
        zoom: 1;
        border-bottom: 4px solid #fbcc34;
    }

    .navigation:before {
        content: '';
        display: block;
    }

    .navigation:after {
        content: '';
        display: table;
        clear: both;
    }

    .navigation a {
        display: block;
        padding: 1em 1.3em;
        color: #ffffff;
        text-decoration: none;
        text-transform: uppercase;
    }

    .navigation>ul {
        width: 13em;

    }

    .navigation ul ul {
        width: 13em;
    }

    .navigation>ul>li>a {
        border-right: 0.3em solid white;
        color: black;

    }



    .navigation>ul>li a:hover {
        background-color: #ffffff;
    }

    .navigation>ul>li:hover a {
        background: #fbcc34;
        color: black;
    }

    .navigation li {
        position: relative;
    }

    .navigation ul li.has-sub>a:after {
        content: '»';
        position: absolute;
        right: 1em;

    }

    .navigation ul ul li.first {
        -webkit-border-radius: 0 3px 0 0;
        -moz-border-radius: 0 3px 0 0;
        border-radius: 0 3px 0 0;
    }

    .navigation ul ul li.last {
        -webkit-border-radius: 0 0 3px 0;
        -moz-border-radius: 0 0 3px 0;
        border-radius: 0 0 3px 0;
        border-bottom: 0;
    }

    .navigation ul ul {
        -webkit-border-radius: 0 3px 3px 0;
        -moz-border-radius: 0 3px 3px 0;
        border-radius: 0 3px 3px 0;
    }

    .navigation ul ul {
        border: 1px solid white;
    }

    .navigation ul ul a {
        color: #ffffff;
    }

    .navigation ul ul a:hover {
        color: black;
        background: white;
    }

    .navigation ul ul li {
        border-bottom: 1px solid #fbcc34;
    }

    .navigation ul ul li:hover>a {
        background: white;
        color: black;
    }

    .navigation.align-right>ul>li>a {
        border-left: 0.3em solid white;
        border-right: none;
    }

    .navigation.align-right {
        float: right;
    }

    .navigation.align-right li {
        text-align: right;
    }

    .navigation.align-right ul li.has-sub>a:before {
        content: '+';
        position: absolute;
        top: 50%;
        left: 15px;
        margin-top: -6px;

    }

    .navigation.align-right ul li.has-sub>a:after {
        content: none;
        background-color: #ffffff;
    }

    .navigation.align-right ul ul {
        visibility: hidden;
        position: absolute;
        top: 0;
        left: -100%;
        z-index: 598;
        width: 100%;
    }

    .navigation.align-right ul ul li.first {
        -webkit-border-radius: 3px 0 0 0;
        -moz-border-radius: 3px 0 0 0;
        border-radius: 3px 0 0 0;
    }

    .navigation.align-right ul ul li.last {
        -webkit-border-radius: 0 0 0 3px;
        -moz-border-radius: 0 0 0 3px;
        border-radius: 0 0 0 3px;
    }
 
    .navigation.align-right ul ul {
        -webkit-border-radius: 3px 0 0 3px;
        -moz-border-radius: 3px 0 0 3px;
        border-radius: 3px 0 0 3px;
    }
    
    /* Overrides */
  
</style>

<div class="animate">

    <nav class="navbar header-top  navbar-expand-lg  navbar-dark bg-dark" >

        <span class="navbar-toggler-icon leftmenutrigger " style="margin-top:5%; "></span>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler ml-auto custom-toggler " style="" id="#hamburger" type="button"  data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse navigation " id="navbarText">
            <ul class="navbar-nav animate side-nav">
                <li class="nav-item has-sub">
                    <a href="#">Menu 1</a>
                    <ul>
                        <li class="has-sub"> <a href="#">Submenu 1.1</a>
                            <ul>
                                <li><a href="#">Submenu 1.1.1</a></li>
                                <li class="has-sub"><a href="#">Submenu 1.1.2</a>
                                    <ul>
                                        <li><a href="#">Submenu 1.1.2.1</a></li>
                                        <li><a href="#">Submenu 1.1.2.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Submenu 1.2</a></li>
                    </ul>
                </li>
                <li class="has-sub"> <a href="#">Menu 2</a>
                    <ul>
                        <li><a href="#">Submenu 2.1</a></li>
                        <li><a href="#">Submenu 2.2</a></li>
                    </ul>
                </li>
                <li class="has-sub"> <a href="#">Menu 3</a>
                    <ul>
                        <li><a href="#">Submenu 3.1</a></li>
                        <li><a href="#">Submenu 3.2</a></li>
                    </ul>
                </li>






            </ul>
            <div>
                <img class="image" src="{{asset('/images/Logo.png')}}" alt="No LOGO">
            </div>

            <ul class="navbar-nav ml-md-auto d-md-flex" style="position: absolute;  right: 62%; top:20%;">
         
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle " style="  background-color: white; margin-top:0px;color:black; height:37px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        All Categories
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <form class="form-inline" action="#">
                    <input class=" form-control" style="width:650px; height:37px;" type="text" placeholder="Search For Product">
                    <!-- <div class="line-separator" style="width:30px; background-color:red;"></div> -->

                </form>
                <button class="btn btn-light" type="submit" style="height: 37px;margin-top:0px"><i class="fa fa-search "></i></button>
                <button type="button" style="color:#fbcc34;" class="btn btn-link">My Account</button>
                <button type="button" style="color:#fbcc34;" class="btn btn-link">Login</button>
                <button type="button" style="color:#fbcc34;" class="btn btn-link">Register</button>
              <button type="button" style="background-color:#fbcc34;margin-right:20px;border-radius: 15px;"class="btn btn-sm"><b>PANEL</b></button>
              <button type="button" style="background-color:#fbcc34;border-radius: 15px;"class="btn btn-sm"><b>DEALER</b></button>
              <br>
              <i class="fa fa-heart-o" style="font-size:20px;color:#fbcc34;right:120%;position: relative;
top: 40px;"></i> <button type="button" style="color:#fbcc34;right:125%;position: relative;top: 33px;" class="btn btn-link">My Wish List</button>  
    <img class=”img-logo” src="{{ asset('images/cart.png') }}" style="width:28px; height: 30px;right:120%;position: relative;
top: 40px;" /> <button type="button" style="color:#fbcc34;right:125%;position: relative;top: 33px;" class="btn btn-link">My Cart</button>  
          
            </ul>
            

        </div>

</div>




</nav>

</div>

<script>
    $(document).ready(function() {

        $(".dropdown-submenu").click(function(event) {
            // stop bootstrap.js to hide the parents
            event.stopPropagation();
            // hide the open children
            $(this).find(".dropdown-submenu").removeClass('open');
            // add 'open' class to all parents with class 'dropdown-submenu'
            $(this).parents(".dropdown-submenu").addClass('open');
            // this is also open (or was)
            $(this).toggleClass('open');
        });

    });
</script>




<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-46156385-1', 'cssscript.com');
    ga('send', 'pageview');
</script>