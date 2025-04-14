<?php
require_once('twig_carregar.php');
require('inc/banco.php');

$login = $_POST['login'] ?? null;
$senha = $_POST['senha'] ?? null;

if($login && $senha){
    $dados = $pdo->prepare('SELECT * FROM usuarios WHERE login = :login');
    $dados->execute([':login' => $login]);
    $usuario = $dados->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario['senha'])) {
        session_start();
        $_SESSION['usuario'] = $usuario;
        echo $twig->render('home.html');
    } else {
        echo $twig->render('index.html', ['erro' => 'Login ou senha inválidos.']);
    }
}else{
    echo $twig->render('index.html');
}




