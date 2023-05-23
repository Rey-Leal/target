<?php

class Arquivos
{
    // Efetua leitura de arquivo Json
    public function leituraJson($arquivo)
    {
        try {
            $var = new Variaveis();
            $caminho = $var->diretorioSistema() . $arquivo;

            if (file_exists($caminho)) {
                $json = file_get_contents($caminho);
                $data = json_decode($json);                
                return $data;                
            } else {
                echo ("Arquivo não encontrado!" . "<br>");
            }
        } catch (Exception $e) {
            die("Erro: " . $e->getMessage() . "<br>");
        }
    }
}
