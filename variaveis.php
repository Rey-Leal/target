<?php

// VARIAVEIS GLOBAIS
global $idClienteAtual;

class Variaveis
{
    private $_nomeSistema;
    private $_nomeProjeto;
    private $_versaoMaster;
    private $_versaoDados;
    private $_versaoCodigo;

    function __construct()
    {
        $this->_nomeSistema = "Target";
        $this->_nomeProjeto = "target";
        $this->_versaoMaster = "01";
        $this->_versaoDados = "00";
        $this->_versaoCodigo = "00";
    }

    // Diretorio raiz do sistema
    public function diretorioSistema()
    {
        $diretorio = realpath(dirname(__DIR__) . "/" . $this->_nomeProjeto . "/");
        return $diretorio;
    }
    // Nome do sistema
    public function nomeSistema()
    {
        return $this->_nomeSistema;
    }
    // Versao do sistema
    public function versaoSistema()
    {
        // VS = VM.VD.VC
        $versao = $this->_versaoMaster . "." .  str_pad($this->_versaoDados, 2, '0', STR_PAD_LEFT) . "." .  str_pad($this->_versaoCodigo, 2, '0', STR_PAD_LEFT);
        return $versao;
    }
    // VM
    public function versaoMaster()
    {
        return $this->_versaoMaster;
    }
    // VD
    public function versaoDados()
    {
        return $this->_versaoDados;
    }
    // VC
    public function versaoCodigo()
    {
        return $this->_versaoCodigo;
    }
}
