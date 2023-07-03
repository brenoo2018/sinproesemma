<?php
    if(isset($_GET["op"])){

        require "conexao.php";

        $query = "";
        $op = $_GET["op"];
        switch($op){
            case "cadastrar":
                $nome = $_POST["title"];
                $desc = $_POST["texto"];

                $query = $bd->query("insert into convenios(titulo, descricao) value('$nome', '$desc')");  

                break;
            case "editar":
                $nome = $_POST["title"];
                $desc = $_POST["texto"];
                $id = $_POST['id'];

                $query = $bd->query("update convenios set titulo = '$nome', descricao = '$desc' where id_convenio = $id");

                break;
            case "excluir":
                $id = $_GET['id'];

                $query = $bd->query("delete from convenios where id_convenio = $id");

                break;
            default:
                break;
        }

        $bd->close();

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                echo "<script>location.href='?pagina=lista_convenios';</script>";

        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
                echo "<script>location.href='?pagina=lista_convenios';</script>";

        }
    }

?>

