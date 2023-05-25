<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <h1>Ordine ricevuto, saremo da lei in un attimo!</h1>
    <ul @foreach ($orders as $order) @endforeach>
        <h2>Riepilogo ordine:</h2>
        <li>{{ $order->total_bill }}</li>
        <li>{{ $order->bill_no_shipping }}</li>
        <li>{{ $order->guest_name }}</li>
        <li>{{ $order->email }}</li>
        <li>{{ $order->address }}</li>
        <li>{{ $order->telephone }}</li>
    </ul>
</body>

</html>
