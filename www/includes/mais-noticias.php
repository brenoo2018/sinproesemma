<?php
    $query = $bd->query("select * from noticia order by data desc limit 7, 10");    
?>

<div class="mais-noticias">
    <h2>Mais notícias</h2>
    <ul>
    <?php
        while($noticia = $query->fetch_array()){
            echo "<li><a href='?pagina=noticia&id=".$noticia['id_noticia']."'>".$noticia['titulo']."</a></li>";    
        }
    ?>    
    </ul>
</div>