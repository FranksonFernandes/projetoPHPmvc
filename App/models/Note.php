<?php

use App\Core\Model;

class Note extends Model{

    public $titulo;
    public $texto;

    public function getAll(){

        $sql  = "SELECT * FROM NOTES";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->execute();

        //Verifica se há dados:
        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
        //Se não houver dados retorna array vazio    
        else{
            return [];
            }    
        
    }

 public function findId($id){

    $sql  = "SELECT * FROM NOTES WHERE ID = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        //Verifica se há dados:
        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $resultado;
        }

        else{
            return [];
            } 

    }   

    public function save(){

        $sql = "INSERT INTO notes (TITULO, TEXTO) VALUES (?,?)";
        $stmt = Model::getConn()->prepare($sql); 
        $stmt->bindValue(1, $this->titulo); 
        $stmt->bindValue(2, $this->texto);

        if($stmt->execute()){
            return "Cadastrado com sucesso!";
        }

        else{
            return "Erro ao cadastrar!";
        }
    } 

}