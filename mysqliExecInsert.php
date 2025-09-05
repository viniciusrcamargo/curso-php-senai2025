<?php
require_once 'mysqliCon.php';
// Preparar a consulta SQL
$stmt = $mysqli->prepare("INSERT INTO usuarios (nome, email) VALUES (?, ?)");

// Vincular os parâmetros
$nome = "Jose da Silva";
$email = "joao.silva@example.com";
$stmt->bind_param("ss", $nome, $email);

// Executar a consulta
if ($stmt->execute()) {
    echo "Novo registro inserido com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}

// Fechar o statement e a conexão
$stmt->close();
$mysqli->close();
?>