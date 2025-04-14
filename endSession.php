<?php

require('twig_carregar.php');
require('inc/banco.php');

session_start();

if(isset($_SESSION['usuario'])){
    session_destroy();
    echo $twig->render('index.html');
}else{
    echo $twig->render('home.html');
}