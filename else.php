<?php

$idade = readline('Informe sua idade: ');//lê valor do teclado

if($idade >= 18){//só se fo true
    echo "Você já pode se alistar no TG";
}else{//só se for false a primeira expressão
    echo "Você pode se inscrever no escoteiro.";
}