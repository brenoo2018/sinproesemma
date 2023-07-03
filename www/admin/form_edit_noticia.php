<?php
     $id = $_GET['id'];

     $query = $bd->query("select * from noticia where id_noticia = $id");
     $noticia = $query->fetch_array();

     $query2 = $bd->query("select * from municipio order by nome");

?>

<fieldset id="formulario">
    <span class="box_titulo"><label>Editar notícia<label></span>
    <form action="?pagina=controle/noticia&op=editar" method="post" >
            <input type="hidden" name="id" id="id" size="40" value="<?php echo $noticia['id_noticia']?>" />
            <span class="campo"><label for="municipio">Município: </label>
            <select name="municipio">
                    <option value="10" >Geral</option>
                    <?php
                        while($municipio = $query2->fetch_array()){
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

            <span class="campo">
                <label for="foto">Foto: </label><br>
                <img name="foto" id="foto" src="../arquivos/noticias/<?php echo $noticia['imagem']?>" width="200" /><br>
                <a href="">[Alterar]</a>
            </span>

            <span class="campo"><label for="texto">Texto: </label><br/><textarea  name="texto" id="texto" cols="90" rows="20"><?php echo $noticia['texto']?></textarea></span>
            <span class="campo"><input type="submit" value="Salvar" /></span>
    </form>
</fieldset>