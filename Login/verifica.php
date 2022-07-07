<?php
    /*Essa página primeiramente receberá os dados da página index.php, se conectará ao database para pesquisa e logo após decidirá se o usuário passará ou não para dentro do sistema. */

    //session_start inicia a sessao
    session_start();

    if(isset($_POST['acao'])){
        //as variáveis usuario e senha recebem os dados digitados no formulario na página index.php
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $pdo = new PDO('mysql:host=localhost;dbname=tb_login','root','');
        
        // A variavel $sql pega as varias $login e $senha, e faz uma
        //pesquisa na tabela de usuarios
        $sql = $pdo->prepare("SELECT * FROM `usuario` WHERE `nome` = ? AND `senha` = ?");
        $sql->execute(array($usuario, $senha));

        /* Logo abaixo temos um bloco com if e else, verificando se a variável $sql foi
        bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
        será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do
        resultado ele redirecionará para a página main.php ou retornara  para a página
        do formulário inicial para que se possa tentar novamente realizar o login */
        if($sql->rowCount() == 1){
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('location:main.php');
        }else{
            unset ($_SESSION['usuario']);
            unset ($_SESSION['senha']);
            header('location:index.php');
        }
    }



?>