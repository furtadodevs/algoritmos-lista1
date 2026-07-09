<?php
/*Faça um algoritmo que receba o ano de nascimento de uma pessoa, calcule e
mostre a idade atual dessa pessoa e quantos anos ela terá em 2028.
Resultado esperado: uma pessoa nascida em 2000 terá 26 anos em 2026 e 28
anos em 2028.*/

// Entradas - Váriaveis
$anoNascimento = 2000;
$anoAtual1 = 2026;
$anoAtual2 = 2028;

// Processamento
$calculo1 = $anoAtual1 - $anoNascimento;
$calculo2 = $anoAtual2 - $anoNascimento;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 19</title>
</head>

<body>

    <h3>Atividade 19</h3

        <p>Faça um algoritmo que receba o ano de nascimento de uma pessoa, calcule e
    mostre a idade atual dessa pessoa e quantos anos ela terá em 2028.
    Resultado esperado: uma pessoa nascida em 2000 terá 26 anos em 2026 e 28
    anos em 2028.
    </p>

    <p> <?php echo ("Idade final: " . $calculo1) ?> </p>
    <p> <?php echo ("Idade final: " . $calculo2) ?> </p>

</body>

</html>