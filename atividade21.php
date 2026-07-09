<?php
/*Faça um algoritmo para calcular quantas ferraduras são necessárias para
equipar todos os cavalos comprados para um haras.
Resultado esperado: para 12 cavalos, serão necessárias 48 ferraduras.*/

// Entradas - Váriaveis
$cavalos = 12;
$horas = 1;

// Processamento
$qtdFerraduras = $cavalos * 1 * 4;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 21</title>
</head>

<body>

    <h3>Atividade 21</h3

        <p>Faça um algoritmo para calcular quantas ferraduras são necessárias para
    equipar todos os cavalos comprados para um haras.
    Resultado esperado: para 12 cavalos, serão necessárias 48 ferraduras.
    </p>

    <p> <?php echo ("Quantidade de ferraduras: " . $qtdFerraduras) ?> </p>

</body>

</html>