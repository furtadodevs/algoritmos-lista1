<?php
/*Uma empresa oferece 10% de desconto para pagamento à vista. Um serviço
custa R$ 4.500,00. Calcule o valor do desconto e o valor final.
Resultado esperado: um desconto de 10% sobre R$ 4.500,00 corresponde a R$
450,00, totalizando R$ 4.050,00.*/

// Entradas - Variáveis
$serviço = 4500.00;

// Processamento
$descontoVista = $serviço * 10/100;
$valorFinal = $serviço - $descontoVista

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    
<h3> Atividade 5 </h3>

<p>Uma empresa oferece 10% de desconto para pagamento à vista. Um serviço
custa R$ 4.500,00. Calcule o valor do desconto e o valor final.
Resultado esperado: um desconto de 10% sobre R$ 4.500,00 corresponde a R$
450,00, totalizando R$ 4.050,00.</p>

<p> <?php echo ("Valor final: " . $valorFinal) ?> </p>

</body>
</html>