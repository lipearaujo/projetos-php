<?php
    $pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
    $id = $_GET['id'];
    $sql = $pdo->prepare("DELETE FROM `anotacoes` WHERE id=?");
    $sql->execute(array($id));
    
    header('location:index.php');
?>