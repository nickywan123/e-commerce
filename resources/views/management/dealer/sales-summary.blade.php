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
            labels: ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"],
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
             data: [50, 120, 150, 170, 180, 130, 100]
        }]
    },
    options: {
        legend: {
            position: "bottom",
            display: false
        },
        scales: {
            yAxes: [{
                ticks: {
                    fontColor: "rgba(0,0,0,0.5)",
                    fontStyle: "bold",
                    beginAtZero: true,
                    maxTicksLimit: 5,
                    padding: 20
                },
                gridLines: {
                    drawTicks: false,
                    display: false
                }
}],
            xAxes: [{
                gridLines: {
                    zeroLineColor: "transparent"
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


// Donut chart

new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Bedsheet", "Curtain", "Lightings","Paint"],
      datasets: [
        {
          label: "Today Top Sales",
          backgroundColor: ["#3e95cd", "#dc3545","#3cba9f","#f3ff19"],
          data: [24,10,33,23]
        }
      ]
    },
    options: {
      legend: {
        position: 'right' 
            },
      title: {
        display: true,
        text: 'Today Top Sales',
      
      }
    }
});

}
 
</script>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<br>


<div class="row ">
    <div class="col-12">
        <h2>SALES SUMMARY</h2>
    </div>
</div>
<br>


<div class="row ">   
     <div class="col-6">         
        <div class="card">      
          <div class="card-body"  style="height:600px;">
                    <div class="d-flex justify-content-between">
                     <div>
                      <h4 class="card-title mb-0">Overview</h4>              
                     </div>
                     <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                      <div class="btn-group btn-group-toggle mx-3" data-toggle="buttons">
                       <label class="btn btn-outline-secondary active">
                        <input id="option1" type="radio" name="options" autocomplete="off"> Today
                       </label>
                       <label class="btn btn-outline-secondary">
                        <input id="option2" type="radio" name="options" autocomplete="off" checked=""> 7 days
                       </label>
                       <label class="btn btn-outline-secondary">
                        <input id="option3" type="radio" name="options" autocomplete="off"> 14 days
                       </label>
                       <label class="btn btn-outline-secondary">
                        <input id="option4" type="radio" name="options" autocomplete="off"> Last Month
                       </label>
                      </div>
                     </div> 
                   </div>


                    <div class="c-chart-wrapper" style="height:350px;margin-top:40px;">
                        <canvas id="myChart"></canvas>
                    </div>
                   
                    
            
                    <div class="card-body mt-3">
                     <div class="row text-center ">
                      <div class="col-12 col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-text">24</h5>
                              <p class="card-text" style="font-size: 10px;">Personal Sales</p>        
                            </div>
                        </div>
                      </div>

                      <div class="col-12 col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="card">
                         <div class="card-body">
                            <h5 class="card-text">51</h5>
                            <p class="card-text"  style="font-size: 10px;">Group Sales</p>            
                         </div>
                        </div>
                 
                      </div>

                      <div class="col-12 col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="card">
                         <div class="card-body">
                          <h5 class="card-text">12</h5>
                          <p class="card-text"  style="font-size: 10px;">Personal Income</p>              
                         </div>
                        </div>
                      </div>

                      <div class="col-12 col-sm-12 col-md mb-sm-2 mb-0">
                        <div class="card">
                           <div class="card-body">
                            <h5 class="card-text">33</h5>
                            <p class="card-text"  style="font-size: 10px;">Group Income</p> 
                           </div>
                        </div> 
                      </div>                
                    </div>
          </div>
        </div>    
      </div>
     </div>

     <div class="col-6">

        <div class="row">

            <table class="table table-responsive-sm table-hover table-outline mb-0">

                <thead class="">
                    <tr>
                    <th colspan="5" >
                        <strong style="font-size: 20px;"> Dealer Performance</strong>
                    </th>
           
                         
                    </tr>
                    </thead>
            

                <thead class="thead-light">
                <tr>
                <th class="text-center">
                ID
                </th>
                <th>Avatar</th>
                <th class="text-center">Name</th>
             
                <th class="text-center">Target Achievement</th>         
                </tr>
                </thead>


                <tbody>
                <tr>
                <td class="text-center">
                19110000004
                </td>
                <td>
                    <img class="img-avatar" src="{{asset('storage/avatar/default-avatar.jpg')}}" alt="{{ Auth::user()->userInfo->full_name }}" style="width:80px; height:50px;">
                </td>
                <td class="text-center">
                    Alex 
                </td>
               
                <td class="text-center">
                 
                    71% 
                  <div class="progress progress-xs mt-2">
                    
                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 80%; background-color:#a02362;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                    </div>
                  </div>
                </td>
               
                </tr>


                <tr>
                <td class="text-center">
                    19110000007
                </td>
                <td>
                    <img class="img-avatar" src="{{asset('storage/avatar/default-avatar.jpg')}}" alt="{{ Auth::user()->userInfo->full_name }}" style="width:80px; height:50px;">
                </td>
                <td class="text-center">
                Jason
                
                </td>
             
                <td class="text-center">
                    31% 
                    <div class="progress progress-xs mt-2">
                      
                      <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 30%; background-color:#f3ff19;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                </td>
                
                </tr>

                <tr>
                <td class="text-center">
               19110000008
                </td>
                <td>
                    <img class="img-avatar" src="{{asset('storage/avatar/default-avatar.jpg')}}" alt="{{ Auth::user()->userInfo->full_name }}" style="width:80px; height:50px;">
                </td>
                <td class="text-center">
                Alfred
                </td>
              
                <td class="text-center">
                    50% 
                    <div class="progress progress-xs mt-2">
                      
                      <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 50%; background-color:#0cea42;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                </td>
              
                </tr>
           
                </tr>
                </tbody>
                </table>
        
        

        </div>

<br>

        <div class="row">
          
            <canvas id="doughnut-chart" width="800" height="300"></canvas>

        </div>
   
       
    

   </div>



</div>


@endsection