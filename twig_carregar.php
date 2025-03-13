<?php

require_once('vendor/autoload.php');

// loader é quem carrega os arquivos HTML
$loader = new \Twig\Loader\FilesystemLoader('./templates');

// Criar o objeto do Twig
$twig = new \Twig\Environment($loader);