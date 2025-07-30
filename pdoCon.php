<?php
// Configurações do banco de dados
$servidor = "localhost";
$banco = "seu_banco";
$usuario = "seu_usuario";
$senha = "sua_senha";
$charset = "utf8mb4";

// Data Source Name (DSN)
$dsn = "mysql:host=$servidor;dbname=$banco;charset=$charset";

$opcoes = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $usuario, $senha, $opcoes);
    echo "Conectado com sucesso via PDO!";
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>