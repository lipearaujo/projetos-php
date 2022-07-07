<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Cadastrar</title>
</head>
<body>
<form  method="post">
        <h1>Cadastrar</h1>
        <input type="text" name="nome_cadastro"  placeholder="Nome">
        <input type="password" name="senha_cadastro" placeholder="Senha">
        <div class="buttons">
            <input type="submit" value="Cadastrar" name="cadastro">
        </div>

        <?php 
            if(isset($_POST['cadastro'])){
                $nome_cadastro = $_POST['nome_cadastro'];
                $senha_cadastro = $_POST['senha_cadastro'];

                $pdo = new PDO('mysql:host=localhost;dbname=tb_login','root','');

                $sql = $pdo->prepare("INSERT INTO `usuario` VALUES(null,?,?)");
                $sql->execute(array($nome_cadastro, $senha_cadastro));
            }
        ?>
    </form>
</body>
</html>