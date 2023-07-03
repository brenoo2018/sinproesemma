
<fieldset id="formulario">
    <span class="box_titulo"><label>Cadastro de enquete<label></span>
    <form action="?pagina=controle/enquete&op=cadastrar" method="post" enctype="multipart/form-data" >
            <span class="campo"><label for="texto">Pergunta: </label><br/>
            <textarea  name="pergunta" id="pergunta" class="campo-textarea"></textarea></span>
            <span class="campo"><label for="op1">Opção 1: </label><input type="text" name="op1" id="op1" size="30" ></span>
            <span class="campo"><label for="op2">Opção 2: </label><input type="text" name="op2" id="op2" size="30" ></span>
            <span class="campo"><label for="op3">Opção 3: </label><input type="text" name="op3" id="op3" size="30" ></span>
            <span class="campo"><label for="op4">Opção 4: </label><input type="text" name="op4" id="op4" size="30" ></span>
            <span class="campo"><label for="op5">Opção 5: </label><input type="text" name="op5" id="op5" size="30" ></span>
            <span class="campo"><input type="submit" name="Enviar" /></span>

    </form>
</fieldset>