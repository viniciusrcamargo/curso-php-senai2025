<?php

$nome = readline('Informe seu nome: ');
$idade = readline('Informe sua idade: ');

if($idade <= 10){
    echo "$nome você é uma criança, pois tem $idade anos";
}else if($idade <=14 ){
    echo "$nome você é um adolescente, pois tem $idade anos";
}else if($idade <= 18){
    echo "$nome você é um jovem, pois tem $idade anos";
}else if($idade > 18){
    echo "$nome você é um adulto, pois tem $idade anos";
}else{
    echo "Idade inválida";
}