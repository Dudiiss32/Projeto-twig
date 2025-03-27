<?php

require('inc/banco.php');

$id = $_GET['id'] ?? null;

$query = $pdo->prepare('DELETE FROM compromissos WHERE id = :id');
$query->execute([':id' => $id]);

header('location:compromissos.php');