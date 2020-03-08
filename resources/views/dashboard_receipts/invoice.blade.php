<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
 <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  
</head>
<body>
    <div class="container">
        <div class="card">
      <div class="card-header">
     
        <span class="float-left " > <img src="{{ asset('images/Logo.png') }}" style="width:60%;" alt="No Logo"></span>
       
       <div class="float-center">

        <h4>DC Signature Livingstyle SDN BHD</h4>
        <small> 1-21-01,Menara Bangkok Bank,Berjaya Central Park,No 105,Jalan Ampang,50450 Kuala Lumpur,Malaysia </small><br>
        <small>603-02818821 &emsp;  bujishu@gmail.com &emsp;   www.bujishu.com </small>

       </div>
       
        <div class="float-right">
        <strong>Invoice:[Invoice Number]</strong> 
        <br> 
        <strong>[Date Placeholder]</strong> <br>
        <strong>Credit Term:[Cash]</strong> 
        </div>
      </div>
      <div class="card-body">
      <div class="row mb-4">
      <div class="col-sm-6">
      <h6 class="mb-3">From:</h6>
      <div>
      <strong>[Panel Name]</strong>
      </div>
      <div>[Address 1]</div>
      <div>[Address 2]</div>
      <div>Email:[panel_email]</div>
      <div>Phone: [panel_number]</div>
      </div>
      
      <div class="col-sm-6">
      <h6 class="mb-3">To:</h6>
      <div>
      <strong>[Customer Name]</strong>
      </div>
      <div> [Shipping address 1] </div>
      <div>[shipping address 2]</div>
      <div>Email:[customer_email]</div>
      <div>Phone: [customer_number]</div>
      </div>
      
      
      
      </div>
      
      <div class="table-responsive-sm">
      <table class="table table-striped">
      <thead>
      <tr>
      <th class="center">No</th>
      <th>Item</th>
      <th>Description</th>
      
      <th class="left">Quantity</th>
        <th class="center">Unit Price (RM)</th>
      <th class="right">Amount(RM)</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td class="center">1</td>
      <td class="left strong">Electrical wire</td>
      <td class="left">Longest wire ever</td>
      
      <td class="center">1</td>
        <td class="left">999,00</td>
      <td class="right">999,00</td>
      </tr>
      <tr>
      <td class="center">2</td>
      <td class="left">Interior design</td>
      <td class="left">Instalation and Customization (cost per hour)</td>
      
      <td class="left">20</td>
        <td class="center">150</td>
      <td class="right">3.000,00</td>
      </tr>
      <tr>
      <td class="center">3</td>
      <td class="left">Table</td>
      <td class="left">Round table</td>
      
      <td class="left">1</td>
        <td class="center">499,00</td>
      <td class="right">499,00</td>
      </tr>
   
      </tbody>
      </table>
      </div>
      <div class="row">
      
      
      <div class="col-lg-4 col-sm-5 ml-auto " >
        <table class="table table-clear ">
        <th><strong> Payment Received </strong></th>
        <tbody>
          <tr>
            <td class="left">
              Payment Method: xxxxxx
            </td>       
          </tr>
          <tr>
            <td class="left">
              Reference No: 2192012
            </td>       
          </tr>
          <tr>
            <td class="left">
              Amount Paid: RM10,000.00 
            </td>       
          </tr>

          
          
          <tbody>
        </table>
      </div>
      
      <div class="col-lg-4 col-sm-5 ml-auto">
      <table class="table table-clear">
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
        <td class="right">xxxxx</td>
        </tr>
        <tr>
          <td class="left">
          <strong>Grand Total</strong>
          </td>
          <td class="right">8.497,00</td>
          </tr>
      <tr>
        
      <td class="left">
      <strong>Discount (20%)</strong>
      </td>
      <td class="right">1,699,40</td>
      </tr>
      <tr>
      <td class="left">
       <strong>Amount Paid</strong>
      </td>
      <td class="right">679,76</td>
      </tr>
      <tr>
      <td class="left">
      <strong>Balance Due</strong>
      </td>
      <td class="right">
      <strong>7.477,36</strong>
      </td>
      </tr>
      </tbody>
      </table>
      
      </div>
      
      </div>
      
      </div>

      <h6 style="margin-left:30%;">This invoice is computer generated,no signature is required.</h6>
      </div>
     
    </div>

     

     


</body>
</html>