<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    #Order Received.

    Thank you for your order.

    Order Number: {{$order->order_number}}

    **Items Ordered**

    @foreach ($order->items as $item)
    Name: {{$item->product->parentProduct->name}}
    Quantity:{{$item->quantity}}
    Price: RM {{ number_format(($item->subtotal_price / 100), 2) }}
    @endforeach


</body>

</html>