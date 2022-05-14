<?php

namespace App;

use App\Core\Model;

class Auth{

    public static function Login($email, $senha){
        $sql = "SELECT * FROM USER WHERE EMAIL = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();

        //Verifica se email foi encontrado na base
        if($stmt->rowCount() >=1){
           $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
             //Valida senha   
            if(password_verify($senha, $resultado['SENHA'])){
                $_SESSION['logado'] = true;
                $_SESSION['userId'] = $resultado['ID'];
                $_SESSION['userName'] = $resultado['NOME'];
                header('location: /home/index');
            }

            else{
                return "Senha inválida";
            }

        }

        else{
            return "E-mail inválido";
            
        }

    }

// Ao deslogar usuário vai para a página de Login
    public static function Logout(){

        session_destroy();
        header('location: /home/login');

    }

    //Se usuário não estiver logado é redirecionado para página de Login
    public static function checkLogin(){

        if(!isset($_SESSION['logado'])){
            header('location: /home/login');

        }
    }

}