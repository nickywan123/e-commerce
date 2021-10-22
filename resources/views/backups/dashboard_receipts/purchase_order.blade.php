<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Purchase Order</title>
 {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">  --}}
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  </head>
<body>
    <div class="container">
        <div class="">
      
      <div class="container">
        <span class="float-left " > <img src="{{ asset('images/Invoice-Logo.png') }}" style="width:50%;" alt="No Logo"></span>
      </div>
                                                                                                                                    
       
      
      
      <div class="card-body">
      <div class="row mb-4">

        
      <div class="col-6 col-md-3 col-sm-6 font-style" style="font-size:10px;">

        <table class="table  table-outer-border  font-style " style="font-weight:bold;" >
         
       <tbody class="font-style">
    
         <tr class="table-dotted-line" style="height: 160px;" > 
           <td>Purchase From:</td>
                
         </tr>
       
         <tr class="table-dotted-line"> 
           <td>Person In Charge:</td>
            
         </tr>
         <tr class="table-dotted-line"> 
           <td>Contact No:</td>
             
         </tr>
      
       </tbody>
        </table>
    
    </div>

    <div class="col-6 col-md-3 col-sm-6 font-style " style="font-size:10px;">

      <table class="table table-outer-border font-style " style="font-weight:bold;" >
    
     <tbody class="font-style  ">
  
       <tr class="table-dotted-line" style="height: 160px;  " > 
         <td >Deliver To:</td>
          
       </tr>
       <tr class="table-dotted-line"> 
         <td>Attention To: </td>
              
       </tr>
       <tr class="table-dotted-line"> 
         <td>Contact No:</td>
        
       </tr>
     
     </tbody>
      </table>
      
      </div>
      <div class="col-6 col-md-4 offset-md-2 font-style" style="font-size:11px; ">
    <table class="table  font-style table-outer-border table-bordered " >
      <thead>
        
          <th class="table-secondary" style="color:red; text-align:center; font-size:10px; " colspan="2"  >PURCHASE ORDER</th>
      </thead>
   <tbody class="font-style">

     <tr > 
       <td>Number</td>
       <td>BJSDSHDSO2132</td>      
     </tr>
     <tr> 
       <td>Date</td>
       <td>28/02/2020</td>      
     </tr>
     <tr> 
       <td>Delivery Date</td>
       <td>03/04/2020</td>      
     </tr>
     <tr> 
       <td>Agent Code</td>
       <td>XSDSDS</td>      
     </tr>
     <tr> 
       <td>Credit Terms</td>
       <td>Cash</td>      
     </tr>
   </tbody>
    </table>
  </div>
</div>
   </div>
      
      <div class="font-style"  style="font-size:10px; ">
      <table class="table table-bordered table-outer-border ">
      <thead class="table-secondary table-outer-border ">
      <tr >
      <th class="center">No</th>
      <th>Product ID</th>
      <th>Description</th>
      
      <th class="left">Quantity</th>
        <th class="center">Unit Price (RM)</th>
      <th class="right">Amount(RM)</th>
      </tr>
      </thead>
      <tbody>
        <tr style="height:500px;" >
          <td  class="center">1</td>
          <td class="left strong">E3W453</td>
          <td class="left"> Longest wire ever</td>
          
          <td class="center">1</td>
            <td class="left">999,00</td>
          <td class="right">999,00</td>
          
          </tr>
      </tbody>
      </table>
      </div>

      <div class="row">

      <div class="col-4  offset-1 col-md-6 col-sm-5 font-style" style="font-size:15px; font-weight:bold;" >
      Remarks: <br><textarea readonly style="width:100%; margin-top:30px; resize:none;" cols="100" rows="10" >

      </textarea>
    </div>
        <div class="col-4 offset-2 col-md-4 col-sm-5 ml-auto font-style"  style="font-size:10px; ">
          <table class="table table-outer-border">
          <tbody>
          <tr>
          <td class="left">
          <strong>Subtotal</strong>
          </td>
          <td class="right">8.497,00</td>
          </tr>
          <tr>
          <td class="left">
          <strong>Transportation(Klang Valley)</strong>
          </td>
          <td class="right">1,699,40</td>
          </tr>
          <tr>
          <td class="left">
           <strong>Transportation(Outstation)</strong>
          </td>
          <td class="right">679,76</td>
          </tr>
          <tr>
          <td class="left">
          <strong> Grand Total</strong>
          </td>
          <td class="right">
          <strong>7.477,36</strong>
          </td>
          </tr>
          <tr>
            <td class="left">
            <strong> Discount</strong>
            </td>
            <td class="right">
            20%
            </td>
            </tr>
            <tr>
              <td class="left">
              <strong> Amount Paid</strong>
              </td>
              <td class="right">
              7.477,36
              </td>
              </tr>
              <tr>
                <td class="left">
                <strong> Balance Due</strong>
                </td>
                <td class="right">
                <strong>7.477,36</strong>
                </td>
                </tr>
          </tbody>
          </table>
          
          </div>
     </div>
       

      <div class="row">    
      <div class="col-5 col-md-5 font-style" style="margin-left: 20px;">
  <h6 style="font-size:15px;  font-weight: bold;">Terms & Conditions</h6>
 <p style="font-size:10px"> Goods sold are neither returnable nor refundable</p>
</div>  
</div> 

<div class="row">
<div class="offset-4 col-md-4 font-style">
  <h6 style="font-size:10px;" >This invoice is computer generated,no signature is required.</h6>
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