<?php
    $id = $_GET['id'];

    $query = $bd->query("select * from evento where id_evento = $id");
    $evento = $query->fetch_array();


    $query2 = $bd->query("select * from evento_fotos where evento_id_evento = $id");

?>


<fieldset id="formulario">
    <span class="box_titulo"><label>Cadastrar evento<label></span>
    <form action="?pagina=controle/evento&op=editar" method="post" >
            <input type="hidden" name="id" id="id" value="<?php echo $evento['id_evento']?>">
            <span class="campo"><label for="title">Título: </label><input type="text" name="title" id="title" size="40" value="<?php echo $evento['titulo']?>" /></span>
            <span class="campo"><label for="texto">Descrição: </label><br/>
            <textarea  name="texto" id="texto" cols="70" rows="5" class="campo-textarea" ><?php echo $evento['descricao']?></textarea></span>
            <span class="campo"><input type="submit" name="Continuar" value="Continuar"/></span>
    </form>
</fieldset>


<fieldset id="formulario">
    <span class="box_titulo"><label>Fotos<label></span>
    <?php
        while($fotos = $query2->fetch_array()){
            echo "
                <div class='foto'>
                    <img widht='100' height='100' src='../arquivos/eventos/$fotos[caminho]'><br>
                    <span>$fotos[titulo]</span>
                    <a href='?pagina=controle/evento&op=excluir_foto&foto=$fotos[id_fotos]' onClick='return confirm(\" Deseja apagar esta foto? \")' >[Excluir]</a>
                </div>
            ";

        }
    ?>
</fieldset>

<fieldset id="formulario">
    <span class="box_titulo"><label>Cadastrar fotos do evento <?php echo $evento['titulo']?> <label></span>
    <form action="?pagina=controle/evento&op=upload_foto" method="post" enctype="multipart/form-data" >
            <input type="hidden" id="evento" name="evento" value="<?php echo $evento['id_evento']?>">
            <span class="campo"><label for="foto">Foto: </label><input type="file" name="arquivo" id="arquivo" size="10" /></span>
            <span class="campo"><label for="title">Título: </label><input type="text" name="title" id="title" size="40" /></span>
            <span class="campo"><input type="submit" name="Continuar" value="Salvar"/></span>
    </form>
</fieldset>