<?php
    $id = $_GET['id'];

    $query = mysql_query("select * from articulista where id_articulista = $id");

    $autor  = mysql_fetch_array($query);

?>

<script>
    function desocultar(){
        document.getElementById("foto").style.visibility = 'hidden';
        document.getElementById("campo_foto").style.visibility = 'visible';
    }
</script>

<fieldset id="formulario">
    <span class="box_titulo"><label>Cadastro de autor<label></span>
    <form action="?pagina=controle/autor&op=editar" method="post" enctype="multipart/form-data" >
            <input type="hidden" name="autor" value="<?php echo $autor['id_articulista']; ?>" >
            <span class="campo" id="foto"> <img src="../arquivos/autores/<?php echo $autor['foto']?>"  width="120"> <br> <a href="#" onClick="desocultar()" >[Alterar]</a> </span>
            <span class="campo" id="campo_foto" style="  visibility: hidden;" ><label for="foto">Foto: </label><input type="file" name="arquivo" id="arquivo" size="10" /></span>
            <span class="campo"><label for="nome">Nome: </label><input type="text" name="nome" id="nome" size="40" value="<?php echo $autor['nome']?>" /></span>
            <span class="campo"><label for="curriculo">Perfil: </label><br/><textarea  name="curriculo" id="curriculo" cols="50" rows="5"><?php echo $autor['perfil']?></textarea></span>
            <span class="campo"><input type="submit" name="Enviar" /></span>
    </form>
</fieldset>