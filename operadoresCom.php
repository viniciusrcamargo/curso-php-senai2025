<?php
$idade = readline("Informe sua idade \n");
$temCarteira = true;

if ($idade >= 18 && $temCarteira) {
    echo "Você pode dirigir.";
} else {
    echo "Você não pode dirigir.";
}
?>