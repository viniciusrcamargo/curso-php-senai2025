<?php

require_once 'mysqliCon.php';

// Preparar a consulta SQL
$stmt = $mysqli->prepare("DELETE FROM usuarios WHERE id = ?");

// Vincular o parâmetro
$id = 2;
$stmt->bind_param("i", $id);

// Executar a consulta
if ($stmt->execute()) {
    echo "Registro excluído com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}
