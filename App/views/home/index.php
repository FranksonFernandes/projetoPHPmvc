<?php foreach ($data as $note){ ?>

    <h1> <a href="/notes/ver/<?php echo $note['ID']; ?>"> <?php echo $note['ID'].' - '.$note['TITULO']; ?> </a> </h1>
    <!--<p> <?php //echo $note['TEXTO']; ?> </p><br>-->


<?php } ?>    