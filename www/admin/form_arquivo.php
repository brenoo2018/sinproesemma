<fieldset id="formulario">
    <span class="box_titulo"><label>Postar arquivos<label></span>
    <form action="?pagina=controle/arquivos&op=cadastrar" method="post" enctype="multipart/form-data" >
            <span class="campo"><label for="title">Título: </label><input type="text" name="title" id="title" size="40" /></span>
            <span class="campo"><label for="foto">Arquivo: </label><input type="file" name="arquivo" id="arquivo" size="10" /></span>
            <span class="campo"><input type="checkbox" name="visivel" id="visivel"><label for="visivel"> Tornar visível</label></span>
            <span class="campo"><input type="submit" name="Enviar" /></span>
    </form>
</fieldset>