<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <head>
        <h1>Resultado do processamento</h1>
    </head>    
    <main>
        <?php 
       $n = $_GET["nome"] ?? "Numero nao especificaddo";
        ?>
        <p></p><a href="Javascript:history.go(-1)">Voltar a pagina anterior</a></p>
    </main>
</body>
</html>