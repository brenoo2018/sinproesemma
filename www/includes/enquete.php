<?php
    $query = $bd->query("select * from enquete order by id_enquete desc");
    $enquete = $query->fetch_array();
?>
<div id="enquete">
    <div class="enquete-head">
        <h2>Enquete</h2>
        <h4>Participe de nossas enquetes</h4>
    </div>
    <p>
        <?php echo $enquete['pergunta']?>
    </p>
    <form id="form_enquete" action="votar_enquete.php" method="POST" onsubmit="return verificaEnquete()"  >
        <?php
            $query = $bd->query("select * from respostas where enquete_id_enquete = $enquete[id_enquete]");

            while($op = $query->fetch_array()){                                    
                  echo "<div class='enquete-op bg-gray '><div class='enqute-op-input'><input type='radio' name='op_enquete' value='$op[id_respostas]'></div><span>$op[resposta]</span></div>";    
            }


        ?>                            
        <div class="enquete-bt "><input type="submit" value="Votar" ></div>
    </form>
    <div class="enquete-foot">
        <a href="" class="a-bg-green">Resultado parcial</a>
        <a href="">Mais enquetes</a>
    </div>
</div>