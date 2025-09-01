<?php

class PdoCon
{
    private $usuario = 'root';
    private $senha = 'Senai@901';//
    private $banco = 'contatos';
    private $servidor = 'localhost';//máquina local
    private $charset = "utf8mb4";
    private static $pdo;//que não muda


    //método de conexão
    public function conectar()
    {
        if(is_null(self::$pdo)){//verifica se não tem estância criada
            try{//mysql:host=$servidor;dbname=$banco;
                $dsn = "mysql:host=" . (new self())->servidor . ";dbname=" .
                    (new self())->banco .";charset=" . (new self())->charset;
                self::$pdo = new Pdo($dsn, (new self())->usuario, (new self())->senha);
                //echo "Conectado com sucesso!";
            }catch (PDOException $e){
                die("Erro de conexão" . $e->getMessage(). "\n");
            }
        }
        return self::$pdo;
    }

}

//só para testes
$conexao = new PdoCon();
$conexao->conectar();