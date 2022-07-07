<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Questionario</title>
</head>
<body>
    <form action="" method="post">
        <p>Quantos anos você tem ?</p>
        <span>20</span> <input type="radio" name="pergunta1" value="20">
        <span>24</span> <input type="radio" name="pergunta1" value="24">
        <span>30</span> <input type="radio" name="pergunta1" value="30">

        <p>Qual seu nome ?</p>
        <span>Filipe</span> <input type="radio" name="pergunta2" value="Filipe">
        <span>João</span> <input type="radio" name="pergunta2" value="João">
        <span>Marcio</span> <input type="radio" name="pergunta2" value="Marcio">

        <p>O que gosta de fazer ?</p>
        <span>Ler</span> <input type="radio" name="pergunta3" value="Ler">
        <span>Programar</span> <input type="radio" name="pergunta3" value="Programar">
        <span>Correr</span> <input type="radio" name="pergunta3" value="Correr">

        <input type="submit" name="acao" value="Enviar">
    </form>
</body>
</html>

<?php
    if(isset($_POST['acao'])){
        $respostas = array('24', 'Filipe', 'Programar');
        $i = 0;
        $pontos = 0;
        foreach ($_POST as $key => $value) {
            if($key != 'acao'){
                if($respostas[$i] == $value){
                    $pontos++;
                }
                $i++;
            }
        }

        echo '<h1>Seu resultado foi: </h1>'.$pontos.'/'.$i;
    }
?>
