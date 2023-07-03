<?php
    require "includes/conexao.php";

    $op = $_POST['op_enquete'];
    $query = $bd->query("update respostas set quantidade = quantidade + 1 where id_respostas = $op");

    if($query){
                echo "<script>alert('Obrigado por participar!');</script>";
                echo "<script>javascript:history.back(-1)</script>";
    }

?>