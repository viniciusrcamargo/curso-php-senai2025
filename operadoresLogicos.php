<?php

$idade = readline('Informe sua idade ');
$habilitacao = readline('Têm habilitação? ');

//operador && as duas precisam ser verdadeiras
if($idade >=18 && $habilitacao == 'sim'){
    echo "Pode dirigir!";
}else{
    echo "Não pode dirigir!";
}