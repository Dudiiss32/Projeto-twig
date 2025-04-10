<?php 

require("inc/banco.php");

$login = $_POST['login'] ??;
$senha = $_POST['senha'];

if($login && $senha){
    $query = $pdo->prepare('INSERT INTO usuarios (login, senha) VALUES (:login, :senha)');
    $query->execute([
        ':login' => $login,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT),
    ]);
}
header('location:login.php');