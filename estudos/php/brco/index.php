<?php

    $num1 = 9;    

    //echo "{$num1} x {$num2} = {$res}";

    for($i=1;$i<=10;$i++) {
        $res = $num1 * $i;
        echo "{$i} x {$num1} = {$res}<br>";
    };

    if($num1 % 2 == 0) {
        echo "par<br>";
    }else {
        echo "impar<br>";
    };


?>