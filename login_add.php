<?php 

require_once('twig_carregar.php');
require("inc/banco.php");

$login = $_POST['login'] ?? null;
$senha = $_POST['senha'] ?? null;

if($login && $senha){
    $query = $pdo->prepare('INSERT INTO usuarios (login, senha) VALUES (:login, :senha)');
    $query->execute([
        ':login' => $login,
        ':senha' => password_hash($senha, PASSWORD_DEFAULT),
    ]);
    echo $twig->render('index.html');
}else{
    echo $twig->render('cadastro.html');
}
