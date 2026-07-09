<?php
/*Uma loja vende seus produtos em 5 prestações sem juros. Faça um algoritmo
que receba o nome e o valor de 3 produtos, calcule o valor total da compra e
mostre o valor de cada prestação.
Resultado esperado: uma compra com camiseta de R$ 50,00, calça de R$ 120,00
e tênis de R$ 230,00 terá total de R$ 400,00 e 5 prestações de R$ 80,00.*/

// Entradas - Váriaveis
$camiseta = 50;
$calça = 120;
$tenis = 230;

// Processamento
$soma = $camiseta + $calça + $tenis;
$valorParcelas = $soma / 5;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 13</title>
</head>

<body>

    <h3>Atividade 13</h3

        <p>Uma loja vende seus produtos em 5 prestações sem juros. Faça um algoritmo
    que receba o nome e o valor de 3 produtos, calcule o valor total da compra e
    mostre o valor de cada prestação.
    Resultado esperado: uma compra com camiseta de R$ 50,00, calça de R$ 120,00
    e tênis de R$ 230,00 terá total de R$ 400,00 e 5 prestações de R$ 80,00.</p>

    <p> <?php echo ("Soma dos produtos: " . $soma) ?> </p>
    <p> <?php echo ("Valor total de cada parcela: " . $valorParcelas) ?> </p>

</body>

</html>