<?php

require_once 'pdoCon.php';

echo "--Atualização de usuários--- \n";

$id = readline('Informe o código do usuário a ser alterado: ');
if(!filter_var($id, FILTER_VALIDATE_INT) || $id < 0){
    echo "Número inválido, tente novamente";
    exit;
}
$nome = readline('Insira o nome do usuário');
$email = readline('Insira o e-mail do usuário');
$endereco = readline('Insira o endereço do usuário');
$telefone = readline('Insira o telefone');

try{
    $pdo = new PdoCon;
    $con = $pdo->conectar();
    $sql = "UPDATE usuarios SET nome = :nome, email = :email, endereco = :endereco, 
                    telefone = :telefone WHERE id = :id";
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':endereco', $endereco);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':id', $id);
    if($stmt->execute()){
        echo "Dados atualizados com sucesso";
    }
}catch (PDOException $e){
    die("Dados não atualizados " . $e->getMessage());
}