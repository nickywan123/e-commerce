@component('mail::message')
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

@endcomponent