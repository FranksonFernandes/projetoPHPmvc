<?php

use \App\Core\Controller;
use \App\Auth;

class Users extends Controller{

    public function cadastrar(){

        $mensagem = array();

        Auth::checkLogin();

        if(isset($_POST['salvar'])){ //Verifica se o botão salvar foi clicado
            $nome = $_POST['nome'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
            $email = $_POST['email'];  

            $user = $this->model('User');
            $user->nome = $nome;
            $user->email = $email;
            $user->senha = $senha;

            $mensagem[] = $user->save();
        }

        $this->view('users/cadastrar', $dados = ['mensagem' => $mensagem]);

    }
}