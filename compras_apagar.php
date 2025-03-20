<?php

require('inc/banco.php');


$idItem = $_GET['id'] ?? null;

if($idItem){
    $query = $pdo->prepare('DELETE FROM compras WHERE id = :id');
    $query->execute([':id' => $idItem]);
}

header('location:compras.php');