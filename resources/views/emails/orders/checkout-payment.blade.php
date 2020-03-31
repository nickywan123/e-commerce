

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    
    <h1>THANK YOU FOR YOUR ORDER</h1>
</body>
</html>



{{-- @component('mail::message')
# Order Received

Thank you for your order.

Order ID:{{$order->order_number}} <br>


**Items Ordered **

@foreach ($order->items as $item)

Product: {{$item->product_id}} 
Product Information: {{$item->product_information}}
Quantity: {{$item->quantity}}
@endforeach




@component('mail::button', ['url' => $url,'color'=>'green'])
Visit Website
@endcomponent



Regards,<br>
{{ config('app.name') }}

@endcomponent --}}