<?php
// Carrega o carregador do Twig
require_once('twig_carregar.php');
// Mostra o template na tela
session_start();
$usuario = $_SESSION['usuario'] ?? null;

if($usuario){
    echo $twig->render('home.html', ['usuario' => $usuario]);
}else{
    echo $twig->render('index.html');
}

