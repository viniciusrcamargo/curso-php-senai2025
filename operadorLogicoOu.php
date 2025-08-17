<?php

$idade = readline('Informe sua idade ');
$responsavel = readline('Esta com o responsável? ');

if($idade >= 16 || $responsavel == 'sim'){
    echo "Pode entrar";
}else{
    echo "Não pode entrar";
}