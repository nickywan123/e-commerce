@extends('layouts.management.main-dealer')



@section('content')

<script type="text/javascript">

  window.onload = function () {
  
  
  // Graph curve chart
      var ctx = document.getElementById('myChart').getContext("2d")
      var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
      gradientStroke.addColorStop(0, "#80b6f4");
      gradientStroke.addColorStop(0.2, "#94d973");
      gradientStroke.addColorStop(0.5, "#fad874");
      gradientStroke.addColorStop(1, "#f49080");
  
          var myChart = new Chart(ctx, {
           type: 'line',
           data: {
              
              labels: ["May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov","Dec"],
              datasets: [{
                   label: "Sales",
                  borderColor: gradientStroke,
                  pointBorderColor: gradientStroke,
                  pointBackgroundColor: gradientStroke,
                   pointHoverBackgroundColor: gradientStroke,
                   pointHoverBorderColor: gradientStroke,
               pointBorderWidth: 10,
               pointHoverRadius: 10,
               pointHoverBorderWidth: 1,
               pointRadius: 3,
               fill: false,
               borderWidth: 4,
               
               data: [20, 41, 46, 34, 34, 46, 39,46]
          }]
      },
      options: {

        title: {
            display: true,
            text: 'Year 2020'
        },

          legend: {
              position: "bottom",
              display: false
          },

          annotation: {
           annotations: [{
           type: 'line',
           mode: 'horizontal',
           scaleID: 'y-axis-0',
           value: 5,
           borderColor: 'red',
           borderWidth: 4,
          label: {
          enabled: false,
          content: 'Test label'
               }
      }]
    },
          scales: {
              yAxes: [{
                  ticks: {
                      fontColor: "rgba(0,0,0,0.5)",
                      fontStyle: "bold",
                     // beginAtZero: 10,
                      suggestedMin: 10,
                      suggestedMax: 50,
                      maxTicksLimit: 5,
                      padding: 20
                  },
                  gridLines: {
                      drawTicks: false,
                      display: true,
                      drawBorder: false,
                  }
  }],
              xAxes: [{
                  gridLines: {
                      zeroLineColor: "transparent",
                      display:false
  },
                  ticks: {
                      padding: 20,
                      fontColor: "rgba(0,0,0,0.5)",
                      fontStyle: "bold"
                  }
              }]
          }
      }
  });
  

  }
   
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



<br>

