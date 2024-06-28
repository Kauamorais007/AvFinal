<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Produto</title>
</head>
<body>
<section id="hero">
    <div class="hero-cadastro">
    <form action="{{route ('produto_store')}}" method=post>
        @csrf 
         <h1>Mostrar Produtos</h1>
    <p><input type="text" name="produto" id="produto" value="{{$produto->nome}}"></p>
    <p><input type="text" name="produto" id="produto" value="{{$produto->categoria}}"></p>
    <p><input type="text" name="produto" id="produto" value="{{$produto->valor}}"></p>

    </div>
</form>

</body>
</html>	




