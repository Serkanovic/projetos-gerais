<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento</title>
</head>
<body>
    <form action="pro2.php" method="post">
        <p>Gerar número entre 0 e 100</p>
        <input type="submit" value="gerar" name="gerar" id="gerar">
    </form>
</body>
</html>

<?php 
    $num = $_POST["gerar"];
    $num = rand(0,100);
    echo $num;
?>