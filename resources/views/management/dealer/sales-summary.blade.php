@extends('layouts.management.main-dealer')



@section('content')


<script type="text/javascript">

window.onload = function () {

var chart = new CanvasJS.Chart("chartgraphContainer", {
	animationEnabled: true,  
	title:{
		text: "Total Personal Sales"
	},
	axisY: {
		title: "Units Sold",
		valueFormatString: "#0,,.",
		
		stripLines: [{
			value: 3366500,
			label: "Average"
		}]
	},
	data: [{
		yValueFormatString: "#,### Units",
		xValueFormatString: "YYYY",
		type: "spline",
		dataPoints: [
			{x: new Date(2002, 0), y: 2506000},
			{x: new Date(2003, 0), y: 2798000},
			{x: new Date(2004, 0), y: 3386000},
			{x: new Date(2005, 0), y: 6944000},
			{x: new Date(2006, 0), y: 6026000},
			{x: new Date(2007, 0), y: 2394000},
			{x: new Date(2008, 0), y: 1872000},
			{x: new Date(2009, 0), y: 2140000},
			{x: new Date(2010, 0), y: 7289000},
			{x: new Date(2011, 0), y: 4830000},
			{x: new Date(2012, 0), y: 2009000},
			{x: new Date(2013, 0), y: 2840000},
			{x: new Date(2014, 0), y: 2396000},
			{x: new Date(2015, 0), y: 1613000},
			{x: new Date(2016, 0), y: 2821000},
			
		]
	}]
});
chart.render();



var chart = new CanvasJS.Chart("chartdonutContainer",
      {
        title:{
          text: "Top Category Sales of the Month"
        },
        data: [
        {
         type: "doughnut",
         dataPoints: [
         {  y: 53.37, indexLabel: "Bedsheet" },
         {  y: 35.0, indexLabel: "Lightings" },
         {  y: 7, indexLabel: "Curtain" },
         {  y: 2, indexLabel: "Renovation" },
       
         ]
       }
       ]
     });
  
      chart.render();


}



    // window.onload = function () {
    //   var chart = new CanvasJS.Chart("chartdonutContainer",
    //   {
    //     title:{
    //       text: "Top Category Sales of the Month"
    //     },
    //     data: [
    //     {
    //      type: "doughnut",
    //      dataPoints: [
    //      {  y: 53.37, indexLabel: "Bedsheet" },
    //      {  y: 35.0, indexLabel: "Lightings" },
    //      {  y: 7, indexLabel: "Curtain" },
    //      {  y: 2, indexLabel: "Renovation" },
       
    //      ]
    //    }
    //    ]
    //  });
  
    //   chart.render();
    // }
    </script>

    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<br>


<div class="row ">
    <div class="col-12">
        <h2>SALES SUMMARY</h2>
    </div>
</div>
<br>


<div class="row">
    {{--GRAPH MODAL--}}
  
    <div class="col-6">
        
                {{--GRAPH--}}
            
                <div class="card">
                    <div class="card-body"  style="height:600px;">
                    <div class="d-flex justify-content-between">
                    <div>
                    <h4 class="card-title mb-0">Traffic</h4>
                    <div class="small text-muted">Overview</div>
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


                    <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                     <div class="chartjs-size-monitor">
                      <div class="chartjs-size-monitor-expand">
                        <div class="">
                        </div>
                      </div>
                       
                      <div class="chartjs-size-monitor-shrink">
                       <div class="">
                        <div id="chartgraphContainer" style="height: 450px; width: 100%;">
                        </div>
                        
                    
                      </div>
                     </div>
                    </div>
                   
                    
                    <div id="main-chart-tooltip" class="c-chartjs-tooltip center" style="opacity: 0; left: 313.031px; top: 190.144px;"><div class="c-tooltip-header"><div class="c-tooltip-header-item">T</div></div><div class="c-tooltip-body"><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: rgba(71, 153, 235, 0.1);"></span><span class="c-tooltip-body-item-label">My First dataset</span><span class="c-tooltip-body-item-value">172</span></div><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: transparent;"></span><span class="c-tooltip-body-item-label">My Second dataset</span><span class="c-tooltip-body-item-value">87</span></div><div class="c-tooltip-body-item"><span class="c-tooltip-body-item-color" style="background-color: transparent;"></span><span class="c-tooltip-body-item-label">My Third dataset</span><span class="c-tooltip-body-item-value">65</span></div></div></div></div>
                    </div>
                    <div class="card-footer">
                    <div class="row text-center">
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <strong>65</strong>
                        <div class="text-muted">Personal Sales</div>
                    <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <strong>24</strong>
                        <div class="text-muted">Group Sale</div>
                    <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <strong>79</strong>
                    <div class="text-muted">Personal Income</div>
                    <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    <div class="col-sm-12 col-md mb-sm-2 mb-0">
                        <strong>22</strong>
                    <div class="text-muted">Group Income</div>
                    <div class="progress progress-xs mt-2">
                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    </div>
                    
                    </div>
                    </div>
                    </div>
                    

           
       
      
    </div>



   <div class="col-6">

        <div class="row">

            <table class="table table-responsive-sm table-hover table-outline mb-0" >

                <thead class="">
                    <tr>
                    <th colspan="5" >
                        <strong style="font-size: 20px;"> Dealer Performance</strong>
                    </th>
           
                         
                    </tr>
                    </thead>
                {{-- <tr>
                   <strong style="font-size: 25px;"> Dealer Performance</strong>
                </tr> --}}

                <thead class="thead-light">
                <tr>
                <th class="text-center">
                ID
                </th>
                <th>Avatar</th>
                <th class="text-center">Name</th>
                <th>Contact</th>
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
                <td>
               0172103940
              
                </td>
                <td class="text-center">
                 
                    71% 
                  <div class="progress progress-xs mt-2">
                    
                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
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
                <td>
                    0132751240
                </td>
                <td class="text-center">
                    31% 
                    <div class="progress progress-xs mt-2">
                      
                      <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 30%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
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
                <td>
                    0192108340
                </td>
                <td class="text-center">
                    50% 
                    <div class="progress progress-xs mt-2">
                      
                      <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 50%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
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

            <div id="chartdonutContainer" style="height: 300px; width: 100%;">

        </div>
   
       
    

   </div>



</div>


@endsection