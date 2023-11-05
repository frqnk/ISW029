<?php
    /*
    Escreva um script que imprima qual o maior número.
    Use IF .. ELSE
    */

    $a = 10;
    $b = 1;
    $c = 40;

    if($a > $b && $a > $c) print($a);
    else {
        if($b > $a && $b > $c) print($b);
        else {
            if($c > $a && $c > $b) print($c);
        }
    }
?>