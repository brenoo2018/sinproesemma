<?php
    $id = $_GET['id'];

    $query = $bd->query("select * from usuario where id_usuario = $id");

    $usuario = $query->fetch_array();

?>

<fieldset id="formulario">
    <span class="box_titulo"><label>Cadastro de arquivos<label></span>
    <form action="?pagina=controle/usuario&op=editar" method="post" >
            <input type="hidden" name="id" id="id" value="<?php echo $usuario['id_usuario']?>">
            <span class="campo"><label for="nomeU">Nome: </label><input type="text" name="nomeU" id="nomeU" size="40" value="<?php echo $usuario['nome']?>" /></span>
            <span class="campo"><label for="login">Login: </label><input type="text" name="loginU" id="loginU" size="20" value="<?php echo $usuario['login']?>" /></span>

            <span class="campo"><input type="submit" name="Enviar" /></span>
    </form>
</fieldset>
