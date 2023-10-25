<?php
include_once("autoload.php");
?>

<head>
    <?php include_once('head.php'); ?>
</head>

<body>
    <?php include_once('menu.php'); ?>
    <p class="light-blue-text text-darken-2">Exercício 2</p>

    <?php
    // Variáveis de entrada
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    $contador = 2;
    $entrada = 233;
    $resultado = 0;
    $pertence = false;

    // Cálculo Fibonacci
    while ($resultado < $entrada) {
        $fibonacci[$contador] = $fibonacci[$contador - 1] + $fibonacci[$contador - 2];
        $resultado = $fibonacci[$contador];
        $contador = $contador + 1;
    }

    // Resultado
    for ($i = 0; $i < $contador; $i++) {
        if ($entrada == $fibonacci[$i]) {
            $pertence = true;
        };
    }
    echo ("O número de entrada: " . $entrada . " " . ($pertence ? "pertence" : "não pertence") . " a sequência Fibonacci<br>")
    ?>
</body>