<div class="row">

  <div class="col-8">

     <div class="row">
       <img src="{{asset('/storage/dealer/banners/welcome-banner.png')}}" alt="welcome-banner" style="width:100%;">
     </div>
     <br>
  
     <div class="row">

       <div class="col-6">      
        <div class="card border-radius-card shadow" >
         <div class="card-body" style="height: 150px;">

           <div class="row">
             <div class="col-6">
              <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Today Sales</h4>
             </div>
             <div class="col-6 ">
              <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
              </div>
           </div>
          
           <div class="row">
             <div class="col-1 ml-4">
              <img src="{{asset('/storage/dealer/icons/sales-icon.png')}}" style="height:50px; width:50px;" alt="sales-icon">
             </div>
             <div class="col-7 ml-4" style="line-height: 20px;">   
              <p class="card-title" style="font-weight:bold; font-size:15pt;">RM 28,888</P>
              <p>Daily Revenue: 08/05/2020</p>
             </div>
           </div> 

         </div>
        </div>  

        <div class="card border-radius-card shadow" >
          <div class="card-body" style="height: 150px;">
 
            <div class="row">
              <div class="col-6">
               <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Sales Summary</h4>
              </div>
              <div class="col-6">
               <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
               </div>
            </div>
           
            <div class="row">
              <div class="col-1 ml-4">
               <img src="{{asset('/storage/dealer/icons/sales-icon.png')}}" style="height:50px; width:50px;" alt="sales-icon">
              </div>
              <div class="col-7 ml-4" style="line-height: 20px;">
               <p class="card-title" style="font-weight:bold; font-size:15pt;">RM 88,888</P>
               Month Revenue: May 2020
              </div>
            </div> 
 
          </div>
         </div>  


         <div class="card border-radius-card shadow"  >
          <div class="card-body"  >
            <div class="row">
              <div class="col-8">
               <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Group Performance</h4>
              </div>
              <div class="col-4">
               <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
               </div>
            </div>
            <div class="row">
              <div class="col-6 text-bold" >
                <p class="ml-2">Member A</p>
                <div class="card border-radius-card mt-1 border-warning sub-border-color" >
                  <div class="card-body" style="max-height: 200px;">  
                   <div class="row" style="border-bottom: 1pt solid #fbcc34 ;">
                    <p class="card-title" style="font-weight:bold; font-size:14pt;">RM 5,888</P>
                     <p style="font-size:15px; color: #d6d4d4;"> Sales Revenue | Today</p>
                   </div>
                   <div class="row mt-2" >
                    <p class="card-title" style="font-weight:bold; font-size:13pt;">RM 20,888</P>
                     <p style="font-size:15px; color: #d6d4d4;"> Sales Revenue | Month</p>
                   </div>    
                  </div>
                </div>
              </div>

              <div class="col-6 text-bold" >
                <p class="ml-2">Member B</p>
                <div class="card border-radius-card mt-1 border-warning sub-border-color" >
                  <div class="card-body" style="max-height: 200px;">
                 
                   <div class="row" style="border-bottom: 1pt solid #fbcc34 ;">
                    <p class="card-title" style="font-weight:bold; font-size:14pt;">RM 8,888</P>
                     <p style="font-size:15px; color: #d6d4d4;"> Sales Revenue | Today</p>
                   </div>
                   
                   <div class="row mt-2" >
                    <p class="card-title" style="font-weight:bold; font-size:13pt;">RM 68,888</P>
                     <p style="font-size:15px; color: #d6d4d4;"> Sales Revenue | Month</p>
                   </div>
                   
                  </div>
                </div>
              </div>
                      
            </div> 
          </div>
         </div>  
       </div>


    <div class="col-6">

     {{--Card-3--}}
      <div class="card border-radius-card shadow" >
        <div class="card-body" style="min-height: 285px;">

          <div class="row">
            <div class="col-6">
             <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Monthly Income</h4>
            </div>
            <div class="col-6 ">
             <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
             </div>
          </div>
         
          <div class="row">
            <canvas id="myChart"></canvas>
          </div> 

        </div>
       </div>  

       {{--End-Card-3--}}

       {{--Card-4--}}


       <div class="card border-radius-card shadow" style=";height: 340px;" >
        <div class="card-body">
          <div class="row">
            <div class="col-6">
             <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Profile</h4>
            </div>
            <div class="col-6 ">
             <p class="card-title" style="float: right; color:#ffcc00;">Edit</p>
             </div>
          </div>
         
          <div class="row mt-2">
            <div class="col-4">
              <img src="{{asset('/storage/dealer/icons/img_avatar.png')}}" style="border-radius:50%; max-width: 70px;" alt="Dealer-Image">
            </div>
            <div class="col-8"> 
                <p class="text-bold" >Dealer</p> 
                <p style="color: #d6d4d4; line-height:10px;">Billing Address:</p>
                <p style="font-size:11px; font-weight:bold; line-height: 1px;">Manas Hotel 285-287, Jalan Tunku Abdul</p>
                <p style="font-size:11px; font-weight:bold; line-height: 1px;">Rahman 50100 Kuala Lumpur,Malaysia</p>
                <p style="font-size:11px; font-weight:bold; line-height: 1px;">012-2351232</p>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-4" style="border-right: 1px solid #d6d4d4;"><strong style="margin-left: 15px;">118</strong> <br> Total Sales </div>
            <div class="col-4" style="border-right: 1px solid #d6d4d4;"><strong style="margin-left: 25px;">5</strong> <br>New Order</div>
            <div class="col-4"><strong style="margin-left: 35px;">1</strong> <br> New Members</div>
          </div>
        </div>
       </div>  

    {{--End-Card-4--}}


    </div>
  </div>
 </div>


  <div class="col-4">
    <div class="row" >
      <div class="col-10">
       <p class="text-bold" style="font-size:15pt; border-bottom:1px solid black;">Announcement</p>
      </div>
    </div>

    <div class="row">
      <div class="col-10">
        <p style="color:#d6d4d4;">4 minutes ago</p>
        <p class="text-bold" style="line-height: 1px; font-size:20px;">Message Title</p>
        <p style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        <p style="border-bottom:1px solid black;"></p>
      </div>
    </div>

    <div class="row">
      <div class="col-10">
        <p style="color:#d6d4d4;">1.00 PM</p>
        <p class="text-bold" style="line-height: 1px; font-size:20px;">Message Title</p>
        <p style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        <p style="border-bottom:1px solid black;"></p>
      </div>
    </div>

    <div class="row">
      <div class="col-10">
        <p style="color:#d6d4d4;">Yesterday 10.00 AM</p>
        <p class="text-bold" style="line-height: 1px; font-size:20px;">Message Title</p>
        <p style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        <p style="border-bottom:1px solid black;"></p>
        <p  style="color:#ffcc00; text-align:center;">Show more</p>
      </div>
    </div>
   

    <div class="card border-radius-card shadow" style="height:340px; margin-top:11vh;">
      <div class="card-body ">
        <div class="row">
          <div class="col-6">
           <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Feedback</h4>
          </div>
          <div class="col-6 ">
           <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
          </div>
        </div>
       
        <div class="row">
          <div class="col-10">
            <p style="color:#d6d4d4;">4 minutes ago</p>
            <p class="text-bold" style="line-height: 1px;">Message Title</p>
            <p style="font-size: small;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
            <p>
              <span class="fa fa-star" style="color:#ffcc00;"></span>
              <span class="fa fa-star" style="color:#ffcc00;"></span>
              <span class="fa fa-star" style="color:#ffcc00;"></span>
              <span class="fa fa-star-o"></span>
              <span class="fa fa-star-o"></span>
            </p>
            
          </div>
        </div>

  
      </div>
     </div>  


  </div>




</div>







<style>

.border-radius-card{
  border-radius: 15px;

}

.text-bold{
  font-weight: bold;
}

.sub-border-color{
  border: 2pt solid #fbcc34;
}



</style>


@endsection