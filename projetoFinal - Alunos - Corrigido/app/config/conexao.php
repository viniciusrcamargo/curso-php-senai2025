<?php

class Database {
    private static ?PDO $conexao = null;

    public static function getConnection(): PDO{
        try{
            if(self::$conexao === null){
                $host = 'localhost';
                $db = 'aula_php';
                $user = 'root';
                $senha = '%vBV6c4B7$';
                $charset = 'utf8mb4';
                $dsn = "mysql:host=$host;dbname=$db;charset:$charset";//corrigir aqui o dbname=
                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                self::$conexao = new PDO($dsn, $user, $senha);

            }
            //echo "Conectado com sucesso";
        }catch (PDOException $e){
            die("Erro de conexão". $e);
        }

        return self::$conexao;
    }
}

// $conecta = new Database();
// $conecta->getConnection();
