<fieldset id="formulario">
    <span class="box_titulo"><label>Mensagens não lidas</label></span>

<?php
    $id = $_GET['msg'];
    $query = $bd->query("select * from faleconosco where id_faleconosco = $id");
    $fale = $query->fetch_array(;
    if($fale['estado'] == 1){
        $query = $bd->query("update faleconosco set estado = 0 where id_faleconosco = $id");
    }
?>

    <div id="recado">
          <span class="recado-nome">
            <b>NOME:&nbsp;</b><?php echo $fale['nome']?><br>
            <b>E-MAIL:&nbsp;</b><?php echo $fale['email']?>
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
            <?php echo $fale['mensagem'];?>  
          </p>
          <span class="recado-controle">              
              <a href='?pagina=fale_conosco' ><img id='table-icon' src='img/back.png' alt='Voltar' title='Voltar'></a>
              <a href='?pagina=controle/leis&op=excluir&id=<?php echo $id;?>' onClick='return confirm(\" Deseja apagar este arqvuio? \")' ><img id='table-icon' src='img/delete.png' alt='apagar' title='apagar'></a>
          </span>
    </div>
</fieldset>

