<?php
require_once 'pdoCon.php';
require_once 'pdoExec.php';

// Preparar a consulta SQL
$stmt = $pdo->prepare("SELECT * FROM usuarios");

// Executar a consulta passando os parâmetros em um array
$id_usuario = 1;
$stmt->execute();

// Buscar o resultado
$usuario = $stmt->fetch();
echo var_dump($usuario);

if ($usuario) {
    echo "<h1>Bem-vindo, " . htmlspecialchars($usuario['nome']) . "</h1>";
    echo "<p>Seu e-mail é: " . htmlspecialchars($usuario['email']) . "</p>";
} else {
    echo "Usuário não encontrado.";
}
?>