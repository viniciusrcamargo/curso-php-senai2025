<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilos.css">
    <title>Meu primeiro HTML</title>
</head>
<body>
<h1 id="titulo">Vinicius Rodrigues Camargo</h1>
<p>Professor de educação profissional</p>
<h2><?php echo"Curso de PHP do Senai"?></h2>
<h3><?php $alunoSenai = 10 + 33; echo $alunoSenai?></h3>
<?php
    for($i = 0; $i < 4; $i++){
        echo "<h3 class='cumprimento'>Bem vindo $i</h3>";
    }
?>
</body>
</html>