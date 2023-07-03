<?php
    if(isset($_GET["op"])){

        require "conexao.php";

        $query = "";
        $op = $_GET["op"];
        switch($op){
            case "cadastrar":
                $titulo = $_POST["title"];
                $texto = $_POST["texto"];
                $autor = $_POST["autor"];
                $data = date("Y-m-d");

                $query = mysql_query("insert into publicacao(titulo,data ,texto, articulista_id_articulista) value('$titulo', '$data', '$texto', $autor)");

                break;
            case "editar":
                $id = $_POST["publicacao"];
                $titulo = $_POST["title"];
                $texto = $_POST["texto"];
                $autor = $_POST["autor"];

                $query = mysql_query("update publicacao set titulo = '$titulo', texto = '$texto', articulista_id_articulista = $autor where id_publicacao = $id");
                break;
            case "excluir":
                $id = $_GET['id'];
                $query = mysql_query("delete from publicacao where id_publicacao = $id");
                break;
            default:
                break;
        }

         mysql_close($conecta);

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                echo "<script>location.href='?pagina=lista_publicacao';</script>";
        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
                echo "<script>location.href='?pagina=lista_publicacao';</script>";
        }

    }

?>
