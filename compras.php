<?php

require_once('twig_carregar.php');
require('inc/banco.php');


$id = $_GET['id'] ?? null;

if($id){
    $dados = $pdo->prepare('SELECT * FROM compras WHERE id = :id');
    $dados->execute([':id' => $id]);
    $compraEditar = $dados->fetch(PDO::FETCH_ASSOC);    

    echo $twig->render('compras.html', [
        'titulo' => 'Compras',
        'compraEditar' => $compraEditar,
    ]);
}else{
    // Busca as compras no banco

    $dados = $pdo->query('SELECT * FROM compras');
    $comp = $dados->fetchAll(PDO::FETCH_ASSOC);
    echo $twig->render('compras.html', [
        'titulo' => 'Compras',
        'compras' => $comp,
    ]);
}
