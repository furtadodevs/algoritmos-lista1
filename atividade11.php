<?php 
/*Desenvolva um algoritmo capaz de ler os dois lados de um retângulo e calcular
sua área, apresentando o resultado na tela. (Pesquise a fórmula)
Resultado esperado: um retângulo com lados 8 e 5 terá área igual a 40.*/

// Entradas - Variáveis
$lado1 = 8;
$lado2 = 5;

// Processamento
$area = $lado1 * $lado2;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 11</title>
</head>
<body>

<h3>Atividade 11</h3>

<p>Desenvolva um algoritmo capaz de ler os dois lados de um retângulo e calcular
sua área, apresentando o resultado na tela. (Pesquise a fórmula)
Resultado esperado: um retângulo com lados 8 e 5 terá área igual a 40.</p>

<p> <?php echo ("Área: " . $area) ?> </p>

</body>
</html>