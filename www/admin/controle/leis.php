<?php
    if(isset($_GET["op"])){

        require "conexao.php";

        $query = "";
        $op = $_GET["op"];
        switch($op){
            case "cadastrar":
                $titulo = $_POST["title"];
                $data = date("Y-m-d");

                require "upload.php";
                $caminho = upload('../arquivos/leis/');
                if($caminho)
                    $query = $bd->query("insert into leis(titulo,caminho, data) value('$titulo', '$caminho', '$data')");
                break;
            case "excluir":
                $id = $_GET['id'];
                $query2 = $bd->query("select * from leis where id_leis = $id");
                $res = $query2->fetch_array();
                if($res['caminho'] > "")
                        unlink("../arquivos/leis/".$res['caminho']);
                $query = $bd->query("delete from leis where id_leis = $id");
                break;
            default:
                break;
        }

         $bd->close();

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                echo "<script>location.href='?pagina=lista_leis';</script>";
        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
                echo "<script>location.href='?pagina=lista_leis';</script>";
        }

    }

?>
