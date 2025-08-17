<?php

$num = readline('Insira um número: ');

$resultado = $num % 2;

if($resultado == 0){
    echo "O número $num é par";
}else{
    echo "O número $num é impar";
}