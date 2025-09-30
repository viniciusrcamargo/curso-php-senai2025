<?php

namespace models;
use Database;
use PDO;

require_once __DIR__ . '/../config/conexao.php';

class Contato
{
    public ?int $id;
    public string $nome;
    public string $email;
    public string $telefone;
    private static $pdo;

    public function __construct(?int $id, string $nome, string $email, string $telefone)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public static function selecionarTodos(){
        try{
            $pdo = Database::getConnection();
            $stmt = $pdo->query('SELECT id, nome, email, telefone FROM contatos
        ORDER BY id DESC');
            $dados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $contatos = [];
            foreach ($dados as $d){
                $contato = new Contato($d['id'],$d['nome'],$d['email'],$d['telefone']);
                $contatos[] = $contato;
            }
        }catch (\PDOException $e){
            die('Erro ao selecionar todos'. $e->getMessage());
        }

        return $contatos;
    }

    public static function selecionaUm(?int $id): ?Contato{
        try{
            $pdo = Database::getConnection();
            $stmt = $pdo->prepare("SELECT id, nome, email, telefone FROM contatos
        WHERE id = :id");
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result ? new Contato((int)$result['id'],
                $result['nome'],$result['email'],$result['telefone']) : null;
        }catch (\PDOException $e){
            die('Erro ao selecionar contato'. $e->getMessage());
        }
    }

    public function salvar(): bool{//tirar o stativ
        try{
            $pdo = Database::getConnection();
            if($this->id === null){
                $stmt = $pdo->prepare('INSERT INTO contatos (nome, email, telefone) VALUES (
                             :nome,:email,:telefone)');
                $stmt->bindParam('nome', $this->nome);
                $stmt->bindParam('email', $this->email);//corrigir
                $stmt->bindParam('telefone', $this->telefone);
                if($stmt->execute()){
                    $this->id = (int) $pdo->lastInsertId();
                    return true;
                }
            }else{//colocar where e o id no return
                $stmt = $pdo->prepare('UPDATE contatos SET nome = ?, email = ?, telefone = ? WHERE id = ?');
                return $stmt->execute([$this->nome, $this->email, $this->telefone, $this->id]);
            }
        }catch (\PDOException $e){
            die('Erro ao executar a operação'. $e->getMessage());
        }
    }


    public static function deletar(int $id): bool{
        try{
            $pdo = Database::getConnection();
         $stmt = $pdo->prepare('DELETE FROM contatos WHERE id = ?');
         return $stmt->execute([$id]);
        }catch (\PDOException $e){
            die('Erro ao executar a operação'. $e->getMessage());
        }
         
    }


}