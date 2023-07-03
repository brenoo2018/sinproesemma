<?php
    $id = $_GET['id'];

    $query = $bd->query("select * from convenios where id_convenio = $id");

    $convenio = $query->fetch_array();


?>

<fieldset id="formulario">
    <span class="box_titulo"><label>Editar convênio<label></span>
    <form action="?pagina=controle/convenio&op=editar" method="post" >
            <input type="hidden" name="id" id="id" value="<?php echo $convenio['id_convenio']?>"  />
            <span class="campo"><label for="title">Título: </label><input type="text" name="title" id="title" size="40" value="<?php echo $convenio['titulo']?>"  /></span>
            <span class="campo"><label for="texto">Descrição: </label><br/><textarea class="campo-textarea" name="texto" id="texto"><?php echo $convenio['descricao']?></textarea></span>
            <span class="campo"><input type="submit" name="Continuar" value="Salvar"/></span>
    </form>
</fieldset>