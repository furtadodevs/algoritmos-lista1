<?php
/*A lanchonete Gostosura vende sanduíches com duas fatias de queijo, uma fatia
de presunto e uma rodela de hambúrguer. Cada fatia de queijo ou presunto pesa
50 gramas, e cada hambúrguer pesa 100 gramas. Faça um algoritmo que leia a
quantidade de sanduíches e informe, em quilos, quanto será necessário comprar
de queijo, presunto e carne.
Resultado esperado: para 10 sanduíches, serão necessários 1 kg de queijo, 0,5
kg de presunto e 1 kg de carne.
*/

// Entradas - Váriaveis
$qtdPresunto = 0.050;
$qtdQueijo = 0.050;
$qtdHambuguer = 0.100;
$qtdSanduiche = 10;

// Processamento
$quiloPresunto = $qtdPresunto * $qtdSanduiche;
$quiloQueijo = $qtdQueijo * 2 * $qtdSanduiche;
$quiloHambuguer = $qtdHambuguer * $qtdSanduiche;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 25</title>
</head>

<body>

    <h3>Atividade 25</h3

        <p>A lanchonete Gostosura vende sanduíches com duas fatias de queijo, uma fatia
    de presunto e uma rodela de hambúrguer. Cada fatia de queijo ou presunto pesa
    50 gramas, e cada hambúrguer pesa 100 gramas. Faça um algoritmo que leia a
    quantidade de sanduíches e informe, em quilos, quanto será necessário comprar
    de queijo, presunto e carne.
    Resultado esperado: para 10 sanduíches, serão necessários 1 kg de queijo, 0,5
    kg de presunto e 1 kg de carne.

    </p>

    <p> <?php echo ("Quantidade presunto: " . $quiloPresunto) ?> </p>
    <p> <?php echo ("Quantidade queijo: " . $quiloQueijo) ?> </p>
    <p> <?php echo ("Quantidade Hambuguer: " . $quiloHambuguer) ?> </p>

</body>

</html>