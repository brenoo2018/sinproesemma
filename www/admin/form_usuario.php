<fieldset id="formulario">
    <span class="box_titulo"><label>Cadastro de arquivos<label></span>
    <form action="?pagina=controle/usuario&op=cadastrar" method="post" >
            <span class="campo"><label for="nomeU">Nome: </label><input type="text" name="nomeU" id="nomeU" size="40" /></span>
            <span class="campo"><label for="loginU">Login: </label><input type="text" name="loginU" id="loginU" size="20" /></span>
            <span class="campo"><label for="senhaU">Senha: </label><input type="password" name="senhaU" id="senhaU" size="10" />&nbsp;&nbsp;
            <label>Repetir a senha: </label><input type="password" name="senha2U" id="senha2U" size="10" /></span>

            <span class="campo">A senhda deve conter no mínimo 8 caracteres.</span>

            <span class="campo"><input type="submit" name="Enviar" /></span>
    </form>
</fieldset>

