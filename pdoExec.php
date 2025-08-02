<?php
require_once 'pdoCon.php';

$dsn = "mysql:host=$servidor;dbname=$banco;charset=$charset";
$opcoes = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
     // Em vez de 'new PDO(...)', usamos 'PDO::connect(...)'
    $pdo = PDO::connect($dsn, $usuario, $senha, $opcoes);

     // Agora, a variável $pdo é do tipo PDO\Mysql, não um PDO genérico!
    echo "Conectado com sucesso com o novo método do PHP 8.4!";

} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>