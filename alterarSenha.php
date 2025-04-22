<?php
require('twig_carregar.php');
require('inc/banco.php');

session_start();

$usuario = $_SESSION['usuario'];

$senhaAtual = $_POST['senhaAtual'] ?? null;
$novaSenha = $_POST['novaSenha'] ?? null;
$senhaRepetida = $_POST['senhaRepetida'] ?? null;

if($senhaAtual){
    $stmt = $pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
    $stmt->execute([':id' => $usuario['id']]);
    $dados = $stmt->fetch();

    if($novaSenha == $senhaAtual){
        echo $twig->render('alterarSenha.html', ['erro' => 'Senha igual a senha atual']);
        die;
    }
    if($novaSenha != $senhaRepetida){
        echo $twig->render('alterarSenha.html', ['erro' => 'Nova senha é diferente da senha repetida']);
        die;
    }
    if($dados && password_verify($senhaAtual, $dados['senha'])){
        if($novaSenha == $senhaRepetida){
            $dados = $pdo->prepare('UPDATE usuarios SET senha = :senha WHERE id = :id');
            $dados->execute([':senha' => password_hash($novaSenha, PASSWORD_DEFAULT), ':id' => $usuario['id']]);
            echo $twig->render('alterarSenha.html', ['sucesso' => 'Senha alterada com sucesso']);
        }
    }
    else{
        echo $twig->render('alterarSenha.html', ['erro' => 'Senha diferente do banco']);
    }

}else{
    echo $twig->render('alterarSenha.html');
}