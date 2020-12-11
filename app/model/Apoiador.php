<?php

require_once('Database.php');

class Apoiador {

    function __construct() {
        $this->pdo = Database::conexao();
    }


    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }

    public function getTotalApoiadores(){
        try{
            $stmt = $this->pdo->prepare("SELECT COUNT(*) as total FROM apoiador WHERE ativo = 1;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_CLASS);
            return $result;
        } catch (PDOException $exc) {
            echo get_class($this).": {$exc->getMessage()}";
        }
    }

}