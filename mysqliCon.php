<?php
// Configurações do banco de dados
$servidor = "localhost";
$usuario = "seu_usuario";
$senha = "sua_senha";
$banco = "seu_banco";

// Criar a conexão
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

// Checar a conexão
if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

echo "Conectado com sucesso via MySQLi!";

// Lembre-se de fechar a conexão
$mysqli->close();
?>