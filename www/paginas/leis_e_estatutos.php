<?php
$pg = 0;
    $pag = 0;
    if(isset($_GET['pg'])){
        $pg = $_GET['pg'];
        $pag = 15 * $pg - 15;
    }
?>
<div class="single">
		<div class="container">
			<div class="single-page-artical">
				<div class="artical-content col-md-12">
                    <h3>Leis e estatutos</h3>                    
                        <ul class="leis col-md-9">
                        <?php
                            $query = $bd->query("select * from leis order by data desc limit $pag, 15");
                            while($leis = $query->fetch_array()){
                                echo "<li><a href='arquivos/leis/$leis[caminho]'>$leis[titulo]</a>
                                      <br><span>Publicado em:". convert_data($leis['data'])." </span>   </li>";
                            }
                        ?>
                        </ul>                        
                   
                </div>
				
				
			</div>
            <ul class="pagination">
            <?php
              if($pg > 1){
            ?>
                <li><a href="?pagina=leis_e_estatutos&pg=<?php echo $pg-1?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <?php
            }
            ?>
            <?php
                $query = $bd->query("select * from leis order by data desc");
                $paginas = ceil($query->num_rows/15);

                for($i = 1; $i <= $paginas; $i++){
                   echo "<li><a href='?pagina=leis_e_estatutos&pg=$i'>$i</a></li>";
                }
                if($pg < $paginas){
            ?>
			     <li><a href="?pagina=leis_e_estatutos&pg=<?php echo $pg+1?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
            <?php
                }
            ?>
        </ul>
		</div>
	</div>