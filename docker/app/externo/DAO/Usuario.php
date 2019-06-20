<?php
require_once 'conexaoBanco.php';

class Usuario extends conexaoBanco{
    private $conexao;
    public function __construct() {
        $this->conexao = new conexaoBanco('usuarios');
    }

    public function getLogin($where = array(), $coluns = array()){
        return $this->conexao->buildSelect($where, $coluns);
    }
}