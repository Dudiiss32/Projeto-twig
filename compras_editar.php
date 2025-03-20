<?php

require("inc/banco.php");

$id = $_GET['id'] ?? null;


if($id){
    $item = $pdo->prepare('SELECT id FROM compras WHERE :id = id');
    $query->execute([':id' => $id]);
    
}

header('location:compras.php');