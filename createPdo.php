<?php

require_once 'pdoCon.php';

echo "--Cadastro de usuário--- \n";

$nome = readline('Insira o nome do usuário');
$email = readline('Insira o e-mail do usuário');
$endereco = readline('Insira o endereço do usuário');
$telefone = readline('Insira o telefone');

try{
    $pdo = new PdoCon();
    $con = $pdo->conectar();
    $sql = "INSERT INTO usuarios (nome, email, endereco, telefone) VALUES (?,?,?,?)";
    $stmt = $con->prepare($sql);
    if($stmt->execute([$nome,$email,$endereco,$telefone])){
        echo 'Dados inseridos com sucesso';
    }
}catch (PDOException $e){
    die("Erro ao inserir os dados" . $e->getMessage());
}