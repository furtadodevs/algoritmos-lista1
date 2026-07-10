<?php
/*Faça um algoritmo que receba o peso e a altura de uma pessoa e calcule o
índice de massa corpórea. O IMC é calculado dividindo o peso, em quilos, pelo
quadrado da altura, em metros. (Pesquise a fórmula)
Resultado esperado: uma pessoa com 70 kg e 1,75 m terá IMC aproximado de
22,86.*/

// Entradas - Váriaveis
$valorKilo = 70;
$altura = 1.75;

// Processamento
$valorAltura = $altura ** 2;
$valorImc = $valorKilo / $valorAltura;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 26</title>
</head>

<body>

    <h3>Atividade 26</h3

        <p>Faça um algoritmo que receba o peso e a altura de uma pessoa e calcule o
    índice de massa corpórea. O IMC é calculado dividindo o peso, em quilos, pelo
    quadrado da altura, em metros. (Pesquise a fórmula)
    Resultado esperado: uma pessoa com 70 kg e 1,75 m terá IMC aproximado de
    22,86.
    </p>

    <p> <?php echo ("Valor final IMC: " . $valorImc) ?> </p>

</body>

</html>