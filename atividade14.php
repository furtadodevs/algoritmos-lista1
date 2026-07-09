<?php
/*Faça um algoritmo que receba o valor de um produto, calcule um desconto de
9,5% e apresente o novo valor com desconto.
Resultado esperado: um produto de R$ 200,00 com desconto de 9,5% terá
desconto de R$ 19,00 e valor final de R$ 181,00.*/

// Entradas - Váriaveis
$produto = 200;

// Processamento
$desconto = $produto * 9.5/100;
$valorFinal = $produto - $desconto;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 14</title>
</head>

<body>

    <h3>Atividade 14</h3

        <p>Faça um algoritmo que receba o valor de um produto, calcule um desconto de
    9,5% e apresente o novo valor com desconto.
    Resultado esperado: um produto de R$ 200,00 com desconto de 9,5% terá
    desconto de R$ 19,00 e valor final de R$ 181,00.</p>

    <p> <?php echo ("Desconto: " . $desconto) ?> </p>
    <p> <?php echo ("Valor final: " . $valorFinal) ?> </p>

</body>

</html>