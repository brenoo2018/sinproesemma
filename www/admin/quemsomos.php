<?php
    $query = $bd->query("select * from quemsomos");
    $texto = $query->fetch_array();
?>

<fieldset id="formulario">
    <span class="box_titulo"><label>Quem somos<label></span>
    <form action="?pagina=controle/quemsomos&op=cadastrar" method="post" enctype="multipart/form-data" >
            <span class="campo"><label for="texto">Texto: </label><br/><textarea class="campo-textarea" name="texto" id="texto"><?php echo $texto['texto']?></textarea></span>
            <span class="campo"><input type="submit" name="Enviar" value="Salvar"/></span>
    </form>
</fieldset>