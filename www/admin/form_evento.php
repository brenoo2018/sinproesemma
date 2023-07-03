<fieldset id="formulario">
    <span class="box_titulo"><label>Cadastrar evento<label></span>
    <form action="?pagina=controle/evento&op=cadastrar" method="post" >
            <span class="campo"><label for="title">Título: </label><input type="text" name="title" id="title" size="40" /></span>
            <span class="campo"><label for="texto">Descrição: </label><br/>
            <textarea  name="texto" id="texto" cols="70" rows="5" class="campo-textarea" ></textarea></span>
            <span class="campo"><input type="submit" name="Continuar" value="Continuar"/></span>
    </form>
</fieldset>