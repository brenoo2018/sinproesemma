<?php
    $query = mysql_query("select * from articulista order by nome");
?>

<fieldset id="formulario">
    <span class="box_titulo"><label>Cadastro de notícia<label></span>
    <form action="?pagina=controle/publicacao&op=cadastrar" method="post" enctype="multipart/form-data" >
            <span class="campo"><label for="autor">Autor: </label>
                <select name="autor">
                    <?php
                        while($autor = mysql_fetch_array($query)){
                            echo "<option value='$autor[id_articulista]'>$autor[nome]</option>";
                        }
                    ?>
                </select>
            </span>
            <span class="campo"><label for="title">Título: </label><input type="text" name="title" id="title" size="40" /></span>
            <span class="campo"><label for="texto">Texto: </label><br/><textarea  name="texto" id="texto" cols="90" rows="20"></textarea></span>
            <span class="campo"><input type="submit" name="Enviar" /></span>
    </form>
</fieldset>