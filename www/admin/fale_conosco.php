<fieldset id="formulario">
    <span class="box_titulo"><label>Mensagens não lidas</label></span>

<?php
    $query = $bd->query("select * from faleconosco where estado = 1 order by data desc");
    while($fale = $query->fetch_array()){
?>

    <div id="recado">
          <span class="recado-nome">
            <b>NOME:&nbsp;</b><?php echo $fale['nome']?>
          </span> 
          <span class="recado-data">
          <i><b>Em:&nbsp;</b>
          <?php
            $dt = $fale['data'];

            $ano = substr($dt, 0, 4);
            $mes = substr($dt, 5, 2);
            $dia = substr($dt, 8, 2);
            $dt = "$dia/$mes/$ano";
            echo $dt
          ?>
          </i>
          </span>
          <p>
            <?php echo substr($fale['mensagem'],0,200)." ... "?>  
          </p>
          <span class="recado-controle">
              <a href='?pagina=fale_conosco_msg&msg=<?php echo $fale['id_faleconosco'];?>'><img src='img/mais.png' alt='visualizar' title='visualizar'></a>
              <a href="?pagina=controle/faleconosco&op=excluir&id=<?php echo $fale['id_faleconosco'];?>" onClick="return confirm(' Deseja apagar esta mensagem? ')" ><img id='table-icon' src='img/delete.png' alt='apagar' title='apagar'></a>
          </span>
    </div>

<?php
    }

?>
</fieldset>

<fieldset id="formulario">
    <span class="box_titulo"><label>Mensagens lidas</label></span>

<?php
    $query = $bd->query("select * from faleconosco where estado = 0 order by data desc");
    while($fale = $query->fetch_array()){
?>

    <div id="recado">
          <span class="recado-nome">
            <b>NOME:&nbsp;</b><?php echo $fale['nome']?>
          </span> 
          <span class="recado-data">
          <i><b>Em:&nbsp;</b>
          <?php
            $dt = $fale['data'];

            $ano = substr($dt, 0, 4);
            $mes = substr($dt, 5, 2);
            $dia = substr($dt, 8, 2);
            $dt = "$dia/$mes/$ano";
            echo $dt
          ?>
          </i>
          </span>
          <p>
            <?php echo substr($fale['mensagem'],0,200)." ... "?>  
          </p>
          <span class="recado-controle">
              <a href='?pagina=fale_conosco_msg&msg=<?php echo $fale['id_faleconosco'];?>'><img src='img/mais.png' alt='visualizar' title='visualizar'></a>
              <a href='?pagina=controle/faleconosco&op=excluir&id=<?php echo $fale['id_faleconosco'];?>' onClick='return confirm(\" Deseja apagar esta mensagem? \")' ><img id='table-icon' src='img/delete.png' alt='apagar' title='apagar'></a>
          </span>
    </div>

<?php
    }

?>
</fieldset>