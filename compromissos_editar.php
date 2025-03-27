<?php

require('inc/banco.php');

$id = $_POST['id'] ?? null;
$titulo = $_POST['titulo'];
$data = $_POST['data'];

$query = $pdo->prepare('UPDATE compromissos SET titulo = :titulo, data = :data WHERE id = :id');
$query->execute([
    ':titulo' => $titulo,
    ':data' => $data,
    ':id' => $id
]);
header('location:compromissos.php');