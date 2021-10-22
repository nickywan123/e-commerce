<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
</head>

<body>


    @php
    // $url = URL::signedRoute
    // ('confirm-order', [
    // 'purchase_num' => $purchase->purchase_number,

    // ]);
    @endphp
    <div class="container">
        <span class="float-left"> <img src="{{ asset('images/Invoice-Logo.png') }}" style="width:15%;" alt="No Logo"></span>
        <img style="float:right; margin-bottom:10px;" src="data:images/png;base64, {{ base64_encode(QrCode::format('png')->size(100)->generate(111)) }} ">
    </div> <br> <br>
 TESTING INVOICE

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
        <p>1-26-05-Menara Bangkok Bank,Berjaya Central Park, No 105, Jalan Ampang,50450 Kuala Lumpur,Malaysia</p>
        <p> 603-21818821&emsp;; bujishu@gmail.com &emsp; www.bujishu.com</p>
    </div>



</body>

</html>

<style>
    .vl {
        border-right: 1px solid black;
        height: 50px;
    }
</style>