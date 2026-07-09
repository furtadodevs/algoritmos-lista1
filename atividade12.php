<?php
/*Desenvolva um algoritmo que leia 4 notas e calcule a média, apresentando o
resultado na tela. (Pesquise a fórmula)
Resultado esperado: as notas 7, 8, 6 e 9 resultam em média 7,5.*/

// Entradas - Variáveis
$numero1 = 7;
$numero2 = 8;
$numero3 = 6;
$numero4 = 9;

// Processamento
$soma = $numero1 + $numero2 + $numero3 + $numero4;
$media = $soma / 4;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 12</title>
</head>

<body>

    <h3>Atividade 12</h3>

    <p>Desenvolva um algoritmo que leia 4 notas e calcule a média, apresentando o
        resultado na tela. (Pesquise a fórmula)
        Resultado esperado: as notas 7, 8, 6 e 9 resultam em média 7,5.</p>

    <p> <?php echo ("Média: " . $media) ?></p>

</body>

</html>