<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>

    <?php
        /* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
        simplesmente não fazer o login e digitar na barra de endereço do seu navegador
        o caminho para a página principal do site (sistema), burlando assim a obrigação de
        fazer um login, com isso se ele não estiver feito o login não será criado a session,
        então ao verificar que a session não existe a página redireciona o mesmo
        para a index.php.*/
        session_start();
        if((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            header('location:index.php');
        }

        $logado = $_SESSION['usuario'];
    ?>
</head>
<body>
    <h1>Bem vindo <?php echo $_SESSION['usuario']?> !</h1>
</body>
</html>