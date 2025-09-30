<?php

use models\Contato;
require_once __DIR__ . '/../models/Contato.php';

class ContatoController{ // mudar nome para ContatoController
    private $contato;

    public function __construct(){
        $this->contato = new Contato(1,'Nome','E-mail', 'Telefone');
    }

    public function index(): void{
        $contatos = Contato::selecionarTodos();
        $this->render('contatos/index', ['contatos' => $contatos, 'title' => 'Lista de contatos']);
    }

    public function create(): void{
        $this->render('contatos/create', ['title' => 'Novo contato']);
    }

    public function store(): void{
        $contato = new Contato(null, $_POST['nome'] ?? '', $_POST['email'] ?? '', $_POST['telefone'] ?? '');//variável post envia dados da web para o método
        $contato->salvar();
        header('Location: /contatos');//redirecionando
    }

    public function edit(array $params): void{
         $id = (int)($params['id'] ?? 0);
        $contato = Contato::selecionaUm($id);
        if(!$contato){
            http_response_code(404);
            echo 'Contato não encontrato';
            return;//encerra o método aqui
        }//arrumar a linha debaixo colocando contato no retorno
        $this->render('contatos/edit', ['contato'=> $contato, 'title'=> 'Editar contato']);
    }


    public function update(array $params): void{
        $id = (int)($params['id'] ?? 0);
        $contato = Contato::selecionaUm($id);
        if(!$contato){
            http_response_code(404);
            echo 'Contato não encontrato';
            return;//encerra o método aqui
        }
        $contato->nome = $_POST['nome'];//arrumar para contato
        $contato->email = $_POST['email'];
        $contato->telefone = $_POST['telefone'];
        $contato->salvar();
        header('Location: /contatos');
    }

    public function destroy(array $params): void{
        $id = (int)($params['id'] ?? 0);
        $contato = Contato::deletar($id);
        header('Location: /contatos');
    }

    public function render(string $view, array $data = []): void{
        extract($data);
        require __DIR__ . "/../view/$view.php";
    }

}

