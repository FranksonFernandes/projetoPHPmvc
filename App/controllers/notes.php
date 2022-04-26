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
       
        if(isset($_POST['salvar'])):  //verifica se o botão salvar foi clicado

            //Verificando se o campo titulo está vazio:
            if(empty($_POST['titulo'])):
                $mensagem[] = "Título não pode estar em branco!";
            
            //Verificando se o campo solução está vazio:    
            elseif(empty($_POST['texto'])):
                $mensagem[] = "Solução não pode estar em branco!";
            

            else:

                $note = $this->model('Note');
                $note->titulo = $_POST['titulo'];
                $note->texto = $_POST['texto'];
                $mensagem[] = $note->save();
                  
            endif;

        endif;
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