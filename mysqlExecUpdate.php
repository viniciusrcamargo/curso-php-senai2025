
<?php

require_once 'mysqliCon.php';
// Preparar a consulta SQL
$stmt = $mysqli->prepare("UPDATE usuarios SET nome = ?, email = ? WHERE id = ?");

// Vincular os parâmetros
$nome = "Maria Oliveira";
$email = "maria.oliveira@example.com";
$id = 1;
$stmt->bind_param("ssi", $nome, $email, $id);

// Executar a consulta
if ($stmt->execute()) {
    echo "Registro atualizado com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}
