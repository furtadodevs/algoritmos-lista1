<?php
/*A padaria Hotpão vende pães franceses e broas todos os dias. Cada pãozinho
custa R$ 0,12 e cada broa custa R$ 1,50. Faça um algoritmo que leia a
quantidade de pães e broas vendidas, calcule o total arrecadado e quanto deverá
ser guardado na poupança, considerando 10% do total.
Resultado esperado: com 100 pães e 20 broas vendidas, o total arrecadado será
R$ 42,00 e o valor guardado na poupança será R$ 4,20.*/

// Entradas - Váriaveis
$pao = 0.12;
$broa = 1.50;
$qtdPao = 100;
$qtdBroa = 20;

// Processamento
$compraPao = $pao * $qtdPao;
$compraBroa = $broa * $qtdBroa;
$valorCompra = $compraPao + $compraBroa;
$valorPoupanca = $valorCompra * 10/100; 

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 22</title>
</head>

<body>

    <h3>Atividade 22</h3

        <p>A padaria Hotpão vende pães franceses e broas todos os dias. Cada pãozinho
    custa R$ 0,12 e cada broa custa R$ 1,50. Faça um algoritmo que leia a
    quantidade de pães e broas vendidas, calcule o total arrecadado e quanto deverá
    ser guardado na poupança, considerando 10% do total.
    Resultado esperado: com 100 pães e 20 broas vendidas, o total arrecadado será
    R$ 42,00 e o valor guardado na poupança será R$ 4,20.
    </p>

    <p> <?php echo ("Valor da compra: " . $valorCompra) ?> </p>
    <p> <?php echo ("Valor da poupança: " . $valorPoupanca) ?> </p>

</body>

</html>