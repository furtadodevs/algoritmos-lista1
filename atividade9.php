<?php
/*Uma empresa de eventos oferece um bônus de 5% sobre o valor arrecadado para
o gerente responsável. O evento arrecadou R$ 42.000,00. Calcule o valor do
bônus.
Resultado esperado: 5% de R$ 42.000,00 correspondem a um bônus de
R$ 2.100,00.*/

// Entradas - Variáveis
$valorArrecadado = 42000.00;

// Processamento
$bonus = $valorArrecadado * 5 / 100;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 9</title>
</head>

<body>

    <h3>Atividade 9</h3>

    <p>Uma empresa de eventos oferece um bônus de 5% sobre o valor arrecadado para
        o gerente responsável. O evento arrecadou R$ 42.000,00. Calcule o valor do
        bônus.
        Resultado esperado: 5% de R$ 42.000,00 correspondem a um bônus de
        R$ 2.100,00.</p>

    <p> <?php echo ("Bônus: " . $bonus) ?> </p>

</body>

</html>