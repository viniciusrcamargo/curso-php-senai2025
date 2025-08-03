<?php
require_once 'pdoCon.php';
require_once 'pdoExec.php';

// Preparar a consulta SQL
$stmt = $pdo->prepare("SELECT id, nome, email FROM usuarios WHERE id = ?");

// Executar a consulta passando os parâmetros em um array
$id_usuario = 1;
$stmt->execute([$id_usuario]);

// Buscar o resultado
$usuario = $stmt->fetch();

if ($usuario) {
    echo "<h1>Bem-vindo, " . htmlspecialchars($usuario['nome']) . "</h1>";
    echo "<p>Seu e-mail é: " . htmlspecialchars($usuario['email']) . "</p>";
} else {
    echo "Usuário não encontrado.";
}
?>