

<h1> Cadastrar Usuário </h1>

<?php

if(!empty($data['mensagem'])){
    foreach($data['mensagem'] as $m){
        echo $m."<br>";
    }
}
?>

<form action="/users/cadastrar" method="post">
    Nome:   <input type="text" name="nome"> <br>
    E-mail: <input type="text" name="email"> <br>
    Senha:  <input type="password" name="senha"> <br> <br>
    <button name="salvar"> Salvar </button>
</form>