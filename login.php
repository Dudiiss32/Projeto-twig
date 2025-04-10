<?php
require_once('twig_carregar.php');
require('inc/banco.php');



$login = $_POST['login'] ?? null;
$senha = $_POST['senha'] ?? null;

if($login && $senha){
    $dados = $pdo->prepare('SELECT * FROM usuarios WHERE login = :login AND senha = :senha');
    $dados->execute([':login' => $login, ':senha' => password_hash($senha, PASSWORD_DEFAULT)]);
    $usuario = $dados->fetch(PDO::FETCH_ASSOC);
    if ($usuario) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        echo $twig->render('home.html');
    }
}else{
    echo $twig->render('index.html');
}




