<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora</title>
</head>
<body>
    <form method="POST" action="/calcular">
        @csrf
        <input name="num1" type="number" placeholder="Número 1">
        <input name="operador" type="text" placeholder="Operador">
        <input name="num2" type="number" placeholder="Número 2">
        <button type="submit">Calcular</button>
    </form>
</body>
</html>