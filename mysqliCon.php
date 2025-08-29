<?php
// Configurações do banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "%vBV6c4B7$";
$banco = "contatos";

// Criar a conexão
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

// Checar a conexão
if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

echo "Conectado com sucesso via MySQLi!";

// Lembre-se de fechar a conexão
// $mysqli->close();
?>