<h1> Cadastrar conhecimento </h1>

<?php

if(!empty($data['mensagem'])){
    foreach($data['mensagem'] as $m){
        echo $m."<br>";
    }
}

?>

<form action="/notes/criar" method="post">
    Título: <input type="text" name="titulo"> <br><br>
    Solução: <textarea name="texto"> </textarea> <br>
    <button name="salvar"> Salvar </button>
</form>