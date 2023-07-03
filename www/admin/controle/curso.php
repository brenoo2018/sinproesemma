<?php
    if(isset($_GET["op"])){

        require "conexao.php";

        $query = "";
        $op = $_GET["op"];
        switch($op){
            case "cadastrar":
                $nome = $_POST["nome"];
                $desc = $_POST["desc"];

                $visivel = 0;
                if(isset($_POST["visivel"])){
                      if($_POST["visivel"] == "on"){
                           $visivel = 1;
                      }else{
                           $visivel = 0;
                      }
                }

                $query = mysql_query("insert into curso(nome, descricao, visivel) value('$nome', '$desc', $visivel)");
                break;
            case "editar":
                $nome = $_POST["nome"];
                $desc = $_POST["desc"];
                $id = $_POST['id'];

                $visivel = 0;
                if(isset($_POST["visivel"])){
                      if($_POST["visivel"] == "on"){
                           $visivel = 1;
                      }else{
                           $visivel = 0;
                      }
                }

                $query = mysql_query("update curso set nome = '$nome', descricao = '$desc', visivel = $visivel where id_curso = $id");
                break;
            case "excluir":
                $id = $_GET['id'];
                $query = mysql_query("delete from curso where id_curso = $id");
                break;
            default:
                break;
        }

        mysql_close($conecta);

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                echo "<script>location.href='http://localhost/ipae/admin/?pagina=lista_curso';</script>";
        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
                echo "<script>location.href='http://localhost/ipae/admin/?pagina=lista_curso';</script>";
        }
    }

?>

