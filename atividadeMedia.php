<?php

$nota1 = readline("Insira a nota 1 ");
$nota2 = readline("Insira a nota 2 ");
$nota3 = readline("Insira a nota 3 ");
$media = ($nota1 + $nota2 + $nota3) / 3;
$frequencia = readline('Informe a frequência ');

if($media >= 7 && $frequencia >= 75){
    echo "Aluno aprovado";
}else{
    echo "Aluno reprovado";
}