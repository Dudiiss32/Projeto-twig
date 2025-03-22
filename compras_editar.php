<?php

require("inc/banco.php");

$item = $_POST['item'] ?? null;
$id= $_POST['id'] ?? null;

$dados = $pdo->prepare('UPDATE compras SET item =:item WHERE id= :id');

// Associa os valores dentro da consulta
$binds = [
    ':item' => $item,
    ':id'=> $id,
];

// Executa a consulta
$dados->execute($binds);

header('location:compras.php');