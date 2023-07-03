<fieldset>
    <span class="box_titulo"><label>Enquete<label></span>
    <div id="mostra_enquete">
            <?php
                $id = $_GET['id'];

                $query = $bd->query("select * from enquete where id_enquete = $id");
                $enquete = $query->fetch_array();

                echo "<h2>$enquete[pergunta]</h2>";

                $query = $bd->query("select * from respostas where enquete_id_enquete = $id");

                $quantidade = 0;
                while($op = $query->fetch_array()){
                        $quantidade = $quantidade + $op['quantidade'];
                }
                echo "<span>Total de votos: <b>$quantidade</b></span><br>";

                $query = $bd->query("select * from respostas where enquete_id_enquete = $id");
                $i = 1;
                $percentual = 0;
                while($op = $query->fetch_array()){
                      if($quantidade > 0){
                        $percentual = ($op['quantidade']/$quantidade)*100;
                        $percentual = number_format($percentual, 2, ',', '.');
                      }
                      echo "<span>$op[resposta] - Votos: $op[quantidade]</span>";
                      $width =  (($percentual/100) * 500);   
                      if($width >= 450)
                        $width = $width - 65;    
                      echo "<div class='barra-ensquete'><img src='img/op$i.png' height='25' width='$width'><label> $percentual%</label></div>" ;
                      $i++;
                }

            ?>
    </div>
</fieldset>