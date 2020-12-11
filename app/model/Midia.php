<?php

require_once('Database.php');

class Midia {

    function __construct() {
        $this->pdo = Database::conexao();
    }

    public $id_midia;
    public $nome;
    public $caminho;
    public $tipo_midia;
    public $id_texto;
    public $titulo;
    public $texto;
    public $data;
    public $id_usuario;


    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }

  
    public function getBanners(){
        try{
            $stmt = $this->pdo->prepare("SELECT * FROM midia WHERE midia = 1 and ativo = 1;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_CLASS);
            return $result;
        } catch (PDOException $exc) {
            echo get_class($this).": {$exc->getMessage()}";
        }
    }

    public function getInfoProjeto(){
        try{
            $stmt = $this->pdo->prepare("SELECT * FROM sobre WHERE ativo = 1;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_CLASS);
            return $result;
        } catch (PDOException $exc) {
            echo get_class($this).": {$exc->getMessage()}";
        }
    }

}