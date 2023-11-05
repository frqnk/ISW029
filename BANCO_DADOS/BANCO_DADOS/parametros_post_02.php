<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Passagem de Parâmetros via POST
        </title>
    </head>
    <body>
        <?php
            require_once('dados_banco.php');

            try {
                $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e) {
                echo $sql."<br>".$e->getMessage();
            }

            function validar_post($dado_enviado) {
                if(isset($dado_enviado) and $dado_enviado != "") {
                    return true;
                }
                else {
                    return false;
                }
            }

            $fN = $_POST['firstName'];
            $lN = $_POST['lastName'];

            if(validar_post($fN) and validar_post($lN)) {
                header('location: parametros_post_01.php');
                $sql = "INSERT INTO authors (firstname, lastname) VALUES ('$fN', '$lN')";
                $conn->exec($sql);
                // echo 'Nome: '.$fN.'<br>';
                // echo '<br>';
                // echo 'Sobrenome: '.$lN.'<br>';
                // echo '<br>';
            }

            $conn = null;
        ?>
    </body>
</html>