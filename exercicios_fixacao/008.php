<?php
    /*
    Descrubra se $numero é :
    - Divisível por 10
    - Divisível por 3
    - Se não é divisível por nenhum destes

    Imprimir mensagem na tela do número e as condições acima.
    */

    $numero = 150;

    if($numero % 10 == 0 && $numero % 3 == 0) {
        print($numero.' é divisível por 10 e por 3'.'<br>'.PHP_EOL);
    }
    else if($numero % 10 == 0 && $numero % 3 <> 0) {
        print($numero.' é divisível por 10 e não por 3'.'<br>'.PHP_EOL);
    }
    else if($numero % 10 <> 0 && $numero % 3 == 0) {
        print($numero.' é divisível por 3 e não por 10'.'<br>'.PHP_EOL);
    }
    else if($numero % 10 <> 0 && $numero % 3 <> 0) {
        print($numero.' não é divisível por 10 e nem por 3'.'<br>'.PHP_EOL);
    }
?>