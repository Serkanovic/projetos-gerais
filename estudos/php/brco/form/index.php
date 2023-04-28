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
        <input type="radio" value="Visa" name="credit_card">
        Visa <br>
        <input type="radio" value="Mastercard" name="credit_card">
        Mastercard <br>
        <input type="radio" value="Elo" name="credit_card">
        Elo <br>

        <input type="submit" value="confirm" name="confirm">
    </form>

</body>
</html>

<?php 
    if(isset($_POST["confirm"])){

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            echo $credit_card;
        }else{
            echo "Please make a selection";
        }
    }
?>