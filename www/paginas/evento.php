<?php
    $id = $_GET['id'];
    $query = $bd->query("select * from evento where id_evento = $id");
    $evento = $query->fetch_array();
    
    $query = $bd->query("select * from evento_fotos where evento_id_evento = $id");
    

?>

<div class="single">
    <div class="container">
        <div class="single-page-artical">
            <div class="artical-content col-md-12">
                <h3><?php echo $evento['titulo'];?></h3>
                <p><?php echo $evento['descricao'];?></p>
                
                <div class="album col-md-12">
                <?php
                    while($foto = $query->fetch_array()){
                ?>
                <div class="evento-foto col-md-3">
                    <a class="example-image-link" href="./arquivos/eventos/<?php echo $foto['caminho']?>" data-lightbox="example-set" title="<?php echo $foto['titulo']?>">
                        <img class="example-image" src="./arquivos/eventos/<?php echo $foto['caminho']?>" alt="<?php echo $foto['titulo']?>" title="<?php echo $foto['titulo']?>" width="120" />
                    </a>
                </div>
                <?php
                    }
                
                ?>
                </div>
            </div>             
        </div>
    </div>
</div>