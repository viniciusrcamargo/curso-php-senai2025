<?php

require_once 'mysqliCon.php';

// Preparar a consulta SQL
$stmt = $mysqli->prepare("SELECT nome, email FROM usuarios");

// Vincular o parâmetro
// $email = "joao.silva@example.com";
// $stmt->bind_param("s", $email);

// Executar a consulta
$stmt->execute();

// Obter os resultados
$result = $stmt->get_result();
while ($row = $result->fetch_assoc()) {
    echo "Nome: " . $row['nome'] . " - Email: " . $row['email'] . "<br>";
}
