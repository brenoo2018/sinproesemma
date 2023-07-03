<?php
    if(isset($_GET["op"])){

        require "conexao.php";

        $query = "";
        $op = $_GET["op"];
        switch($op){
          case "cadastrar":
            $nome = $_POST['nome'];
            $curriculo = $_POST['curriculo'];


            require "upload.php";

            $caminho = upload("../arquivos/autores/");

            $query = mysql_query("insert into articulista(nome, foto, perfil) values('$nome', '$caminho', '$curriculo')");

            break;
          case "editar":
            $id = $_POST['autor'];
            $nome = $_POST['nome'];
            $curriculo = $_POST['curriculo'];

            $caminho = "";
            require "upload.php";
            $caminho = upload("../arquivos/autores/");

            if($caminho){
                    $query = mysql_query("update articulista set nome = '$nome', perfil = '$curriculo', foto = '$caminho' where id_articulista  =  $id");
            }else{
                  $query = mysql_query("update articulista set nome = '$nome', perfil = '$curriculo' where id_articulista  =  $id");
            }


            break;
          case "excluir":
            $id = $_GET['id'];

            $query = mysql_query("delete from publicacao where articulista_id_articulista = $id");
            $query = mysql_query("delete from articulista where id_articulista = $id");

            break;
        }

         mysql_close($conecta);

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                echo "<script>location.href='?pagina=lista_autor';</script>";
        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
               echo "<script>location.href='?pagina=lista_autor';</script>";
        }

    }

?>