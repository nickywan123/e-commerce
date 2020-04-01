<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Invoice</title>
</head>
<body>
  <div class="container">
    <span class="float-left" > <img src="{{ asset('images/Invoice-Logo.png') }}" style="width:15%;" alt="No Logo"></span>
    <img style="float:right; margin-bottom:10px;" src="data:images/png;base64, {{ base64_encode(QrCode::format('png')->size(100)->generate('www.demo3.bujishu.com/QR-Completed')) }} ">
  </div> <br> <br>

  <div >

  <div style="font-size:10px;float:left; width:50%;">
  <table style="border: 1px solid black; "  >
         <tr>
            <td>Receiver:</td>
            <td>{{$purchase->user->userInfo->full_name}}</td>
         </tr>
         
         <tr >
            <td>Attention To:</td>
            <td>-</td>
         </tr>

         <tr>
          <td>Contact No:</td>
         
          <td>{{$purchase->user->userInfo->contacts->where('is_mobile', 1)->first()}}</td>     
               
       </tr>
      </table>
  
    </div>


    <div style="font-size:10px;float:right; margin-right:100px; width:50%;">


  <table style="border: 1px solid black;  ">
         <tr>
            <td>Deliver To:</td>
            <td>{{$purchase->user->userInfo->addresses->where('is_shipping_address',1)->first()->address_1}}
              {{$purchase->user->userInfo->addresses->where('is_shipping_address',1)->first()->address_2}}
              {{$purchase->user->userInfo->addresses->where('is_shipping_address',1)->first()->address_3}}
              {{$purchase->user->userInfo->addresses->where('is_shipping_address',1)->first()->postcode}}
              {{$purchase->user->userInfo->addresses->where('is_shipping_address',1)->first()->city}}

            </td>
         </tr>
         
         <tr >
            <td>Attention To:</td>
            <td>empty</td>
         </tr>

         <tr>
          <td>Contact No:</td>
          <td></td>
       </tr>
      </table>
  
    </div>

    <div style="font-size:10px;float:right; margin-left:93%;  width:50%;">

      <table  border="1">
      <tr>
        <th colspan="2"> INVOICE/RECEIPT</th>
      </tr>
             <tr >
                <td>Number</td>
                <td>{{$purchase->purchase_number}}</td>
             </tr>
             
             <tr >
                <td>Date</td>
                <td>{{$purchase->purchase_date}}</td>
             </tr>
    
             <tr>
              <td>Delivered Date</td>
              <td>Empty</td>
           </tr>
           <tr>
            <td>Agent Code</td>
            <td>{{$purchase->user->userInfo->account_id}}</td>
         </tr>
         <tr>
          <td>Credit Terms:</td>
          <td>Empty</td>
       </tr>
          </table>
      
        </div>

        
<div style="font-size:10px; margin-top:15%;   width:100%;">
  <table style=" width: 100%;" border="1">
    <tr>
      <th style="width:20%;" > No</th>
      <th style="width:30%;" > Product ID</th>
      <th style="width:170%;" > Description</th>
      <th style="width:20%;"  > Quantity</th>
      <th style="width:50%;" > Unit Price (RM)</th>
      <th style="width:50%;"  > Amount (RM)</th>
    </tr>
    <tr>
      <?php $i = 0 ?>
      @foreach ($purchase as $item)
      <?php $i++ ?>
       
      <td style="height:500px;"  align="center">{{$i}}</td>
      <td ></td>
      <td  align="center" >  BED SET GREY</td>
      <td  align="center" >1</td>
      <td  align="center" >3,000.00</td>
      <td  align="center" >3,000.00</td>           
      @endforeach
   
  </tr>

  </table>
    
  <table style="position:relative; left:475px; bottom:250px;" border="0">
    <tr>
   <td style="border:none;">SubTotal</td>
  <td width="70" style="border: 1px solid #ccc; " >3,000.00</td>  
  </tr>
<tr>
  <td>Transportation(Klang Valley)</td>
 <td style="border: 1px solid #ccc;" >-</td>  
 </tr>
 <tr>
  <td>Transportation (Outstation)</td>
 <td style="border: 1px solid #ccc;" >-</td>  
 </tr>
 <tr>
  <td>Grand Total</td>
 <td style="border: 1px solid #ccc;" >3,000.00</td>  
 </tr>
 <tr>
  <td>Discount</td>
 <td style="border: 1px solid #ccc;" >20%</td>  
 </tr>
 <tr>
  <td>Amount Paid</td>
 <td style="border: 1px solid #ccc;" >3,000.00</td>  
 </tr>
 <tr>
  <td>Balance Due</td>
 <td style="border: 1px solid #ccc;" >3,000.00</td>  
 </tr>
 
</table>


</div>

<div style="position:absolute; top:710px;   font-size:10px;" >
  <table width="300" border="1">
    <tr >
      <th  colspan="2"> Payment Received</th>
    </tr>
           <tr >
              <td>Payment Method</td>
              <td>Online/Credit Card/FPX</td>
           </tr>
           
           <tr >
              <td>Reference No</td>
              <td>320343243</td>
           </tr>
  
           <tr>
            <td>Amount Paid:</td>
            <td>RM2,0000</td>
         </tr>
        
        </table>
</div>




  </div>

  <div style="font-size:10px;">
    <h4>Terms & Condition</h4>
    <p>Goods sold are neither returnable nor refundable</p>

  </div>
  <hr style="border-bottom:1px solid black;">
  <div style="font-size:10px; position:absolute;">
    <h3 style="font-weight:bold;">DC SIGNATURE LIVINGSTYLE SDN BHD </h3>
    <p> Company No.202001002917(1359236-K)</p>
  
  </div>

  <div style="font-size:10px; position:absolute; right:100px; float:right;">
    <p >1-26-05-Menara Bangkok Bank,Berjaya Central Park, No 105, Jalan Ampang,50450 Kuala Lumpur,Malaysia</p>
    <p > 603-21818821&emsp;; bujishu@gmail.com &emsp; www.bujishu.com</p>
  </div>

  

</body>
</html>

<style>
  .vl {
    border-right: 1px solid black;
    height: 50px;
  }
  </style>