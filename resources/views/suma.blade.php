<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de 2 numeros</title>
</head>
<body>
    <h1>SUMA DE 2 NUMEROS</h1>
    <form action="/suma" method="POST">
        @csrf
        <input type="number" name="num1" placeholder="Numero 1">                    
        <input type="number" name="num2" placeholder="Numero 2">
        <button type="submit">SUMAR</button>
    </form>
</body>
</html>