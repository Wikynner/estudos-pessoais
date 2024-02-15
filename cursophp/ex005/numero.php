<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Resultado Final</h1>
</head>
<body><?php
   // $n = 44;
    $ant = $n - 1;
    $ss = $n + 1;
    $n = $_GET["nome"] ?? "Numero nao especificado";
        echo "O numero escolhido foi $n ";
        echo "O numero antecessor é $ant ";
        echo "O antecessor é $ss ";    
    ?>
    <p><link rel="index.php" >Voltar a pagina anterior</p>
</body>
</html>