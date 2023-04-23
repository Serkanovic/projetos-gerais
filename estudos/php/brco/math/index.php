<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="x">x: </label>
        <input type="text" name="x"><br>
        <label for="y">y: </label>
        <input type="text" name="y"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $total = null;
    //$total = sqrt($x);
    //$total = pow($x, $y);
    $total = rand(8,44);

    echo $total;
?>