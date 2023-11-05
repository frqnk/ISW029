<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Adivinhando a senha
        </title>
    </head>
    <body>
        <?php
            if($_POST['senha'] == 'ç') {
                print('Parabéns, você sabe a senha'.'<br>'.PHP_EOL);
            }
            else {
                print('Você errou'.'<br>'.PHP_EOL);
                $handle = fopen("senhas_enviadas.txt", "a");
                fwrite($handle, $_POST['senha'].PHP_EOL);
                fflush($handle);
                fclose($handle);
            }
        ?>
    </body>
</html>