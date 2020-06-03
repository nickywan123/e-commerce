@extends('layouts.management.main-dealer')



@section('content')

<script type="text/javascript">

  window.onload = function () {
  
  
  // Graph curve chart - Desktop
      var ctx = document.getElementById('myChart').getContext("2d")
      var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
      gradientStroke.addColorStop(0, "#000000");
      gradientStroke.addColorStop(0.2, "#000000");
      gradientStroke.addColorStop(0.5, "#000000");
      gradientStroke.addColorStop(1, "#000000");
      
  
          var myChart = new Chart(ctx, {
           type: 'line',
           data: {
              
              labels: ["May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov","Dec"],
              datasets: [{
              label: "Sales",
              borderColor: gradientStroke,
              pointBorderColor: gradientStroke,      
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

        pointBackgroundColor: ["Red"],

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
  

   // Graph curve chart - Mobile
   var ctx = document.getElementById('myChartMobile').getContext("2d")
      var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
      gradientStroke.addColorStop(0, "#fbcc34");
      gradientStroke.addColorStop(0.2, "#fbcc34");
      gradientStroke.addColorStop(0.5, "#fbcc34");
      gradientStroke.addColorStop(1, "#fbcc34");
  
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

// Graph curve chart - Laptop
var ctx = document.getElementById('myChartLaptop').getContext("2d")
      var gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
      gradientStroke.addColorStop(0, "#fbcc34");
      gradientStroke.addColorStop(0.2, "#fbcc34");
      gradientStroke.addColorStop(0.5, "#fbcc34");
      gradientStroke.addColorStop(1, "#fbcc34");
  
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


{{------------------DESKTOP Layout-----------------------}}

<div class="hidden-sm " >
 <div class="row">
  <div class="row">
   <div class="col-12 col-md-12">
      <div class="row ml-1">
        <img src="{{asset('/storage/dealer/banners/welcome-banner.png')}}" alt="welcome-banner" style="width:98%;">
      </div>
     <br>
      <div class="row">
       <div class="col-6 col-md-6">      
        <div class="card border-radius-card shadow" >
         <div class="card-body" style="height: 150px;">
             <div class="row">
              <div class="col-6 col-md-6">
              <h4 class="card-title " style="font-weight:bold; font-size:15pt;">Today Sales</h4>
              </div>
              <div class="col-6 col-md-6">
               <p class="card-title " style="float: right; color:#ffcc00;">Show more</p>
              </div>
             </div>
          
            <div class="row">
             <div class="col-1 col-md-1 ml-4">
              <img src="{{asset('/storage/dealer/icons/sales-icon.png')}}" style="height:60px; width:60px;" alt="sales-icon">
             </div>
             <div class="col-7 col-md-7 ml-4 mt-2" style="line-height: 20px;">   
              <p class="card-title " style="font-weight:bold; font-size:20pt;">RM {{number_format($todaySales)}}</p>
              <p class="">Daily Revenue: {{ date('d/m/yy') }}</p>
             </div>
            </div> 
         </div>
       </div>  

        <div class="card border-radius-card shadow" >
          <div class="card-body" style="height: 150px;">
            <div class="row">
              <div class="col-6 col-md-6">
               <h4 class="card-title " style="font-weight:bold; font-size:15pt;">Sales Summary</h4>
              </div>
              <div class="col-6 col-md-6">
               <p class="card-title " style="float: right; color:#ffcc00;">Show more</p>
              </div>
            </div>
           
            <div class="row">
              <div class="col-1 col-md-1 ml-4">
               <img src="{{asset('/storage/dealer/icons/sales-icon.png')}}" style="height:60px; width:60px;" alt="sales-icon">
              </div>
              <div class="col-7 col-md-7 ml-4 mt-2" style="line-height: 20px;">
               <p class="card-title " style="font-weight:bold; font-size:20pt;">RM {{number_format($monthlySales)}}</P>
               Month Revenue:  {{ date('F Y') }}
              </div>
            </div> 
          </div>
         </div>  
        </div>

         <div class="col-6 col-md-6">
          <div class="card border-radius-card shadow" >
            <div class="card-body" style="min-height: 325px;">
              <div class="row">
                <div class="col-6 col-md-6">
                  <h4 class="card-title " style="font-weight:bold; font-size:15pt;">Monthly Income</h4>
                </div>
                <div class="col-6 col-md-6">
                 <p class="card-title " style="float: right; color:#ffcc00;">Show more</p>
                </div>
              </div>
              <div class="row">
                <canvas id="myChart"></canvas>
              </div> 
            </div>
           </div>  
          </div>
       </div>
     </div>
   </div>


  <div class="col-4 col-md-4 ml-5">
    <div class="row" >
      <div class="col-12 col-md-12">
       <p class="text-bold " style="font-size:15pt; border-bottom:1px solid black;">Announcement</p>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12">
        <p class="" style="color:#d6d4d4;">4 minutes ago</p>
        <p class="text-bold " style="line-height: 1px; font-size:20px;">Message Title</p>
        <p class="" style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        <p style="border-bottom:1px solid black;"></p>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12">
        <p class="" style="color:#d6d4d4;">1.00 PM</p>
        <p class="text-bold " style="line-height: 1px; font-size:20px;">Message Title</p>
        <p class="" style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        <p style="border-bottom:1px solid black;"></p>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12">
        <p class="" style="color:#d6d4d4;">Yesterday 10.00 AM</p>
        <p class="text-bold " style="line-height: 1px; font-size:20px;">Message Title</p>
        <p class="" style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        <p class=""  style="border-bottom:1px solid black;"></p>
        <p class=""  style="color:#ffcc00; text-align:center;">Show more</p>
      </div>
    </div>
  </div>
</div>



<div class="row">
   <div class="col-4 col-md-4" style="max-width: 490px;padding: 0px;">
    <div class="card border-radius-card shadow" >
      <div class="card-body">
        <div class="row">
          <div class="col-8 col-md-8 ">
           <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Group Performance</h4>
          </div>
          <div class="col-4 col-md-4 ">
           <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
           </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-6 text-bold " >
            <p class="ml-2">Member A</p>
            <div class="card border-radius-card mt-1  sub-border-color" >
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
          <div class="col-6 col-md-6 text-bold " >
            <p class="ml-2">Member B</p>
            <div class="card border-radius-card mt-1  sub-border-color" >
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

   <div class="col-4 ">
    <div class="card border-radius-card shadow" style="width:490px;height: 345px;" >
      <div class="card-body">
        <div class="row">
          <div class="col-6 col-md-6">
           <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Profile</h4>
          </div>
          <div class="col-6 col-md-6 ">
           <a href="{{route('shop.dashboard.customer.profile.edit')}}"><p class="card-title" style="float: right;margin-right:30px; color:#ffcc00;">Edit</p></a>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-3 col-md-3">
            <img src="{{asset('/storage/dealer/icons/img_avatar.png')}}" style="border-radius:50%; max-width: 70px;" alt="Dealer-Image">
          </div>
          <div class="col-9 col-md-9"> 
              <p class="text-bold" >Dealer</p> 
              <p style="color: #d6d4d4; line-height:10px; font-size:14pt;">Billing Address:</p>
              <p style="font-size:11px; font-weight:bold; line-height: 1px; font-size:11pt;">Manas Hotel 285-287, Jalan Tunku Abdul</p>
              <p style="font-size:11px; font-weight:bold; line-height: 1px; font-size:11pt;">Rahman 50100 Kuala Lumpur,Malaysia</p>
              <p style="font-size:11px; font-weight:bold; line-height: 1px; font-size:11pt;">012-2351232</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-4 col-md-4" style="border-right: 1px solid #d6d4d4;"><strong style="margin-left: 15px;">118</strong> <br> Total Sales </div>
          <div class="col-4 col-md-4" style="border-right: 1px solid #d6d4d4;"><strong style="margin-left: 25px;">5</strong> <br>New Order</div>
          <div class="col-4 col-md-4"><strong style="margin-left: 35px;">1</strong> <br> New Members</div>
        </div>
      </div>
     </div>  
   </div>


  <div class="col-4 col-md-4 ">
    <div class="card border-radius-card shadow" style="height:340px; ">
      <div class="card-body">
        <div class="row">
          <div class="col-6 col-md-6">
           <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Feedback</h4>
          </div>
          <div class="col-6 col-md-6 ">
           <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
          </div>
        </div> 
        <div class="row">
          <div class="col-10 col-md-6">
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
   </div>
  </div>
</div>




{{------------------Mobile Layout----------------------------------------}}

<div class="hidden-md">

  <div class="row">
    <img src="{{asset('/storage/dealer/banners/welcome-banner.png')}}" alt="welcome-banner" style="width:98%;">
  </div>


  <div class="row mt-2 ml-1">
    <div class="card border-radius-card shadow" style="width:100%; max-width:370px;" >
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
           <p class="card-title" style="font-weight:bold; font-size:15pt;">RM {{number_format($todaySales)}}</P>
           <p>Daily Revenue: {{ date('d/m/yy') }}</p>
          </div>
        </div> 
      </div>
     </div>  
  </div>

  <div class="row mt-2 ml-1">
    <div class="card border-radius-card shadow" style="width:100%; max-width:370px;" >
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
           <p class="card-title" style="font-weight:bold; font-size:15pt;">RM {{number_format($monthlySales)}}</P>
           Month Revenue:  {{ date('F Y') }}
          </div>
        </div> 
      </div>
     </div>  
    </div>
 
 
  <div class="row">
    <div class="col-12">
      <div class="card border-radius-card shadow" >
        <div class="card-body" style="min-height: 325px;">
          <div class="row">
            <div class="col-6">
              <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Monthly Income</h4>
            </div>
            <div class="col-6 ">
             <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
            </div>
          </div>
          <div class="row">
            <canvas id="myChartMobile"></canvas>
          </div> 
        </div>
       </div>  
     </div>
  </div>


  <div class="row ml-1">
    <div class="card border-radius-card shadow" style="width:100%; max-width:370px;" >
      <div class="card-body">
        <div class="row">
          <div class="col-8">
           <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Group Performance</h4>
          </div>
          <div class="col-4">
           <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
           </div>
        </div>
        <div class="row">
          <div class="col-12 text-bold" >
            <p class="ml-2">Member A</p>
            <div class="card border-radius-card mt-1 border-warning sub-border-color" >
              <div class="card-body" style="max-height: 200px;">  
               <div class="row" style="border-bottom: 1pt solid #fbcc34 ;">
                <p class="card-title" style="font-weight:bold; font-size:14pt;">RM 5,888</P>
                <p style="font-size:15px; color: #d6d4d4; margin-left: 75px;"> Sales Revenue | Today</p>
               </div>
               <div class="row mt-2" >
                <p class="card-title" style="font-weight:bold; font-size:13pt;">RM 20,888</P>
                <p style="font-size:15px; color: #d6d4d4; margin-left: 70px;"> Sales Revenue | Month</p>
               </div>    
              </div>
            </div>
          </div>
          <div class="col-12 text-bold" >
            <p class="ml-2">Member B</p>
            <div class="card border-radius-card mt-1 border-warning sub-border-color" >
              <div class="card-body" style="max-height: 200px;">        
               <div class="row" style="border-bottom: 1pt solid #fbcc34 ;">
                <p class="card-title" style="font-weight:bold; font-size:14pt;">RM 8,888</P>
                <p style="font-size:15px; color: #d6d4d4; margin-left: 75px;"> Sales Revenue | Today</p>
               </div>
               <div class="row mt-2" >
                <p class="card-title" style="font-weight:bold; font-size:13pt;">RM 68,888</P>
                <p style="font-size:15px; color: #d6d4d4; margin-left: 70px;"> Sales Revenue | Month</p>
               </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>

  <div class="row ml-1">
    <div class="card border-radius-card shadow" style="width:100%;height: 345px; max-width:370px;" >
      <div class="card-body">
        <div class="row">
          <div class="col-6">
           <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Profile</h4>
          </div>
          <div class="col-6 ">
           <p class="card-title" style="float: right;margin-right:30px; color:#ffcc00;">Edit</p>
           </div>
        </div>
        <div class="row mt-2">
          <div class="col-3">
            <img src="{{asset('/storage/dealer/icons/img_avatar.png')}}" style="border-radius:50%; max-width: 70px;" alt="Dealer-Image">
          </div>
          <div class="col-9"> 
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
          <div class="col-4"><strong style="margin-left: 35px;">1</strong> <br> New Member</div>
        </div>
      </div>
     </div>  
  </div>


    <div class="row ml-1">
    
      <div class="col-11">
       <p class="text-bold" style="font-size:15pt; border-bottom:1px solid black;">Announcement</p>
      </div>

   
      <div class="col-11">
        <p style="color:#d6d4d4;">4 minutes ago</p>
        <p class="text-bold" style="line-height: 1px; font-size:20px;">Message Title</p>
        <p style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        <p style="border-bottom:1px solid black;"></p>
      </div>


      <div class="col-11">
        <p style="color:#d6d4d4;">1.00 PM</p>
        <p class="text-bold" style="line-height: 1px; font-size:20px;">Message Title</p>
        <p style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        <p style="border-bottom:1px solid black;"></p>
      </div>

      <div class="col-11">
        <p style="color:#d6d4d4;">Yesterday 10.00 AM</p>
        <p class="text-bold" style="line-height: 1px; font-size:20px;">Message Title</p>
        <p style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
        <p style="border-bottom:1px solid black;"></p>
        <p  style="color:#ffcc00; text-align:center;">Show more</p>
      </div>
    </div>
  

    <div class="row ml-1">
      <div class="card border-radius-card shadow" style="height:340px; max-width:370px;">
        <div class="card-body">
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



{{-------------------------Laptop layout----------------------------}}


{{-- <div class="hidden-laptop ">
  <div class="row">
    <div class="col-8">
      <div class="row ml-2">
        <img src="{{asset('/storage/dealer/banners/welcome-banner.png')}}" alt="welcome-banner" style="width:100%;">
      </div>
      <div class="row mt-2 ml-2">
        <div class="col-6">
          <div class="row ">
            <div class="card border-radius-card shadow" >
              <div class="card-body" style="height: 100%;">
                  <div class="row">
                   <div class="col-6 col-md-6">
                   <h4 class="card-title " style="font-weight:bold; font-size:15pt;">Today Sales</h4>
                   </div>
                   <div class="col-6 col-md-6">
                    <p class="card-title " style="float: right; color:#ffcc00;">Show more</p>
                   </div>
                  </div>
               
                 <div class="row">
                  <div class="col-1 col-md-1 ml-4">
                   <img src="{{asset('/storage/dealer/icons/sales-icon.png')}}" style="height:60px; width:60px;" alt="sales-icon">
                  </div>
                  <div class="col-7 col-md-7 ml-5 mt-2" style="line-height: 20px;">   
                   <p class="card-title " style="font-weight:bold; font-size:20pt;">RM 8,888</P>
                   <p class="">Daily Revenue: {{ date('d/m/yy') }}</p>
                  </div>
                 </div> 
              </div>
            </div>  
          </div>
          <div class="row">
            <div class="card border-radius-card shadow" >
              <div class="card-body" style="height: 100%">
                  <div class="row">
                   <div class="col-6 col-md-6">
                   <h4 class="card-title " style="font-weight:bold; font-size:15pt;">Sales Summary</h4>
                   </div>
                   <div class="col-6 col-md-6">
                    <p class="card-title " style="float: right; color:#ffcc00;">Show more</p>
                   </div>
                  </div>
               
                 <div class="row">
                  <div class="col-1 col-md-1 ml-4">
                   <img src="{{asset('/storage/dealer/icons/sales-icon.png')}}" style="height:60px; width:60px;" alt="sales-icon">
                  </div>
                  <div class="col-7 col-md-7 ml-5 mt-2" style="line-height: 20px;">   
                   <p class="card-title " style="font-weight:bold; font-size:20pt;">RM 28,888</P>
                   <p class="">Monthly Revenue:  {{ date('F Y') }}</p>
                  </div>
                 </div> 
              </div>
            </div>  
          </div>
        </div>
        <div class="col-6">
          <div class="card border-radius-card shadow" style="height: 94%; width:100%;" >
            <div class="card-body" >
              <div class="row">
                <div class="col-6 col-md-6">
                  <h4 class="card-title " style="font-weight:bold; font-size:15pt;">Monthly Income</h4>
                </div>
                <div class="col-6 col-md-6">
                 <p class="card-title " style="float: right; color:#ffcc00;">Show more</p>
                </div>
              </div>
              <div class="row">
                <canvas id="myChartLaptop" style="height:100px;"></canvas>
              </div> 
            </div>
           </div>  
        </div>
    </div>
    </div>

       
    <div class="col-4">
        <div class="row" >
        <div class="col-12 col-md-12">
         <p class="text-bold " style="font-size:15pt; border-bottom:1px solid black;">Announcement</p>
        </div>
      </div>
  
      <div class="row">
        <div class="col-12 col-md-12">
          <p class="" style="color:#d6d4d4;">4 minutes ago</p>
          <p class="text-bold " style="line-height: 1px; font-size:20px;">Message Title</p>
          <p class="" style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
          <p style="border-bottom:1px solid black;"></p>
        </div>
      </div>
  
      <div class="row">
        <div class="col-12 col-md-12">
          <p class="" style="color:#d6d4d4;">1.00 PM</p>
          <p class="text-bold " style="line-height: 1px; font-size:20px;">Message Title</p>
          <p class="" style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
          <p style="border-bottom:1px solid black;"></p>
        </div>
      </div>
  
      <div class="row">
        <div class="col-12 col-md-12">
          <p class="" style="color:#d6d4d4;">Yesterday 10.00 AM</p>
          <p class="text-bold " style="line-height: 1px; font-size:20px;">Message Title</p>
          <p class="" style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
          <p class=""  style="border-bottom:1px solid black;"></p>
          <p class=""  style="color:#ffcc00; text-align:center;">Show more</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-4">
      <div class="card border-radius-card shadow" style="width:100%; height:100%;" >
        <div class="card-body">
          <div class="row">
            <div class="col-8 col-md-8 ">
             <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Group Performance</h4>
            </div>
            <div class="col-4 col-md-4 ">
             <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
             </div>
          </div>
          <div class="row">
            <div class="col-6 col-md-6 text-bold " >
              <p class="ml-2">Member A</p>
              <div class="card border-radius-card mt-1  sub-border-color" >
                <div class="card-body" style="max-height: 200px;">  
                 <div class="row" style="border-bottom: 1pt solid #fbcc34 ;">
                  <p class="card-title" style="font-weight:bold; font-size:14pt;">RM 5,888</P>
                   <p style="font-size:10pt; color: #d6d4d4;"> Sales Revenue | Today</p>
                 </div>
                 <div class="row mt-2" >
                  <p class="card-title" style="font-weight:bold; font-size:13pt;">RM 20,888</P>
                   <p style="font-size:10pt; color: #d6d4d4;"> Sales Revenue | Month</p>
                 </div>    
                </div>
              </div>
            </div>
            <div class="col-6 col-md-6 text-bold " >
              <p class="ml-2">Member B</p>
              <div class="card border-radius-card mt-1  sub-border-color" >
                <div class="card-body" style="max-height: 200px;">        
                 <div class="row" style="border-bottom: 1pt solid #fbcc34 ;">
                  <p class="card-title" style="font-weight:bold; font-size:14pt;">RM 8,888</P>
                  <p style="font-size:10pt; color: #d6d4d4;"> Sales Revenue | Today</p>
                 </div>
                 <div class="row mt-2" >
                  <p class="card-title" style="font-weight:bold; font-size:13pt;">RM 68,888</P>
                  <p style="font-size:10pt; color: #d6d4d4;"> Sales Revenue | Month</p>
                 </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
       </div>
    </div>


    <div class="col-4">
      <div class="card border-radius-card shadow" style="width:100%; height:100%;" >
        <div class="card-body">
          <div class="row">
            <div class="col-6 col-md-6">
             <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Profile</h4>
            </div>
            <div class="col-6 col-md-6 ">
             <a href="{{route('shop.dashboard.customer.profile.edit')}}"><p class="card-title" style="float: right;margin-right:30px; color:#ffcc00;">Edit</p></a>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-3 col-md-3">
              <img src="{{asset('/storage/dealer/icons/img_avatar.png')}}" style="border-radius:50%; max-width: 70px;" alt="Dealer-Image">
            </div>
            <div class="col-9 col-md-9"> 
                <p class="text-bold" >Dealer</p> 
                <p style="color: #d6d4d4; line-height:10px; font-size:14pt;">Billing Address:</p>
                <p style=" font-weight:bold; line-height: 1px; font-size:10pt;">Manas Hotel 285-287, Jalan Tunku Abdul</p>
                <p style=" font-weight:bold; line-height: 1px; font-size:10pt;">Rahman 50100 Kuala Lumpur,Malaysia</p>
                <p style=" font-weight:bold; line-height: 1px; font-size:10pt;">012-2351232</p>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-4 col-md-4" style="border-right: 1px solid #d6d4d4;"><strong style="margin-left: 15px;">118</strong> <br> Total Sales </div>
            <div class="col-4 col-md-4" style="border-right: 1px solid #d6d4d4;"><strong style="margin-left: 25px;">5</strong> <br>New Order</div>
            <div class="col-4 col-md-4"><strong style="margin-left: 35px;">1</strong> <br> New Members</div>
          </div>
        </div>
       </div>  
    </div>
  
  
  <div class="col-4">
    <div class="card border-radius-card shadow" style="height:100%; width:100%; ">
      <div class="card-body">
        <div class="row">
          <div class="col-6 col-md-6">
           <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Feedback</h4>
          </div>
          <div class="col-6 col-md-6 ">
           <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
          </div>
        </div> 
        <div class="row">
          <div class="col-12">
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
  



</div> --}}


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
/*Mobile*/
@media(max-width:767px) {
  .hidden-sm,.hidden-laptop {
    display: none;
     }
  }
 /*Desktop*/
@media(min-width:1801px) {
   .hidden-md,.hidden-laptop {
       display: none;
      }
 }
/*Laptop*/
 @media (max-width: 1800px) and (min-width: 1200px){
     .hidden-sm,.hidden-md{
       display: none;

     }

     }

</style>


@endsection