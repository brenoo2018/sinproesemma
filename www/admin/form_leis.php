<fieldset id="formulario">
    <span class="box_titulo"><label>Postar arquivos<label></span>
    <form action="?pagina=controle/leis&op=cadastrar" method="post" enctype="multipart/form-data" >
            <span class="campo"><label for="title">Título: </label><input type="text" name="title" id="title" size="40" /></span>
            <span class="campo"><label for="foto">Arquivo: </label><input type="file" name="arquivo" id="arquivo" size="10" /></span>
            <span class="campo"><input type="submit" value="Enviar" /></span>
    </form>
</fieldset>