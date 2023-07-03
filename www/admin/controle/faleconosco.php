<?php
    if(isset($_GET["op"])){

        require "conexao.php";

        $query = "";
        $op = $_GET["op"];
        switch($op){        
            case "excluir":
                $id = $_GET['id'];
                $query = $bd->query("delete from faleconosco where id_faleconosco = $id");
                break;
            default:
                break;
        }

         

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                echo "<script>location.href='?pagina=fale_conosco';</script>";
        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
               echo "<script>location.href='?pagina=fale_conosco';</script>";
        }

    }

?>
