<?php
include_once("autoload.php");
?>

<head>
    <?php include_once('head.php'); ?>
</head>

<body>
    <div class="center">
        <?php include_once('menu.php'); ?>
        <p class="light-blue-text text-darken-2">Exercício 3</p>

        <?php
        // Variáveis de entrada        
        $json = "/arquivo/dados.json";
        $arq = new Arquivos();
        $menorValor = 0;
        $maiorValor = 0;
        $mediaMensal = 0;
        $diasComArrecadacao = 0;

        $array = $arq->leituraJson($json);
        $tamanhoArray = count($array);

        $valores = array_column($array, "valor");

        $menorValor = min($valores);
        $maiorValor = max($valores);
        $somaArrecadacao = array_sum($valores);

        // Cálculo        
        for ($i = 0; $i < $tamanhoArray; $i++) {
            if ($array[$i]->valor > 0) {
                $diasComArrecadacao = $diasComArrecadacao + 1;
            }
        }
        $mediaMensal = $somaArrecadacao / $diasComArrecadacao;

        // Resultado
        echo ("A - Menor valor: " . $menorValor . "<br>");
        echo ("B - Maior valor: " . $maiorValor . "<br>");
        echo ("C - Média mensal: " . $mediaMensal . "<br>");
        ?>
    </div>
</body>