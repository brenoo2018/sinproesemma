<?php
    if(isset($_GET["op"])){

        require "conexao.php";

        $query = "";
        $op = $_GET["op"];
        switch($op){
            case "cadastrar":
                $pergunta = $_POST["pergunta"];
                $op1 = $_POST["op1"];
                $op2 = $_POST["op2"];
                $op3 = $_POST["op3"];
                $op4 = $_POST["op4"];
                $op5 = $_POST["op5"];

                $query = $bd->query("insert into enquete(pergunta) value('$pergunta')");

                $enquete = $bd->insert_id;

                if($op1 != ""){
                   $query = $bd->query("insert into respostas(resposta, quantidade, enquete_id_enquete) values('$op1', 0, $enquete)");
                }

                if($op2 != ""){
                   $query = $bd->query("insert into respostas(resposta, quantidade, enquete_id_enquete) values('$op2', 0, $enquete)");
                }

                if($op3 != ""){
                   $query = $bd->query("insert into respostas(resposta, quantidade, enquete_id_enquete) values('$op3', 0, $enquete)");
                }

                if($op4 != ""){
                   $query = $bd->query("insert into respostas(resposta, quantidade, enquete_id_enquete) values('$op4', 0, $enquete)");
                }

                if($op5 != ""){
                   $query = $bd->query("insert into respostas(resposta, quantidade, enquete_id_enquete) values('$op5', 0, $enquete)");
                }

                break;
            case "excluir":
                $id = $_GET['id'];
                $query = $bd->query("delete from respostas where enquete_id_enquete = $id");
                $query = $bd->query("delete from enquete where id_enquete = $id");
                break;
            default:
                break;
        }

         $bd->close();

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                echo "<script>location.href='?pagina=lista_enquete';</script>";
        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
                echo "<script>location.href='?pagina=lista_enquete';</script>";
        }

    }

?>
