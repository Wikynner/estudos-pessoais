<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    //$temp = $_REQUEST['temp'] ?? '2_000_000';
    $total = 2_000_000;
    $temp = $total;
    $sem = (int)($total / 604_800);
    $temp = $temp % 604_800;
    $dia = (int)($temp / 86_400);
    $temp = $temp % 86_400;
    $h = (int)($temp / 3_600);
    $temp = $temp % 3_600;
    $m = (int)($temp / 60);
     $temp = $temp %  60;
     $s = $temp;
     ?>
    <main>
     <h2>Calculandora de tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="tmp">Qual é o total de segundos ?</label>
        <input type="number" name="tmp" id="tmp" min="0" step="1" value="<?=$temp?>">
        <input type="submit" value="Calcular">
    </main>
    <section>
            <h2>Totalizando  tudo </h2>
            <p>Analisando o valor que voce digitou , <?=$total?> segundos equivalem a um total de : </p>
                <ol>
                    <ul><?=$sem?> Semanas</ul>
                    <ul><?=$dia?> dias</ul>
                    <ul><?=$h?> horas</ul>
                    <ul><?=$m?> minutos</ul>
                    <ul><?=$s?> Segundos</ul>
                </ol>
    </section>
</body>
</html>