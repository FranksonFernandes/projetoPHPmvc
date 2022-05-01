<!-- Retorno mensagem de exclusao -->
<br>
<?php

if(!empty($data['mensagem'])){
    foreach($data['mensagem'] as $m){
        echo $m."<br>";
    }
}
?>
<!-- Fim Retorno mensagem de exclusao -->


<?php foreach ($data['registros'] as $note){ ?>

    <h1> <a href="/notes/ver/<?php echo $note['ID']; ?>"> <?php echo $note['ID'].' - '.$note['TITULO']; ?> </h1><p>
    </a> <a href="/notes/editar/<?php echo $note['ID']; ?>">Editar</a> |
    </a> <a href="/notes/excluir/<?php echo $note['ID']; ?>">Excluir</a> 


    

<?php } ?>    