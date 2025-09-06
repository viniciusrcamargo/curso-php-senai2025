<?php

require_once 'pdoCon.php';

echo "--Listagem de usuários--- \n";


try{
    $pdo = new PdoCon();
    $con = $pdo->conectar();
    $stmt = $con->query('SELECT nome, email, endereco,telefone from usuarios ORDER BY nome');

    if($stmt->rowCount() > 0){
        while ($usuario = $stmt->fetch()){
            echo "Usuário " . $usuario['nome'].PHP_EOL;
            echo "Email " . $usuario['email'].PHP_EOL;
            echo "Endereço " . $usuario['endereco'].PHP_EOL;
            echo "Telefone " . $usuario['telefone'].PHP_EOL;
            echo "---------------".PHP_EOL;
        }
    }else{
        echo "Não existem dados salvos";
    }
}catch (PDOException $e){
    die("Não foi possível listar os dados " . $e->getMessage());
}