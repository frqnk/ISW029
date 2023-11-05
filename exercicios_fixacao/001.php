<?php
    /*
    Variáveis
    */

    $variavel_1 = 'texto';
    // Imprimir o valor a variável e o seu tipo
    print($variavel_1.'<br>'.PHP_EOL);
    print('$variavel_1'.'<br>'.PHP_EOL);
    print(gettype($variavel_1).'<br>'.PHP_EOL);
    print('<br>'.PHP_EOL);

    $variavel_2 = 123;
    // Imprimir o valor a variável e o seu tipo
    print($variavel_2.'<br>'.PHP_EOL);
    print('$variavel_2'.'<br>'.PHP_EOL);
    print(gettype($variavel_2).'<br>'.PHP_EOL);
    print('<br>'.PHP_EOL);

    $variavel_3 = 1;
    // Imprimir o valor a variável e o seu tipo
    print($variavel_3.'<br>'.PHP_EOL);
    print('$variavel_3'.'<br>'.PHP_EOL);
    print(gettype($variavel_3).'<br>'.PHP_EOL);
    print('<br>'.PHP_EOL);

    $array = [
        "foo" => "bar",
        "bar" => "foo",
    ];
    // Imprimir o valor a variável e o seu tipo
    print(print_r($array).'<br>'.PHP_EOL);
    print('$array'.'<br>'.PHP_EOL);
    print(gettype($array).'<br>'.PHP_EOL);
    print('<br>'.PHP_EOL);
?>