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
        username:</br>
        <input type="text" name="username"><br>
        <input type="submit" value="login" name="login">
    </form>
</body>
</html>

<?php 

    if(isset($_POST["login"])){

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "Hello {$username}";
    }

?>