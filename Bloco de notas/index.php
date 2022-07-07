<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/5653d7f13d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Note App</title>
</head>

<body>
    <header>
        <h1>Note App</h1>
    </header>

    <div class="notes">
        <form method="post">
            <input type="text" name="titulo" placeholder="Titulo">
            <textarea name="anotacao" id="anotacao" cols="50" rows="20" placeholder="Anotação..."></textarea>
            <div class="btn">
                <input type="submit" value="Salvar" name="acao" id="salvar">
            </div>
        </form>

        <?php
            if (isset($_POST['acao'])) {
                $titulo = $_POST['titulo'];
                $texto = $_POST['anotacao'];

                $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
                $sql = $pdo->prepare("INSERT INTO `anotacoes` VALUES(NULL, ?, ?)");
                $sql->execute(array($titulo, $texto));
            }
        ?>
    </div>

    <div class="notas-salvas">
        <h1>Notas Salvas</h1>

        <?php
            $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
            $sql = $pdo->prepare("SELECT * FROM `anotacoes`");
            $sql->execute();

            $info = $sql->fetchAll();
            foreach ($info as $key => $value) {
                echo '<div class="notas-salvas-single">
                                <h1>' . $value['titulo'] . '</h1>
                                <p>' . $value['anotacao'] . '</p>
                                <a class="btn-del" href="./deletar.php?id='.$value["id"].'">Deletar</a>
                        </div>';
            }
        ?>
    </div>

    <script src="./scripts.js"></script>
</body>

</html>