<?php
include_once("autoload.php");
?>

<head>
    <?php include_once('head.php'); ?>
</head>

<body>
    <div class="center">
        <?php include_once('menu.php'); ?>
        <p class="light-blue-text text-darken-2">Exercício 5</p>

        <?php
        // Variáveis de entrada        
        $entrada = "Testes Target Sistemas";
        $saida = "";

        // Cálculo
        $letras = str_split($entrada);
        $tamanhoArray = count($letras) - 1;
        for ($i = $tamanhoArray; $i >= 0; $i--) {
            $saida = $saida . $letras[$i];
        }

        // Resultado
        echo ("Entrada: " . $entrada . "<br>");
        echo ("Saída: " . $saida . "<br>");
        ?>
    </div>
</body>