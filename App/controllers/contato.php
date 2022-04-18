<?php

    class Contato {


        public function index(){
           
        }

        public function email($nome = '', $email = ''){
            echo $nome."<br>".$email;
            
        }

        public function telefone(){
            echo '27 3233-9875';
        }

    }