<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <form action="pro1.php" method="post">
        <label for="num">Insira um número: </label>
        <input type="number" name="num" id="num">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php
    $num = $_POST["num"];
    echo "Número digitado: {$num}<br>";
    $num ++;
    echo "Número sucessor: {$num}<br>";
    $num -=2;
    echo "Número antecessor: {$num}<br>";

?>