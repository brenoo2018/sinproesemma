<?php
   $id = $_GET['id'];

   $query = mysql_query("select * from publicacao where id_publicacao = $id");
   $public = mysql_fetch_array($query);


?>

<fieldset id="formulario">
    <span class="box_titulo"><label>Cadastro de notícia<label></span>
    <form action="?pagina=controle/publicacao&op=editar" method="post" enctype="multipart/form-data" >
            <input type="hidden" name="publicacao" id="publicacao" value="<?php echo $public['id_publicacao']?>">
            <span class="campo"><label for="autor">Autor: </label>
                <select name="autor">
                    <?php
                        $query = mysql_query("select * from articulista order by nome");
                        while($autor = mysql_fetch_array($query)){
                            echo "<option value='$autor[id_articulista]' ";
                            if($public['articulista_id_articulista'] == $autor['id_articulista'])
                                    echo "selected='selected'";
                            echo " >$autor[nome]</option>";
                        }
                    ?>
                </select>
            </span>
            <span class="campo"><label for="title">Título: </label><input type="text" name="title" id="title" size="40" value="<?php echo $public['titulo']?>"/></span>
            <span class="campo"><label for="texto">Texto: </label><br/><textarea  name="texto" id="texto" cols="90" rows="20"><?php echo $public['texto']?></textarea></span>
            <span class="campo"><input type="submit" name="Enviar" /></span>
    </form>
</fieldset>