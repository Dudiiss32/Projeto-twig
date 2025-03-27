<?php 

require("inc/banco.php");

$titulo = $_POST['titulo'];
$data = $_POST['data'];

if($titulo && $data){
    $query = $pdo->prepare('INSERT INTO compromissos (titulo, data) VALUES (:titulo, :data)');
    $query->execute([
        ':titulo' => $titulo,
        ':data' => $data,
    ]);
}
header('location:compromissos.php');