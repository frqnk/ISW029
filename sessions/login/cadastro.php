<?php
    session_start();
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: index.php");
        exit;
    }

    if(isset($_POST)) {
        if(!empty($_POST['nome']) and !empty($_POST['cpf'])) {
            $filename = $_POST['cpf'].' '.$_POST['nome'];
            $handle = fopen($filename, 'w');
            fwrite($handle, $_POST['nome'].PHP_EOL.$_POST['cpf'].PHP_EOL);
            fflush($handle);
            fclose($handle);
            print('cadastro realizado');
        }
        else {
            print('informações insuficientes');
        }
    }
?>

<!DOCTYPE html>
<html lang="pt_BR">
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label>
                Nome
            </label>
            <input name="nome">
            <label>
                CPF
            </label>
            <input name="cpf">
            <input type="submit" value="cadastrar">
        </form>
    </body>
</html>