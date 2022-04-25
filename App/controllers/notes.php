<?php

use \App\Core\Controller;

class Notes extends Controller{

    public function ver($id =''){
        $note = $this->model('Note');
        $dados = $note->findId($id);

        $this->view('notes/ver', $dados);
    }

    public function criar(){

        $mensagem = array();

        if(isset($_POST['salvar'])){

            $note = $this->model('Note');
            $note->titulo = $_POST['titulo'];
            $note->texto = $_POST['texto'];
            $mensagem[] = $note->save();

        }

        $this->view('notes/criar', $dados = ['mensagem'=> $mensagem]);

    }

    public function excluir($id = ''){
        $mensagem = array();
        $note = $this->model('Note');
        $mensagem[] = $note->delete($id);
        $dados = $note->getAll(); //Recupera lista de dados pós exclusão
        $this->view('home/index', $dados = ['registros'=> $dados, 'mensagem'=> $mensagem]);

    }

}