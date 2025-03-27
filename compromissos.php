<?php

require('twig_carregar.php');
require('inc/banco.php');

use Carbon\Carbon;
date_default_timezone_set('America/Sao_Paulo');



$id = $_GET['id'] ?? null;

if($id){
    $dados = $pdo->prepare('SELECT * FROM compromissos WHERE id = :id');
    $dados->execute([':id' => $id]);
    $comp = $dados->fetch(PDO::FETCH_ASSOC);
    echo $twig->render('compromissos.html', [
        'compromissosEditar'=> $comp
    ]);
    
}else{
    $dados = $pdo->query('SELECT * FROM compromissos');
    $comp = $dados->fetchAll(PDO::FETCH_ASSOC);
    echo $twig->render('compromissos.html', [
        'compromissos'=> $comp
    ]);
}


