<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Purchase Order</title>
</head>
<body>
  <div class="clearfix" style="height:100px;">
    <div style="width:15%; display:inline-block;" >
      <img style="width:100px; margin-top:10px;" src="{{ asset('images/Invoice-Logo.png') }}" alt="No Logo">
    </div>
    <div style="float:right; display:inline-block;"> 
      <img  src="data:images/png;base64, {{ base64_encode(QrCode::format('png')->size(70)->margin(0)->generate('www.demo3.bujishu.com/QR-Completed')) }} ">
    </div>       
  </div>


  <div>
    <div style="font-size:10px;">
      <table style="border:1px solid black; ">
        <tr>
          <td>Purchase From:</td>
          <td>Bane</td>
        </tr> 
        <tr >
          <td>Person In Charge:</td>
          <td>Nick</td>
        </tr>
        <tr>
          <td>Contact No:</td>
          <td>0172190042</td>
        </tr>
      </table>
    </div>
   
    <div style="font-size:10px; position:relative; left:150px; top:-50px; ">
      <table style="border: 1px solid black;  ">
        <tr >
         <td>Deliver To:</td>
         <td>Jalan Bani Sasoi,Taman Megah</td>
        </tr>      
        <tr >
         <td>Attention To:</td>
         <td>James</td>
        </tr>
        <tr>
         <td>Contact No:</td>
         <td>0172155442</td>
        </tr>
      </table>
    </div>

    <div style="font-size:10px; float:right; position:relative; top:-100px;">
      <table border="1">
       <tr>
        <th style="color:red" colspan="2"> PURCHASE ORDER</th>
       </tr>
       <tr>
        <td>Number</td>
        <td>BJ203292434343</td>
       </tr>   
       <tr>
        <td>Date</td>
        <td>2/28/2020</td>
       </tr>
       <tr>
        <td>Delivered Date</td>
        <td>??????</td>
       </tr>
       <tr>
        <td>Agent Code</td>
        <td>??????</td>
       </tr>
       <tr>
        <td>Credit Terms:</td>
        <td>??????</td>
       </tr>
      </table>    
    </div>
 
  </div>
  
        
<div style="font-size:10px; ">
  <table id="main-table"  >
      <tr >
        <th class="main-table-head"> No</th>
        <th class="main-table-head"> Product ID</th>
        <th class="main-table-head"> Description</th>
        <th class="main-table-head" > Quantity</th>
        <th class="main-table-head" > Unit Price (RM)</th>
        <th class="main-table-head" > Amount (RM)</th>
      </tr>
      <tr>
        <td class="main-table-border-right" style="border-right: 1px solid black; " align="center">1</td>
        <td class="main-table-border-right" style="border-right: 1px solid black;" >BU0320 0100 0001</td>
        <td class="main-table-border-right" style="border-right: 1px solid black;"  align="center" >  BED SET GREY</td>
        <td class="main-table-border-right" style="border-right: 1px solid black;"  align="center" >1</td>
        <td class="main-table-border-right" style="border-right: 1px solid black;"  align="center" >3,000.00</td>
        <td class="main-table-border-right" style="border-right: 1px solid black;"  align="center" >3,000.00</td>
    </tr>
    <tr >
        <td  class="main-table-border-right" style="border-right: 1px solid black;" align="center">2</td>
        <td  class="main-table-border-right" style="border-right: 1px solid black;" >BU0320 0100 0001</td>
        <td  class="main-table-border-right" style="border-right: 1px solid black;"  align="center" >  BED SET RED</td>
        <td  class="main-table-border-right" style="border-right: 1px solid black;" align="center" >1</td>
        <td  class="main-table-border-right" style="border-right: 1px solid black;" align="center" >3,000.00</td>
        <td  class="main-table-border-right"style="border-right: 1px solid black;" align="center" >3,000.00</td>    
    </tr>
  </table> 

  
   
    
    
 <table style="position:relative; left:475px; bottom:250px;" border="0">
  <tr>
 <td style="border:none;">SubTotal</td>
<td width="70" style="border: 1px solid #ccc; " >3,000.00</td>  
</tr>
<tr>
  <td style="border:none;">Transportation(Klang Valley)</td>
 <td style="border: 1px solid #ccc;" >-</td>  
 </tr>
 <tr>
  <td style="border:none;">Transportation (Outstation)</td>
 <td style="border: 1px solid #ccc;" >-</td>  
 </tr>
 <tr>
  <td style="border:none;">Grand Total</td>
 <td style="border: 1px solid #ccc;" >3,000.00</td>  
 </tr>
 <tr>
  <td style="border:none;">Discount</td>
 <td style="border: 1px solid #ccc;" >20%</td>  
 </tr>
 <tr>
  <td style="border:none;">Amount Paid</td>
 <td style="border: 1px solid #ccc;" >3,000.00</td>  
 </tr>
 <tr>
  <td style="border:none;">Balance Due</td>
 <td style="border: 1px solid #ccc;" >3,000.00</td>  
 </tr>
 
</table>


</div>

{{-- <div style="position:absolute; top:690px;" >
  <h3 style="font-size:10px;">Remarks:</h3>
  <textarea class="textarea" name="remarks" id="remarks" cols="5" rows="10"></textarea>
  </div>

</div>  --}}

  


  {{-- <div style="font-size:10px;">
    <h4>Terms & Condition</h4>
    <p>Goods sold are neither returnable nor refundable</p>

  </div> --}}

  {{-- <hr style="border-bottom:1px solid black;">

  <div style="font-size:10px; position:absolute;">
    <h3 style="font-weight:bold;">DC SIGNATURE LIVINGSTYLE SDN BHD </h3>
    <p> Company No.202001002917(1359236-K)</p>
  
  </div> --}}

  {{-- <div style="font-size:10px; position:absolute; right:100px; float:right;">
    <p >1-26-05-Menara Bangkok Bank,Berjaya Central Park, No 105, Jalan Ampang,50450 Kuala Lumpur,Malaysia</p>
    <p > 603-21818821&emsp;; bujishu@gmail.com &emsp; www.bujishu.com</p>
  </div> --}}

  

  </body>
</html>

<style>



  textarea{
    width: auto; 
    max-width: 400px;
  }

  #main-table{
   border: 1px solid black;
   border-collapse: collapse;
   
  }

  .clearfix {
    overflow: auto;
   }

   .main-table-head{
    border: 1px solid black;
    border-collapse: collapse;
   }
   
  
   /* .main-table-head-border-right{
    border-right: 1px solid black;
   
   } */

</style>