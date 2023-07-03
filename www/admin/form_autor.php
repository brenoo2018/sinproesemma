<fieldset id="formulario">
    <span class="box_titulo"><label>Cadastro de autor<label></span>
    <form action="?pagina=controle/autor&op=cadastrar" method="post" enctype="multipart/form-data" >
            <span class="campo"><label for="nome">Nome: </label><input type="text" name="nome" id="nome" size="40" /></span>
            <span class="campo"><label for="foto">Foto: </label><input type="file" name="arquivo" id="arquivo" size="10" /></span>
            <span class="campo"><label for="curriculo">Perfil: </label><br/><textarea  name="curriculo" id="curriculo" cols="50" rows="5"></textarea></span>
            <span class="campo"><input type="submit" name="Enviar" /></span>
    </form>
</fieldset>

