<?php
require_once 'conexaoBanco.php';

class Empresa extends conexaoBanco{
    private $conexao;
    public function __construct() {
        $this->conexao = new conexaoBanco('empresas');
    }

    public function getEmpresas($where = array(), $coluns = array()){
        return $this->conexao->buildSelect($where, $coluns);
    }
}
