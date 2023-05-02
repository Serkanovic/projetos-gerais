<?php 
    setcookie("test","value_test", time() + (86400 * 2), "/");
    setcookie("test2","value_test2", time() + 86400, "/");

    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value}</br>";
    }
?>