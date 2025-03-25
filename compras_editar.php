<?php

require("inc/banco.php");

$item = $_POST['item'] ?? null;
$id= $_POST['id'] ?? null;

$dados = $pdo->prepare('UPDATE compras SET item =:item WHERE id= :id');
$binds = [
    ':item' => $item,
    ':id'=> $id,
];

$dados->execute($binds);

header('location:compras.php');