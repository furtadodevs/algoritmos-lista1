<?php
/*Um organizador recebeu R$ 18.000,00 para realizar um evento e gastou R$
12.750,00 com fornecedores. Calcule quanto dinheiro ainda restou.
Resultado esperado: após gastar R$ 12.750,00 de um orçamento de
R$ 18.000,00, restam R$ 5.250,00.
*/

// Entrada - Variáveis
$orcamentoTotal = 18000.00;
$fornecedoresValorTotal = 12750.00;

// Processamento
$saldoRestante = $orcamentoTotal - $fornecedoresValorTotal;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>

<body>

    <h3>Atividade 4</h3>

    <p>Um organizador recebeu R$ 18.000,00 para realizar um evento e gastou R$
        12.750,00 com fornecedores. Calcule quanto dinheiro ainda restou.
        Resultado esperado: após gastar R$ 12.750,00 de um orçamento de
        R$ 18.000,00, restam R$ 5.250,00.</p>

    <p> <?php echo ("Saldo restante: " . $saldoRestante) ?></p>
</body>

</html>