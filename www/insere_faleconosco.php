<?php
    require "includes/conexao.php";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $texto = $_POST['texto'];
    $data = date('Y-m-d');

    $query = $bd->query("insert into faleconosco(nome, email, mensagem, data) values('$nome', '$email', '$texto', '$data')");

    if($query){        
        header("Location:./?pagina=fale_conosco&msg=ok");
    }else{
        echo "<script>alert('Desculpe mas houve um erro inesperado. Tente novamente mais tarde.');</script>";
        echo "<script>javascript:history.back(-1)</script>";
    }



?>