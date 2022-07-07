<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Login</title>
</head>
<body>
    <form action="./verifica.php" method="post">
        <h1>Login PHP</h1>
        <input type="text" name="usuario" id="usuario" placeholder="Nome">
        <input type="password" name="senha" id="senha" placeholder="Senha">
        <div class="buttons">
            <input type="submit" value="Entrar" name="acao">
            <a href="./cadastrar.php">Cadastre-se</a>
        </div>
    </form>
</body>
</html>

<?php
    /*Em um site ou sistema web, a sessão é importante quando se quer mais segurança na página ou quando se quer ter um controle de usuário.
    A variável de sessão PHP é usada para armazenar informações sobre, ou alterar as configurações do sistema ou site para uma sessão de usuário. As variáveis ​​de sessão armazenam informações sobre um único usuário e estão disponíveis para todas as páginas em um único aplicativo */
?>