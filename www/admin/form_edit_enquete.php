<?php
    $id = $_GET['id'];

    $query = $bd->query("select * from enquete where id_enquete = $id");
    $enquete  = $query->fetch_array();

    $query = $bd->query("select * from respostas where enquete_id_enquete = $id");

    $op1 = $query->fetch_array();
    $op2 = $query->fetch_array();
    $op3 = $query->fetch_array();
    $op4 = $query->fetch_array();
    $op5 = $query->fetch_array();

?>
<fieldset id="formulario">
    <span class="box_titulo"><label>Cadastro de enquete<label></span>
    <form action="?pagina=controle/enquete&op=editar" method="post" enctype="multipart/form-data" >
            <input type="hidden" name="enquete" value="<?php echo $enquete['id_enquete']?>"  >    
            <span class="campo"><label for="texto">Pergunta: </label><br/><textarea  name="pergunta" id="pergunta" cols="10" rows="5"><?php echo $enquete['pergunta']?></textarea></span>
            <span class="campo"><label for="op1">Opção 1: </label><input type="text" name="op1" id="op1" size="30" value="<?php echo $op1['resposta'];?>" ></span>
            <span class="campo"><label for="op2">Opção 2: </label><input type="text" name="op2" id="op2" size="30" value="<?php echo $op2['resposta'];?>"></span>
            <span class="campo"><label for="op3">Opção 3: </label><input type="text" name="op3" id="op3" size="30" value="<?php echo $op3['resposta'];?>"></span>
            <span class="campo"><label for="op4">Opção 4: </label><input type="text" name="op4" id="op4" size="30" value="<?php echo $op4['resposta'];?>"></span>
            <span class="campo"><label for="op5">Opção 5: </label><input type="text" name="op5" id="op5" size="30" value="<?php echo $op5['resposta'];?>"></span>
            <span class="campo"><input type="submit" name="Enviar" /></span>

    </form>
</fieldset>