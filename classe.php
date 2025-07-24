<?php

class Produto {
    public $nome;
    public $preco;

    function exibir() {
        echo "Produto: $this->nome - R$ $this->preco";
    }
}


$p = new Produto();
$p->nome = "Teclado";
$p->preco = 100;
$p->exibir();

