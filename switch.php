<?php

$diaSemana = readline("Informe o dia da semana de 1 à 7: ");

switch($diaSemana){//condição
    case 1:
        echo "Domingo";
        break;//parada
    case 2:
        echo "Segunda";
        break;//parada
    case 3:
        echo "Terça";
        break;//parada
    case 4:
        echo "Quarta";
        break;//parada
    case 5:
        echo "Quinta";
        break;//parada
    case 6:
        echo "Sexta";
        break;//parada
    case 7:
        echo "Sábado";
        break;//parada
    default:
        echo "Dia inválido";
        break;
    
}