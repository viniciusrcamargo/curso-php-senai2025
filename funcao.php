<?php

function boasVindas() {
    echo "Bem-vindo ao PHP!";
}

function saudacao($parametro){
    echo "Olá, $parametro!";
}

function soma($a, $b) {
    return $a + $b;
}

boasVindas(); // Chamada da função boasVindas
saudacao("Usuário"); // Chamada da função saudacao
$resultado = soma(5, 10); // Chamada da função soma
echo "Resultado da soma: $resultado";