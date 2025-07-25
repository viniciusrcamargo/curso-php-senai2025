<?php
class Produto {
    public $nome;
    public $preco;

    function exibir() {
        echo "Produto: $this->nome - R$ $this->preco";
    }
}

$p = new Produto();
$p->nome = "Mouse";
$p->preco = 59.90;
$p->exibir();
?>
