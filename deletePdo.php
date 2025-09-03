<?php

require_once 'pdoCon.php';

echo "--Exclusão de usuário--- \n";

$id = readline("Informe o código do usuário que deseja deletar: ");
if(!filter_var($id, FILTER_VALIDATE_INT) || $id < 0){
    echo "Número inválido, tente novamente";
    exit;
}

try{
    $pdo = new PdoCon();
    $con = $pdo->conectar();
    $sql = "DELETE FROM usuarios WHERE id = :id";
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':id',$id);
    if($stmt->execute()){
        echo 'Dados excluidos com sucesso!';
    }
}catch (PDOException $e){
    die("Não foi possível exluir o usuário " . $e->getMessage());
}
