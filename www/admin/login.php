<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//PT-BR"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt" lang="pt">


<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <meta charset="utf-8">
<body>

<div id="box_login">
    <span id="titulo" >SINPROESEMMA - Barra do Corda<br>Ambiente administrativo</span>
    <form method="POST" action="controle/sessao.php?op=logon">
        <label for="login">Usuário: </label><input type="text" name="login" id="login" size="30" />
        <label for="senha">Senha: </label><input type="password" name="senha" id="senha" size="30" />
        <input type="submit" id="botao" value="Entrar"/>
    </form>
    <a href="#">Esqueci minha senha</a>

</div>

</body>

</html>
