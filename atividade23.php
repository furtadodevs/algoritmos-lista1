<?php
/*Um motorista deseja colocar uma determinada quantidade de reais de gasolina
no tanque. Escreva um algoritmo para ler o preço do litro da gasolina e o valor do
pagamento, exibindo quantos litros ele conseguiu colocar no tanque.
Resultado esperado: com R$ 100,00 e gasolina a R$ 5,00 o litro, o motorista
conseguirá colocar 20 litros.*/

// Entradas - Váriaveis
$valorGasto = 100;
$valorGasolina = 5;
$litro = 20;

// Processamento
$qtdGasolina = $valorGasto / $valorGasolina;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 23</title>
</head>

<body>

    <h3>Atividade 23</h3

        <p>Um motorista deseja colocar uma determinada quantidade de reais de gasolina
    no tanque. Escreva um algoritmo para ler o preço do litro da gasolina e o valor do
    pagamento, exibindo quantos litros ele conseguiu colocar no tanque.
    Resultado esperado: com R$ 100,00 e gasolina a R$ 5,00 o litro, o motorista
    conseguirá colocar 20 litros.
    </p>

    <p> <?php echo ("Quantidade de litro: " . $qtdGasolina) ?> </p>

</body>

</html>