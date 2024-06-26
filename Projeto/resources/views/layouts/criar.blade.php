<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/style.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
<section id="hero">
    <div class="hero-cadastro">
    <form action="{{route ('produto_store')}}" method=post>
        @csrf 
        <h1>Cadastro de Produtos</h1>
	<p>	Nome:<input type="text" name="nome"
		pattern="[A-Za-z\sãÃéÉçÇ]{2,50}" size="30"
		maxlength="50" required></p>
	<p>Categoria:<input type="text" name="categoria"
		size="20" maxlength="20" required></p>
	<p>Valor:<input type="number" name="valor"></p>
	<p><input class="btn-get-started scrollto" type="submit" name="botao" value="Cadastrar"></p>
    </div>
</form>

</body>
</html>	



