<div class="single">
    <div class="container">
        <div class="single-page-artical">
            <div class="artical-content col-md-12">
                <h3>Eventos realizados pelo SINPROESEMMA - Barra do Corda</h3>
                    <ul class="lista-eventos col-md-7">
                        <?php
                            $query = $bd->query("select * from evento order by data desc");
                            while($event = $query->fetch_array()){
                                $query_foto = $bd->query("select * from evento_fotos where evento_id_evento = $event[id_evento]");
                                $foto = $query_foto->fetch_array();
                                echo "<li class='col-md-5'><a href='?pagina=evento&id=".$event['id_evento']."'> <img src='arquivos/eventos/".$foto['caminho']."'> <span>".$event['titulo']."</span></a></li>";
                            }
                        ?>
                    </ul>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-4">
                        <?php
                            require "includes/mais-noticias.php";                        
                        ?>
                    </div>
            </div>
        </div>
    </div>
</div>
        