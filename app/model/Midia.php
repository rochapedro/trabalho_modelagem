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

    public function getApoiador(){
        try{
            $stmt = $this->pdo->prepare("SELECT * FROM apoiador WHERE ativo = 1;");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_CLASS);
            return $result;
        } catch (PDOException $exc) {
            echo get_class($this).": {$exc->getMessage()}";
        }
    }

    public function getFeedbacks(){
        try{
            $stmt = $this->pdo->prepare("SELECT u.nome, u.sobrenome, m.caminho, f.feedback FROM usuario as u JOIN feedback as f ON u.id_usuario = f.id_usuario JOIN midia as m ON u.id_midia = m.id_midia WHERE f.ativo = 1 ORDER BY RAND();");
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_CLASS);
            return $result;
        } catch (PDOException $exc) {
            echo get_class($this).": {$exc->getMessage()}";
        }
    }

}