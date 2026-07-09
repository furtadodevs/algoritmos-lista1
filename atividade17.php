<?php
/*O custo ao consumidor de um carro novo é a soma do custo de fábrica com os
impostos e a porcentagem do distribuidor. Primeiro, aplique 45% de impostos
sobre o custo de fábrica e depois aplique 28% do distribuidor sobre o resultado.
Escreva um algoritmo que leia o custo de fábrica e informe o custo final ao
consumidor.
Resultado esperado: um carro com custo de fábrica de R$ 50.000,00 terá valor
com impostos de R$ 72.500,00 e custo final ao consumidor de R$ 92.800,00.*/

// Entradas - Váriaveis
$carro = 50000.00;

// Processamento
$imposto1 = $carro * 45 / 100;
$valorImposto1 = $carro + $imposto1;
$imposto2 = $valorImposto1 * 28 / 100;
$valorImposto2 = $valorImposto1 + $imposto2;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 17</title>
</head>

<body>

    <h3>Atividade 17</h3

        <p>O custo ao consumidor de um carro novo é a soma do custo de fábrica com os
    impostos e a porcentagem do distribuidor. Primeiro, aplique 45% de impostos
    sobre o custo de fábrica e depois aplique 28% do distribuidor sobre o resultado.
    Escreva um algoritmo que leia o custo de fábrica e informe o custo final ao
    consumidor.
    Resultado esperado: um carro com custo de fábrica de R$ 50.000,00 terá valor
    com impostos de R$ 72.500,00 e custo final ao consumidor de R$ 92.800,00.</p>

    <p> <?php echo ("Valor imposto: " . $valorImposto1) ?> </p>
    <p> <?php echo ("Valor final: " . $valorImposto2) ?> </p>

</body>

</html>