<?php
    if(isset($_GET["op"])){

        require "conexao.php";

        $query = "";
        $op = $_GET["op"];
        switch($op){
            case "cadastrar":
                $texto = $_POST["texto"];

                $query = $bd->query("update quemsomos set texto = '$texto' where id_quemsomos = 1");

                break;
            default:
                break;
        }

         $bd->close();

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                echo "<script>location.href='?pagina=quemsomos';</script>";
        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
                echo "<script>location.href='?pagina=quemsomos';</script>";
        }

    }

?>
