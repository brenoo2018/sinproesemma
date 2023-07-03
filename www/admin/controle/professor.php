<?php
    if(isset($_GET["op"])){

        require "conexao.php";

        $query = "";
        $op = $_GET["op"];
        switch($op){
          case "cadastrar":
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $curriculo = $_POST['curriculo'];

            if(isset($_POST['foto'])){
                $foto = $_POST['foto'];
            }else{
                $foto = "";
            }

            require "upload.php";

            $caminho = upload("../arquivos/professores/");

            $query = mysql_query("insert into professor(nome, email, foto, perfil) values('$nome', '$email', '$caminho', '$curriculo')");

            break;
          case "editar":
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $curriculo = $_POST['curriculo'];

            if(isset($_POST['foto'])){
                $foto = $_POST['foto'];
            }else{
                $foto = "";
            }

            $id = $_POST['id'];

            $query = mysql_query("update professor set nome = '$nome', email = '$email', perfil = '$curriculo', foto = '$foto' where id_professor  =  $id");

            break;
          case "excluir":
            $id = $_GET['id'];

            $query = mysql_query("delete from professor where id_professor = $id");

            break;
        }

         mysql_close($conecta);

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                echo "<script>location.href='http://localhost/ipae/admin/?pagina=lista_professor';</script>";
        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
               // echo "<script>location.href='http://localhost/ipae/admin/?pagina=lista_professor';</script>";
        }

    }

?>