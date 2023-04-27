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
        <label for="counter">Enter a number to count to: </label>
        <input type="text" name="counter" id="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>

<?php
    $counter = $_POST["counter"];

    for($i = 1;$i <= $counter; $i++){
        echo $i . "<br>";
    }
?>