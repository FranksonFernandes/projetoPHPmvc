<?php

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
            echo 'clicou';
        }

        $this->view('home/login', $dados = ['mensagem' => $mensagem]);
    }

}