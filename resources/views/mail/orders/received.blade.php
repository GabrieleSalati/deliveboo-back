<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
    <h1>Ordine ricevuto, saremo da lei in un attimo!</h1>

    <h2>Riepilogo ordine:</h2>
    <p>Totale: {{ $total_bill }}</p>
    <p>Sconto consegna: {{ $bill_no_shipping }}</p>
    <p>Nome: {{ $guest_name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Indirizzo: {{ $address }}</p>
    <p>Telefono: {{ $telephone }}</p>

</body>

</html>
