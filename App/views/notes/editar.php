<h1> Atualizando Procedimento</h1>

<?php

if(!empty($data['mensagem'])){
    foreach($data['mensagem'] as $m){
        echo $m."<br>";
    }
}
?>



<form action="/notes/editar/<?php echo $data['registros']['ID']; ?>" method="post">

    Título: <input type="text" name="titulo" value="<?php echo $data['registros']['TITULO']; ?>"> <br><br>
    Solução: <textarea name="texto"><?php echo $data['registros']['TEXTO']; ?></textarea> <br>
    <button name="atualizar"> Atualizar </button>

</form>



