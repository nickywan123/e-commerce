@extends('layouts.management.main-panel')



@section('content')
<br>

<script type="text/javascript">

window.onload = function () {

// Horizontal bar chart -desktop
var ctx = document.getElementById('bar-chart-horizontal').getContext("2d")
var myChart = new Chart(ctx,{
    type: 'horizontalBar',
    data: {
      labels: ["Quality", "Delivery on Time", "Review", "Price Comparative"],
      datasets: [
        {
          label: "Monthly Revenue",
          backgroundColor: ["#fbcc34","#fbcc34","#fbcc34","#fbcc34"],
          data: [2478,5267,534,784]
         
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: ['Monthly Revenue: May 2020'],
        fontSize:15
      },
      scales: {
        xAxes: [{
            display: false,
            gridLines: {
                display:true
            }
        }],
        yAxes: [{
            gridLines: {
                display:false
            },
           
            categoryPercentage: 0.9,
            barPercentage: 1.0
            
        }]
    }

    }
});



// Horizontal bar chart - mobile
var ctx = document.getElementById('bar-chart-horizontal-mobile').getContext("2d")
var myChart = new Chart(ctx,{
    type: 'horizontalBar',
    data: {
      labels: ["Quality", "Delivery on Time", "Review", "Price Comparative"],
      datasets: [
        {
          label: "Monthly Revenue",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9"],
          data: [2478,5267,534,784]
         
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Monthly Revenue: May 2020'
      },
      scales: {
        xAxes: [{
            display: false,
            gridLines: {
                display:true
            }
        }],
        yAxes: [{
            gridLines: {
                display:false
            }   
        }]
    }

    }
});

}


</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

{{----------------Desktop Layout-------------------}}

 <div class="hidden-sm ">
    <div class="row">
        <div class="col-8">
        <img src="{{asset('/storage/panel/panel-welcome-banner.png')}}" style="height:90%; width:100%;" alt="welcome-banner">
        </div>
        <div class="col-4 ">
            <div class="card border-radius-card shadow" style="width:100%;height:90%; background-color:#ffcc00;">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                     <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Profile</h4>
                    </div>
                    <div class="col-6 ">
                     <p class="card-title" style="float: right; color:black;">Edit</p>
                     </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col-3">
                      <img src="{{asset('/storage/dealer/icons/img_avatar.png')}}" style="border-radius:50%; max-width: 70px;" alt="Dealer-Image">
                    </div>
                    <div class="col-9 mt-3"> 
                       <p style="font-size:15pt;"><b>Panel</b></p>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12" style="font-size: 11pt;">
                        <p style="color: black; line-height:10px;">Billing Address:</p>
                        <p class="font-size" style=" font-weight:bold; line-height: 1px;">Manas Hotel 285-287, Jalan Tunku Abdul Rahman 50100</p>
                        <p class="font-size" style=" font-weight:bold; line-height: 1px;">Kuala Lumpur,Malaysia</p>
                        <p class="font-size" style=" font-weight:bold; line-height: 1px;">012-2351232</p>
                    </div>
                  </div>
                </div>
            </div>  
        </div>
    </div>


<div class="row">
    <div class="col-8 ">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="card border-radius-card shadow" style="width: 100%;" >
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
                             <img src="{{asset('/storage/dealer/icons/sales-icon.png')}}" style="height:60px; width:60px;" alt="sales-icon">
                            </div>
                            <div class="col-7 ml-5 mt-2" style="line-height: 20px;">   
                             <p class="card-title" style="font-weight:bold; font-size:20pt;">RM {{number_format($todayOrders)}}</P>
                             <p style="color: #939598;">Daily Revenue:  {{ date('d/m/yy') }}</p>
                            </div>
                          </div>       
                        </div>
                       </div>  
                </div>
                <div class="row">
                    <div class="card border-radius-card shadow" style="width: 100%;" >
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
                             <img src="{{asset('/storage/dealer/icons/sales-icon.png')}}" style="height:60px; width:60px;" alt="sales-icon">
                            </div>
                            <div class="col-7 ml-5 mt-2" style="line-height: 20px;">
                             <p class="card-title" style="font-weight:bold; font-size:20pt;">RM {{number_format($monthlyOrders)}}</p>
                             <p style="color: #939598;"> Monthly Revenue:  {{ date('F Y') }}</p>
                            </div>
                          </div> 
                        </div>
                    </div>  
                </div>
               
                <div class="row">
                    <div class="card border-radius-card shadow" style="width:100%; height:100%;" >
                      <div class="card-body" >
                          <div class="row">
                            <div class="col-6">
                             <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Products</h4>
                            </div>
                            <div class="col-6">
                             <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
                             </div>
                          </div>
                         
                          <div class="row" style="border-bottom: 1px solid #ffcc00; ">
                            <div class="col-6">
                                <p >Add Products</p>                     
                            </div>
                            <div class="offset-5 col-1">
                                <p>-</p>
                            </div>
                          </div> 
                          <div class="row mt-3" style="border-bottom: 1px solid #ffcc00; ">
                            <div class="col-6">
                                <p >Update Products</p>                     
                            </div>
                            <div class="offset-5 col-1">
                                <p>-</p>
                            </div>
                          </div> 
                          <div class="row mt-3">
                            <div class="col-6">
                                <p >Product Expired</p>                     
                            </div>
                            <div class="offset-5 col-1">
                                <p>-</p>
                            </div>
                          </div> 
                        </div>
                    </div>  
                </div>
           </div>
               

            <div class="col-6 ">
                <div class="row ml-1">
                    <div class="card border-radius-card shadow" style="width: 100%; height:100%;" >
                        <div class="card-body" >
                          <div class="row">
                            <div class="col-6">
                             <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Sales Tracking</h4>
                            </div>
                            <div class="col-6">
                             <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
                            </div>
                          </div>
                         
                          <div class="row mt-3">
                             <div class="offset-1 col-3">
                                <div class="card card-size" style=" border-radius:10px; background-color:#ffcc00;" >
                                    <div class="card-body">
                                        <p class="text-size"><b>{{$totalDelivery}}</b></p>
                                    </div>
                                </div>
                                <p>Pending Delivery</p>
                             </div>
                             <div class="offset-1 col-3">
                                <div class="card card-size" style=" border-radius:10px; background-color:#ffcc00;" >
                                    <div class="card-body">
                                        <p class="text-size"><b>{{$totalPendingDelivery}}</b></p>
                                    </div>
                                </div>
                                <p>Set Delivery Date</p>
                             </div>
                             <div class="offset-1 col-3">
                                <div class="card card-size" style=" border-radius:10px; background-color:#ffcc00;" >
                                    <div class="card-body">
                                        <p class="text-size"><b>{{$totalPendingClaim}}</b></p>
                                    </div>
                                </div>
                                <p>Pending Claim</p>
                             </div>
                          </div> 
                        </div>
                    </div>  
                </div>

                <div class="row ml-1 ">
                    <div class="card border-radius-card shadow" style="width: 100%; height:100%;" >
                        <div class="card-body">
                          <div class="row">
                            <div class="col-6">
                              <h4 class="card-title" style="font-weight:bold; font-size:15pt;">KPIR</h4>
                            </div>
                            <div class="col-6 ">
                             <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="offset-5 col-4">
                              <h1><strong>65%</strong></h1>
                            </div>
                          </div>
                          <div class="row">
                            <canvas id="bar-chart-horizontal"></canvas>
                          </div> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="col-4 mt-1 ">
        <div class="row ml-1" >
            <div class="col-12">
             <p class="text-bold" style="font-size:15pt; border-bottom:1px solid black;">Announcement</p>
            </div>
        </div>
      
        <div class="row ml-1">
         <div class="col-12">
              <p style="color:#d6d4d4;">4 minutes ago</p>
              <p class="text-bold" style="line-height: 1px; font-size:20px;">Message Title</p>
              <p style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
              <p style="border-bottom:1px solid black;"></p>
         </div>
        </div>
      
        <div class="row ml-1">
         <div class="col-12">
              <p style="color:#d6d4d4;">1.00 PM</p>
              <p class="text-bold" style="line-height: 1px; font-size:20px;">Message Title</p>
              <p style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
              <p style="border-bottom:1px solid black;"></p>
         </div>
        </div>
      
        <div class="row ml-1">
         <div class="col-12">
              <p style="color:#d6d4d4;">Yesterday 10.00 AM</p>
              <p class="text-bold" style="line-height: 1px; font-size:20px;">Message Title</p>
              <p style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
              <p style="border-bottom:1px solid black;"></p>
              <p  style="color:#ffcc00; text-align:center;">Show more</p>
         </div>
        </div>
       </div>
    </div>


</div>

{{----------------------Mobile Layout-------------------------}}

<div class="hidden-md">
    <div class="row">
        <img src="{{asset('/storage/panel/panel-welcome-banner.png')}}" style="height:100%; width:100%;" alt="welcome-banner">
    </div>

    <div class="row mt-2">
        <div class="card border-radius-card shadow" style="width:100%;height:100%; background-color:#ffcc00;" >
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
                <div class="col-9 mt-3"> 
                   <p><b>Panel</b></p>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                    <p style="color: black; line-height:10px;">Billing Address:</p>
                    <p style="font-size:11px; font-weight:bold; line-height: 1px;">Manas Hotel 285-287, Jalan Tunku Abdul Rahman </p>
                    <p style="font-size:11px; font-weight:bold; line-height: 1px;">50100,Kuala Lumpur,Malaysia</p>
                    <p style="font-size:11px; font-weight:bold; line-height: 1px;">012-2351232</p>
                </div>
              </div>
            </div>
        </div>  
    </div>


    <div class="row">
        <div class="card border-radius-card shadow" style="width: 100%; height:100%;" >
            <div class="card-body" >
              <div class="row">
                <div class="col-8">
                 <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Today Sales</h4>
                </div>
                <div class="col-4 ">
                 <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
                 </div>
              </div>
             
              <div class="row">
                <div class="col-1 ml-4">
                 <img src="{{asset('/storage/dealer/icons/sales-icon.png')}}" style="height:50px; width:50px;" alt="sales-icon">
                </div>
                <div class="col-7 ml-4" style="line-height: 20px;">   
                 <p class="card-title" style="font-weight:bold; font-size:15pt;">RM {{number_format($todayOrders)}}</P>
                 <p>Daily Revenue: {{ date('d/m/yy') }}</p>
                </div>
              </div>       
            </div>
        </div>  
    </div>


    <div class="row">
        <div class="card border-radius-card shadow" style="width: 100%; height:100%;" >
            <div class="card-body" >
              <div class="row">
                <div class="col-8">
                 <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Sales Summary</h4>
                </div>
                <div class="col-4">
                 <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
                </div>
              </div>
             
              <div class="row">
                <div class="col-1 ml-4">
                 <img src="{{asset('/storage/dealer/icons/sales-icon.png')}}" style="height:50px; width:50px;" alt="sales-icon">
                </div>
                <div class="col-7 ml-4" style="line-height: 20px;">
                 <p class="card-title" style="font-weight:bold; font-size:15pt;">RM {{number_format($monthlyOrders)}}</P>
                 Month Revenue: {{ date('F Y') }}
                </div>
              </div> 
            </div>
        </div>  
    </div>



    <div class="row">
        <div class="card border-radius-card shadow" style="width:100%; height:100%;" >
          <div class="card-body" >
              <div class="row">
                <div class="col-6">
                 <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Products</h4>
                </div>
                <div class="col-6">
                 <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
                 </div>
              </div>
             
              <div class="row" style="border-bottom: 1px solid #ffcc00; ">
                <div class="col-6">
                    <p >Add Products</p>                     
                </div>
                <div class="offset-3 col-1">
                    <p>-</p>
                </div>
              </div> 
              <div class="row mt-3" style="border-bottom: 1px solid #ffcc00; ">
                <div class="col-6">
                    <p >Update Products</p>                     
                </div>
                <div class="offset-3 col-1">
                    <p>-</p>
                </div>
              </div> 
              <div class="row mt-3">
                <div class="col-6">
                    <p >Product Expired</p>                     
                </div>
                <div class="offset-3 col-1">
                    <p>-</p>
                </div>
              </div> 
            </div>
        </div>  
    </div>





    <div class="row ">
     <div class="card border-radius-card shadow" style="width: 100%; height:100%;" >
      <div class="card-body" >
              <div class="row">
                <div class="col-8">
                 <h4 class="card-title" style="font-weight:bold; font-size:15pt;">Value Tracking</h4>
                </div>
                <div class="col-4">
                 <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
                </div>
              </div>
             
              <div class="row mt-3">
                    <div class="col-6 mt-2">
                        Pending Delivery
                    </div>
                    <div class="offset-2 col-4 ">
                        <div class="card" style="width:80%; height:50%; border-radius:10px; background-color:#ffcc00;" >
                            <div class="card-body">
                                <p style="font-size: 10px;"><b>{{$totalDelivery}}</b></p>
                            </div>
                        </div>    
                    </div>       
              </div>
                
                  
              <div class="row mt-3">
                <div class="col-6 mt-2">
                    Set Delivery Date
                </div>
                <div class="offset-2 col-4 ">
                    <div class="card" style="width:80%; height:50%; border-radius:10px; background-color:#ffcc00;" >
                        <div class="card-body">
                            <p style="font-size: 10px;"><b>{{$totalPendingDelivery}}</b></p>
                        </div>
                    </div>    
                </div>       
          </div>

          <div class="row mt-3">
            <div class="col-6 mt-2">
                Pending Claim
            </div>
            <div class="offset-2 col-4 ">
                <div class="card" style="width:80%; height:50%; border-radius:10px; background-color:#ffcc00;" >
                    <div class="card-body">
                        <p style="font-size: 10px;"><b>{{$totalPendingClaim}}</b></p>
                    </div>
                </div>    
            </div>       
          </div>
      </div>
     </div>  
    </div>



    <div class="row">
        <div class="card border-radius-card shadow" style="width: 100%; height:100%;" >
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <h4 class="card-title" style="font-weight:bold; font-size:15pt;">KPIR</h4>
                </div>
                <div class="col-6 ">
                 <p class="card-title" style="float: right; color:#ffcc00;">Show more</p>
                </div>
              </div>
              <div class="row">
                <canvas id="bar-chart-horizontal-mobile"></canvas>
              </div> 
            </div>
        </div>
    </div>




    <div class="row mt-4 " >
        <div class="col-12">
         <p class="text-bold" style="font-size:15pt; border-bottom:1px solid black;">Announcement</p>
        </div>
    </div>
  
    <div class="row ">
     <div class="col-12">
          <p style="color:#d6d4d4;">4 minutes ago</p>
          <p class="text-bold" style="line-height: 1px; font-size:20px;">Message Title</p>
          <p style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
          <p style="border-bottom:1px solid black;"></p>
     </div>
    </div>
  
    <div class="row ">
     <div class="col-12">
          <p style="color:#d6d4d4;">1.00 PM</p>
          <p class="text-bold" style="line-height: 1px; font-size:20px;">Message Title</p>
          <p style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
          <p style="border-bottom:1px solid black;"></p>
     </div>
    </div>
  
    <div class="row ">
     <div class="col-12">
          <p style="color:#d6d4d4;">Yesterday 10.00 AM</p>
          <p class="text-bold" style="line-height: 1px; font-size:20px;">Message Title</p>
          <p style="font-size:15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
          <p style="border-bottom:1px solid black;"></p>
          <p  style="color:#ffcc00; text-align:center;">Show more</p>
     </div>
    </div>
   </div>


</div>





<style>

#rcorners {
  border-radius: 25%;
  background: #fbcc34;
  padding: 20px; 
  width: 0px;
  height: 0px;  
}



.border-radius-card{
          border-radius: 15px;
        
    }
        
.text-bold{
          font-weight: bold;
    }
        
 .sub-border-color{
          border: 2pt solid #fbcc34;
 }
        
 @media(max-width:767px) {
    .hidden-sm {
            display: none;
             }
          }
        
 @media(min-width:767px) {
     .hidden-md {
               display: none;
              }

    .card-size{
      width:70%;
      height:40%;
    }

    .text-size{
      font-size:20px;
    }
         }
        
        

@media (max-width: 1800px) and (min-width: 1200px){
      .font-size{
        font-size: 9pt;
      }

      .card-size{
      width:100%;
      height:35%;
    }
    .text-size{
      font-size:15px;
    }

     }

  
</style>





@endsection