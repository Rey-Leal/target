<?php
include_once("autoload.php");
?>

<head>
    <?php include_once('head.php'); ?>
</head>

<body>
    <div class="center">
        <?php include_once('menu.php'); ?>
        <p class="light-blue-text text-darken-2">Exercício 1</p>

        <?php
        // Variáveis de entrada
        $indice = 13;
        $soma = 0;
        $k = 0;

        // Cálculo
        while ($k < $indice) {
            $k = $k + 1;
            $soma = $soma + $k;
        }

        // Resultado
        echo ("O resultado da variável SOMA é: " . $soma . "<br>")
        ?>
    </div>
</body>