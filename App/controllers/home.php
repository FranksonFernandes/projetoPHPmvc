<?php

use App\Auth;
use \App\Core\Controller;


class Home extends Controller{

    public function index($nome =''){
        $note = $this->model('Note');
        $dados = $note->getAll();

        $this->view('home/index', $dados = ['registros' => $dados]);
    }

    public function login() {

        $mensagem = array();

        if(isset($_POST['entrar'])){
            if((empty($_POST['email'])) or (empty($_POST['senha']))){
                $mensagem[] = "Campo e-mail e senha são obrigatórios!";
            }

            else{
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $mensagem[] = Auth::Login($email, $senha);
            }
           
        }

        $this->view('home/login', $dados = ['mensagem' => $mensagem]);
    }

}