<?php

class CriadorTabela {
    private $dados;
    private $colunas;

    public function __construct($colunas) {
        
    }
    private function montaCabecalho() {
        $head = "";
        foreach($this->colunas as $key => $value) {
            $head .= "<th>{$value}</th>";
        }
        return $head;
    }

    private function arrayToTable() {
        $body = "";
        foreach ($this->dados as $dataValue) {
            $body .= "<tr>";
            foreach($this->colunas as $colKey => $colValue) {
                $body .= "<td>{$dataValue[$colKey]}</td>";
            }
            $body .= "</tr>";
        }
        return $body;
    }

    public function gerarTabela($colunas, $dados) {
        
    }
}