<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monthly Statement</title>
 {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  </head>
<body >
    <div class="container">
        <div >
      
      <div class="container">
        <span class="float-left " > <img src="{{ asset('images/Invoice-Logo.png') }}" style="width:50%;" alt="No Logo"></span>
      </div> <br>
         
      <div class="row">
          <div class="col-12" style="background-color:black; text-align:center;">
              <h3 style="color:white;">MONTHLY SALES STATEMENT</h3>
          </div>
      </div> <br>
      <div class="row">

 <div class="col-5">
    <table class="table  table-outer-border  font-style " style="font-weight:bold;" >
         
        <tbody class="font-style">
     
          <tr class="table-dotted-line" style="height: 160px;" > 
            <td>Name:</td>
                 
          </tr>
        
          <tr class="table-dotted-line"> 
            <td>Address:</td>
             
          </tr>
          <tr class="table-dotted-line"> 
            <td>Contact No:</td>
              
          </tr>
       
        </tbody>
         </table>
 </div>      
     <div class="col-4 offset-3">

        <table class="table  font-style table-outer-border table-bordered " >
          
         <tbody class="font-style">
      
           <tr > 
             <td>Date</td>
             <td>3/15/2020</td>      
           </tr>
           <tr> 
             <td>Business Month</td>
             <td>2020/03/15</td>      
           </tr>
           <tr> 
             <td>Dealer Code</td>
             <td>32362245</td>      
           </tr>
           <tr> 
             <td>Status</td>
             <td>Infinity Agent</td>      
           </tr>
         
         </tbody>
          </table>
    </div>    
      </div>
      <div class="row">
        <div class="col-12 table-outer-border " style="background-color:grey; text-align:center;">
            <h4 style="color:white;">MONTHLY SUMMARY</h4>
        </div>
    </div> <br>
      <div class="row">
<div class="col-12">
    <table class="table  table-outer-border ">
        <thead class="table-secondary table-outer-border">
        <tr >
        <th  >Category</th>
        <th></th>
        <th></th>
        
        <th></th>
        <th class="text-right" >Quantity</th>
        <th class="text-right" >Amount(RM)</th>
        </tr>
        </thead>
        <tbody>
          <tr style="height:500px;" >
            <td  class="center">Beds & Mattresses</td>
            <td class="left strong"></td>
            <td class="left"> </td>
            
            <td class="center"></td>
              <td class="text-right">2</td>
            <td class="text-right">2,353</td>
            
            </tr>
        </tbody>
        </table>
        </div>

</div>
   </div>

   <div class="row">
       <div class="col-12 offset-9" >
           Total Sales: <input type="text" value="3,342.00" readonly style="width:10%; ">
       </div>
   </div>
      

   <div class="row">
    <div class="col-12 table-outer-border " style="background-color:grey; text-align:center;">
        <h4 style="color:white;">SALES HISTORY</h4>
    </div>
</div> <br>
  <div class="row">
<div class="col-12">
    <table class="table table-outer-border ">
        <thead class="table-secondary table-outer-border ">
        <tr >
        <th class="center">Date</th>
        <th>Invoice No.</th>
        <th>Description</th>
        
        <th class="left">Unit Price (RM)</th>
          <th class="center">Quantity</th>
        <th class="right">Total Price</th>
        </tr>
        </thead>
        <tbody>
          <tr style="height:500px;" >
            <td  class="center">2/03/2020</td>
            <td class="left strong">E3W453</td>
            <td class="left"> Longest wire ever</td>
            
            <td class="center">233.00</td>
              <td class="left">1</td>
            <td class="right">233.00</td>
            
            </tr>
        </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-12 offset-9" >
        Total Sales: <input type="text" value="233.00" readonly style="width:10%; ">
    </div>
</div>
   
     
       

     

<div class="row">
<div class="offset-4 col-md-4 font-style">
  <h6 style="font-size:10px;" >This statement is computer generated,no signature is required.</h6>
</div>
</div>
<hr style="border:2px solid black">   
<div class="row">
  <div class="col-6 col-md-5 font-style" style="font-size:10px; margin-left: 20px;">
    <h6 style="font-size:15px;  font-weight: bold;"> DC Signature Livingstyle SDN BHD</h6>
    <p> Company No.202001002917(1359236-K)</p>
    
   
  </div>
  <div  style=" border-right: 2px solid black;  "></div>
  <div class="col-6 col-md-5 font-style" style="font-size:10px" >
    <p>1-26-05-Menara Bangkok Bank,Berjaya Central Park, No 105, Jalan Ampang,50450 Kuala Lumpur,Malaysia</p>
    <p style="word-spacing: 0px;"><i class="icon-phone"></i> 603-21818821&emsp;;<i class="icon-file-text"></i> bujishu@gmail.com &emsp;<i class="icon-link"></i> www.bujishu.com</p>
  </div>
</div>
     
</div> 
    

      
      </div>
     
      </div>
     
    </div>
        

     

     


</body>


<style>

.font-style{
  font-family: "Times New Roman", Times, serif;
}

.table-outer-border  {
    border-left:  #e3e3e3  solid;
    border-right: #e3e3e3  solid;
    border-top: #e3e3e3  solid ;
    border-bottom: #e3e3e3  solid;
   
}

.table-dotted-line{
   border-style: dotted;
}

</style>


</html>