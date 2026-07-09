<?php
/*Escreva um algoritmo que leia o nome de um vendedor, seu salário fixo e o total
de vendas efetuadas no mês. Sabendo que ele ganha 15% de comissão sobre as
vendas, informe o nome, o salário fixo e o salário final do mês.
Resultado esperado: João, com salário fixo de R$ 1.500,00 e vendas de R$
4.000,00, receberá comissão de R$ 600,00 e salário final de R$ 2.100,00.*/

// Entradas - Váriaveis
$salario = 1500.00;
$comissao = 600.00;

// Processamento
$valorFinal = $salario + $comissao;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 18</title>
</head>

<body>

    <h3>Atividade 18</h3

        <p>Escreva um algoritmo que leia o nome de um vendedor, seu salário fixo e o total
    de vendas efetuadas no mês. Sabendo que ele ganha 15% de comissão sobre as
    vendas, informe o nome, o salário fixo e o salário final do mês.
    Resultado esperado: João, com salário fixo de R$ 1.500,00 e vendas de R$
    4.000,00, receberá comissão de R$ 600,00 e salário final de R$ 2.100,00.
    </p>

    <p> <?php echo ("Valor final: " . $valorFinal) ?> </p>

</body>

</html>