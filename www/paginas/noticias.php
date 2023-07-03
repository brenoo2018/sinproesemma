<div class="single">
  <div class="container">
    <div class="lista-noticias col-md-12">
        <h3>Notícias do SINPROESEMMA - Barra do Corda</h3>
        <ul class="col-md-7">
            
            
<?php
    $pg = 0;
    $pag = 0;
    if(isset($_GET['pg'])){
        $pg = $_GET['pg'];
        $pag = 10 * $pg - 10;
    }
    $query = $bd->query("select * from noticia order by data desc limit $pag,10");
    while($noticia = $query->fetch_array()){
?>

            <li class="li-noticias">
              <?php
                  echo "<span>Postado em: ".convert_data($noticia['data'])."</span>";     
                  if($noticia['imagem'] != ""){
                      echo "<img class='img-responsive col-md-3' src='arquivos/noticias/$noticia[imagem]' alt=' ' />";
                  }else{
                      echo "<img class='img-responsive col-md-3' src='images/mascote.png' alt=' ' />";
                  }
                  echo "<a href='?pagina=noticia&id=".$noticia['id_noticia']."' class='col-md-10 li-noticias-titulo'>".$noticia['titulo']."</a>";
                  echo "<p>".resumir($noticia['texto'])."...<a href='?pagina=noticia&id=".$noticia['id_noticia']."'>Continue lendo</a></p>";
                  
                    
                ?>
            </li>

<?php
    }
?>
        </ul>
        <div class="col-md-1">
        </div>
        <div class="col-md-4">
            <div class="box-publicidade">
                <a href=""><h1>Conheça nossa sede recreativa</h1></a>
            </div>
            <br>
            <?php    
                require "includes/enquete.php";
            ?>
        </div>
        
</div>
        <ul class="pagination">
            <?php
              if($pg > 1){
            ?>
                <li><a href="?pagina=noticias&pg=<?php echo $pg-1?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <?php
            }
            ?>
            <?php
                $query = $bd->query("select * from noticia order by data desc");
                $paginas = ceil($query->num_rows/10);

                for($i = 1; $i <= $paginas; $i++){
                   echo "<li><a href='?pagina=noticias&pg=$i'>$i</a></li>";
                }
                if($pg < $paginas){
            ?>
			     <li><a href="?pagina=noticias&pg=<?php echo $pg+1?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
            <?php
                }
            ?>
        </ul>


</div>
</div>
