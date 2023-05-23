<?php
include_once("autoload.php");
?>

<head>
    <?php include_once('head.php'); ?>
</head>

<body>
    <div class="center">
        <?php include_once('menu.php'); ?>
        <p class="light-blue-text text-darken-2">Exercício 4</p>

        <?php
        // Variáveis de entrada        
        $faturamentos = array(
            array("uf" => "SP", "valor" => 67836.43),
            array("uf" => "RJ", "valor" => 36678.66),
            array("uf" => "MG", "valor" => 29229.88),
            array("uf" => "ES", "valor" => 27165.48),
            array("uf" => "OUTROS", "valor" => 19849.53)
        );

        // Cálculo
        $valores = array_column($faturamentos, "valor");
        $total = array_sum($valores);
        ?>

        <p>Percentual por representação:</p>

        <?php
        foreach ($faturamentos as $faturamento) {
            $calculoRepresentacao = $faturamento['valor'] * 100 / $total;
            // Resultado
            echo ($faturamento['uf'] . ": " . $calculoRepresentacao . "%<br>");
        }
        ?>
    </div>
</body>