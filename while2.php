<?php

$senhaDigitada = readline('Informe sua senha: ');
$senhaCorreta = '1234';

while($senhaDigitada != $senhaCorreta){
    echo "Senha incorreta, tente novamente \n";
    $senhaDigitada = readline('Informe sua senha novamente: ');
}