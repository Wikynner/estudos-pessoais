<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio </title>
</head>
<body>
    <main>
        <h1>Analisaor de Numero Real</h1>
        <?php 
        $num = $_POST["n"] ?? 0;
    echo"<P>Analisando o numero".number_format($num, 3 , "","")."informado pelo isiario</p>";
    $int = (int)$num;
        echo "<ul><ul> A parte inteira do numero é <strog>".number_format($int, 0,",",",",".");
    ?>
    <button onclick="javascript:history.go(-1)">voltar</button>
    </main>
</body>
</html>