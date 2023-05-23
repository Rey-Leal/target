<?php
spl_autoload_register(function ($className) {

    include_once("variaveis.php");
    $var = new Variaveis();

    $arquivo = $var->diretorioSistema() . "/" . $className . '.php';    

    if (file_exists($arquivo)) {
        include_once($arquivo);
    }
});
