<!DOCTYPE html>
<html>
<title>Panel Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<head>




<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>



<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="{{ asset('js/app.js') }}"></script>

<!-- Jquery for Date Picker UI-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>





</head>



<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top  w3-large "  style="z-index:10; background-color:FFCC00 ">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Bujishu</span>
</div>


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse  w3-animate-left" style="z-index:3;width:300px; background-color:black" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Panel</strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5 class="w3-text-green">Dashboard</h5>
  </div>
  <div class="w3-bar-block">
   
    <a href="/dashboard/panel" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Customer Orders</a>

    
   

  

   
  </div>
</nav>


<div class="w3-main" style="margin-left:300px;margin-top:23px;">

 
 

   
@yield('content')

</div>  

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>



<script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");
    
    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");
    
    // Toggle between showing and hiding the sidebar, and add overlay effect
    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
      } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
      }
    }
    
    // Close the sidebar with the close button
    function w3_close() {
      mySidebar.style.display = "none";
      overlayBg.style.display = "none";
    }

    


    

</script>

<script>
  $( function() {
      $( ".date" ).datepicker({
         
        dateFormat: 'yy-mm-dd'
          
      });
  });
</script>


    </body>
    </html>
    