<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Idade</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
<main>
<?php $atual = date("Y");
    $nasc =$_REQUEST['nasc'] ?? '2000';
    $ano = $_GET['ano'] ?? $atual;
    $idade = $ano - $nasc;
    ?>
    <h2>Calculando Idade</h2>
       <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nasc">Em que ano Você nasceu ?</label>
        <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual?>">
        <label for="ano">Quer saber sua idade em que ano ?(atuamente estamos em<?=$atual?>)</label>
        <input type="number" name="ano" id="ano" min="1900" >
        <input type="submit" value="Qual será minha idade ?" >
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <?=$idade?> em <?=$ano?></p>
    </section>
    
</body>
</html>