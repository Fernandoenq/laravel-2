<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado</title>
</head>
<body>
    <h2>O resultado é: {{ $result }}</h2>
    <h2>O resultado é: {{!! $result !!}}</h2>
    <!-- o !! nao identifica se tem tags html, ele literalmente mostra tudo -->
</body>
</html>