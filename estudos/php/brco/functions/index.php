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
        <label for="username">username: </label>
        <input type="text" name="username" id="username"></br>
        <label for="password">password: </label>
        <input type="password" name="password" id="password"><br>

        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php
    /*
    foreach($_POST as $key => $value){
        echo"{$key} = {$value} <br>";
    }
    */

    if(isset($_POST["login"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username)){
            echo "Username is missing";
        }elseif(empty($password)){
            echo"Password is missing";
        }else {
            echo "Hello {$username}";
        }
        
    }
?>