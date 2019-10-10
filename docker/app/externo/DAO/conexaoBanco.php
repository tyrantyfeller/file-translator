<?php

class conexaoBanco {
    private $db = 'trabalho';
    private $banco = 'localhost';
    private $user = 'root';
    private $pass = '123.456';

    private $conexao;
    public $stSQL;
    public $stTable;

    public function __construct($table) {
        $this->conexao = $this->conectar();
        $this->stTable = $table;
        $this->user = $_ENV['MYSQL_USER'];
        $this->pass = $_ENV['MYSQL_PASS'];
    }

    private function conectar() {
        $conexao = new PDO("mysql:host=mysql;dbname=file_translator", $this->user, $this->pass);
        return $conexao;
    }

    private function executeQuery($sql = null) {
        if ($sql) {
            $this->stSQL = $sql;
        }

        #return $this->stSQL;
        $statement = $this->conexao->prepare($this->stSQL);
        $statement->execute();
        $posts = $statement->fetchAll(PDO::FETCH_OBJ);
        return $posts;
    }

    public function buildSelect($where, $coluns = null) {
        $this->stSQL = "SELECT ";

        if ($coluns) {
            $this->stSQL .= $this->getColuns($coluns);
        } else {
            $this->stSQL .= "*";
        }
        $this->stSQL .= " FROM {$this->stTable}";

        if ($where) {
            $this->stSQL .= ' WHERE '. $where;
        }

        return $this->executeQuery();
    }

    public function buildUpdate($where, $setValues = array()) {
        $this->stSQL = "UPDATE {$this->stTable} SET ";
        $this->stSQL .= $setValues;
        $this->stSQL .= " WHERE ";
        $this->stSQL .= $where;

        return $this->executeQuery();
    }

    public function buildDelete($where = array()) {
        return $this->executeQuery();
    }

    public function buildInsert() {
        $this->stSQL = '';
        

        return $this->executeQuery();
    }

    private function getWhere($where = array()) {
        if (!is_array($where)) {
            $where = array($where);
        }

        $stWhere = '';
        $and = false;

        foreach ($where as $key => $value) {
            $stWhere .= ($and ? ' AND ' : '');
            if (is_string($value)) {
                $stWhere .= " {$key} = '{$value}'";
            } else {
                $stWhere .= " {$key} = {$value}";
            }
            if (!$and) {
                $and = true;
            }
        }
        return $stWhere;
    }

    private function getColuns($coluns = array()) {
        if (!is_array($coluns)) {
            $coluns = array($coluns);
        }

        $stColuns = '';
        $coma = false;
        foreach ($coluns as $value) {
            $stColuns .= ($coma ? ', ' : '');

            $stColuns .= " {$value} ";
            if (!$coma) {
                $coma = true;
            }
        }
        return $stColuns;
    }
}
