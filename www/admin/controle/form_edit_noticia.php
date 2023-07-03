<?php
     $id = $_GET['id'];

     $query = mysql_query("select * from noticia where id_noticia = $id");
     $noticia = mysql_fetch_array($query);

     $query2 = mysql_query("select * from municipio order by nome");

?>

<fieldset id="formulario">
    <span class="box_titulo"><label>Editar notícia<label></span>
    <form action="?pagina=controle/noticia&op=editar" method="post" >
            <input type="hidden" name="id" id="id" size="40" value="<?php echo $noticia['id_noticia']?>" />
            <span class="campo"><label for="municipio">Município: </label>
            <select name="municipio">
                    <option value="10" >Geral</option>
                    <?php
                        while($municipio = mysql_fetch_array($query2)){
                            if( strcmp($municipio["nome"],"Geral") )
                            echo "<option value='$municipio[id_municipio]'";
                            if($municipio['id_municipio'] == $noticia['municipio_id_municipio'])
                                echo "selected='selected'";
                            echo ">$municipio[nome]</option>";
                        }
                    ?>
            </select>
            </span>
            <span class="campo"><label for="title">Título: </label><input type="text" name="title" id="title" size="40" value="<?php echo $noticia['titulo']?>" /></span>
            <span class="campo"><label for="fonte">Fonte: </label><input type="text" name="fonte" id="fonte" size="40" value="<?php echo $noticia['fonte']?>" /></span>

            <span class="campo"><label for="foto">Foto: </label><input type="file" name="foto" id="foto" size="10"  /></span>

            <span class="campo"><label for="texto">Texto: </label><br/><textarea  name="texto" id="texto" cols="90" rows="20"><?php echo $noticia['texto']?></textarea></span>
            <span class="campo"><input type="submit" name="Salvar" /></span>
    </form>
</fieldset>