<?php

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

for ($i = 0; $i < $num; $i++) {
    echo "Número: $num[$i] \n";
    if($num[$i] == 6){
        break; // Interrompe o loop se o número for 6
    }
}

$aleatorio = rand(1, 10);
echo "Número aleatório: $aleatorio \n";