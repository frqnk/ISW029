<?php
    $filename = "teste.txt";
    if(!file_exists("teste.txt")) {
        $handle = fopen("teste.txt", "w");
    }
    else {
        $handle = fopen("teste.txt", "a");
    }

    fwrite($handle, "Conteúdo\n");
    fflush($handle); // salva as mudanças no arquivo
    fclose($handle);

    $handle = fopen("teste.txt", "r");
    while(!feof($handle)) {
        $line = fgets($handle); // pega o conteúdo da linha
        echo $line."<br>"; // e mostra
    }
    fclose($handle);
?>