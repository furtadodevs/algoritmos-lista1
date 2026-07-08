<?php
/*Uma empresa de decoração cobra R$ 2.500,00 pelo serviço completo. O cliente
pagou uma entrada de R$ 1.000,00. Calcule quanto ainda falta pagar.
Resultado esperado: um serviço de R$ 2.500,00 com entrada de R$ 1.000,00
possui saldo de R$ 1.500,00.*/

// Entrada - variáveis
$decoracaoCompleta = 2500.00;
$entradaPagamento = 1000.00;

// Processamento
$saldoPagamento = $decoracaoCompleta - $entradaPagamento;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>

<body>

    <h3>Atividade 3</h3>

    <p>Uma empresa de decoração cobra R$ 2.500,00 pelo serviço completo. O cliente
        pagou uma entrada de R$ 1.000,00. Calcule quanto ainda falta pagar.
        Resultado esperado: um serviço de R$ 2.500,00 com entrada de R$ 1.000,00
        possui saldo de R$ 1.500,00.</p>

    <p> <?php echo ("Saldo a pagar: " . $saldoPagamento) ?></p>

</body>

</html>