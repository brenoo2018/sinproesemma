 <?php
    @session_start();

    if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
         unset($_SESSION['login']);
         unset($_SESSION['senha']);
         echo "<script>location.href='login.php';</script>";
    }

    $logado = $_SESSION['nomeUsuario'];
    $id_logado = $_SESSION['idUsuario'];


    require "include/topo.php";
    require "controle/conexao.php";

    if(isset($_GET["pagina"])){
            $pagina = $_GET["pagina"];
            require $pagina.".php";
    }else{

    }

    $bd->close();
    require "include/rodape.php";
 ?>





