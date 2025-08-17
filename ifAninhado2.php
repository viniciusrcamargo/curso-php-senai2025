<?php

$dia = readline('Informe o dia da semana de 1 a 7: ');

if($dia == 1){
    echo "Domingo";
}else if($dia == 2){
    echo "Segunda";
}else if($dia == 3){
    echo "Terça";
}else if($dia == 4){
    echo "Quarta";
}else if($dia == 5){
    echo "Quinta";
}else if($dia == 6){
    echo "Sexta";
}else if($dia == 7){
    echo "Sábado";
}else{
    echo "Dia inválido";
}