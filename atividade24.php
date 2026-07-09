<?php
/*O restaurante a quilo Bem-Bão cobra R$ 12,00 por cada quilo de refeição.
Escreva um algoritmo que leia o peso do prato montado pelo cliente, em quilos, e
imprima o valor a pagar. Considere que a balança já desconta o peso do prato.
Resultado esperado: um prato com 0,750 kg custará R$ 9,00.*/

// Entradas - Váriaveis
$valorQuilo = 12;
$qtdPrato = 0.750;

// Processamento
$valorFinal = $valorQuilo * $qtdPrato;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 24</title>
</head>

<body>

    <h3>Atividade 24</h3

        <p>O restaurante a quilo Bem-Bão cobra R$ 12,00 por cada quilo de refeição.
    Escreva um algoritmo que leia o peso do prato montado pelo cliente, em quilos, e
    imprima o valor a pagar. Considere que a balança já desconta o peso do prato.
    Resultado esperado: um prato com 0,750 kg custará R$ 9,00.
    </p>

    <p> <?php echo ("Valor final: " . $valorFinal) ?> </p>

</body>

</html>