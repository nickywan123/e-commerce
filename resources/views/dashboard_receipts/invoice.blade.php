<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="card">
      <div class="card-header">
      Invoice:
      <strong>[Invoice Number]</strong> 
      <br> <br>
      <strong>[Date Placeholder]</strong> 
        <span class="float-right " style="font-size: 50px; color:grey;"> Bujishu</span>
      
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
      <th class="center">#</th>
      <th>Item</th>
      <th>Description</th>
      
      <th class="right">Unit Cost(RM)</th>
        <th class="center">Qty</th>
      <th class="right">Total(RM)</th>
      </tr>
      </thead>
      <tbody>
      <tr>
      <td class="center">1</td>
      <td class="left strong">Electrical wire</td>
      <td class="left">Longest wire ever</td>
      
      <td class="right">999,00</td>
        <td class="center">1</td>
      <td class="right">999,00</td>
      </tr>
      <tr>
      <td class="center">2</td>
      <td class="left">Interior design</td>
      <td class="left">Instalation and Customization (cost per hour)</td>
      
      <td class="right">150,00</td>
        <td class="center">20</td>
      <td class="right">3.000,00</td>
      </tr>
      <tr>
      <td class="center">3</td>
      <td class="left">Table</td>
      <td class="left">Round table</td>
      
      <td class="right">499,00</td>
        <td class="center">1</td>
      <td class="right">499,00</td>
      </tr>
      <tr>
      <td class="center">4</td>
      <td class="left">Playstation 5</td>
      <td class="left">Console </td>
      
      <td class="right">3.999,00</td>
        <td class="center">1</td>
      <td class="right">3.999,00</td>
      </tr>
      </tbody>
      </table>
      </div>
      <div class="row">
      <div class="col-lg-4 col-sm-5">
      
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
      <strong>Discount (20%)</strong>
      </td>
      <td class="right">1,699,40</td>
      </tr>
      <tr>
      <td class="left">
       <strong>VAT (10%)</strong>
      </td>
      <td class="right">679,76</td>
      </tr>
      <tr>
      <td class="left">
      <strong>Total</strong>
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
      </div>
      </div>
</body>
</html>