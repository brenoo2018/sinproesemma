<?php
    $query = $bd->query("select * from municipio order by nome");
?>

<fieldset id="formulario">
    <span class="box_titulo"><label>Cadastro de notícia<label></span>
    <form action="?pagina=controle/noticia&op=cadastrar" method="post" enctype="multipart/form-data" >
            <span class="campo"><label for="municipio">Município: </label>
                <select name="municipio">
                    <option value="10">Geral</option>
                    <?php
                        while($municipio = $query->fetch_array()){
                            if( strcmp($municipio["nome"],"Geral") )
                            echo "<option value='$municipio[id_municipio]'>$municipio[nome]</option>";
                        }
                    ?>
                </select>
            </span>
            <span class="campo"><label for="title">Título: </label><input type="text" name="title" id="title" size="40" /></span>
            <span class="campo"><label for="fonte">Fonte: </label><input type="text" name="fonte" id="fonte" size="40" /></span>
            <span class="campo"><label for="foto">Foto: </label><input type="file" name="arquivo" id="arquivo" size="10" /></span>
            <span class="campo"><label for="texto">Texto: </label><br/><textarea class="campo-textarea"  name="texto" id="texto"></textarea></span>
            <span class="campo"><input type="checkbox" name="destaque" ><label for="destaque"> Destaque</label></span>
            <span class="campo"><input type="submit" value="Salvar" /></span>
    </form>
</fieldset>