<?php
      session_start();

      if(isset($_GET["op"])){
        $op = $_GET["op"];
        switch($op){
           case "logon":
                require "conexao.php";

                $login = $_POST['login'];
                $senha = md5($_POST['senha']);

                
                $query = $bd->query("select * from usuario where login = '$login' and senha = '$senha' and status like 'ativo' ");

                $res = $query->fetch_array();

                if($query->num_rows > 0 ) {
                        $_SESSION['login'] = $login;
                        $_SESSION['senha'] = $senha;
                        $_SESSION['nomeUsuario'] = $res['nome'];
                        $_SESSION['idUsuario'] = $res['id_usuario'];
                        echo "<script>location.href='../';</script>";
                }else{
                        unset ($_SESSION['login']);
                        unset ($_SESSION['senha']);
                        echo "<script>alert('Usuário ou senha inválidos.');</script>";
                        echo "<script>location.href='../';</script>";
                }
                break;
           case "logoff":
                 unset ($_SESSION['login']);
                 unset ($_SESSION['senha']);
                 session_destroy();
                 echo "<script>location.href='../';</script>";
                 break;
        }
    }
?>

