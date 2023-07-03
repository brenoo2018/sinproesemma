<?php
    if(isset($_GET["op"])){

        require "conexao.php";

        $query = "";
        $op = $_GET["op"];
        switch($op){
            case "cadastrar":
                $nome = $_POST["title"];
                $desc = $_POST["texto"];
                $query = $bd->query("insert into evento(titulo, descricao) value('$nome', '$desc')");
                if($query){
                    $id = $bd->insert_id;
                    echo "<script>location.href='?pagina=form_evento_foto&evento=$id';</script>";
                }else{
                    echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
                    echo "<script>location.href='?pagina=lista_evento';</script>";
                }
                break;
            case "editar":
                $nome = $_POST["title"];
                $desc = $_POST["texto"];
                $id = $_POST['id'];

                $visivel = 0;
                if(isset($_POST["visivel"])){
                      if($_POST["visivel"] == "on"){
                           $visivel = 1;
                      }else{
                           $visivel = 0;
                      }
                }

                $query = $bd->query("update evento set titulo = '$nome', descricao = '$desc' where id_evento = $id");
                if($query){
                      echo "<script>alert('Operação realizada com sucesso!');</script>";
                }else{
                       echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
                }
                echo "<script>location.href='?pagina=form_edit_evento&id=$id';</script>";
                break;
            case "upload_foto":
                $titulo = $_POST['title'];
                $evento = $_POST['evento'];
                require "upload_foto.php";
                $caminho = upload('../arquivos/eventos/');
                if($caminho){
                    $query = $bd->query("insert into evento_fotos(titulo, caminho, evento_id_evento) values('$titulo', '$caminho', $evento)");
                }
                if($query){
                    echo "<script>alert('Operação realizada com sucesso!');</script>";
                }else{
                    echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
                }
                echo "<script>location.href='?pagina=form_evento_foto&evento=$evento';</script>";
                break;
            case "excluir":
                $id = $_GET['id'];

                $query2 = $bd->query("select caminho from evento_fotos where evento_id_evento = $id");

                while($res = $query2->fetch_array()){
                        if($res['caminho'] > ""){
                             unlink($res['caminho']);
                        }
                }

                $query2 = $bd->query("delete from evento_fotos where evento_id_evento = $id");
                $query = $bd->query("delete from evento where id_evento = $id");
                break;
            case "excluir_foto":
                $id = $_GET['foto'];

                $query2 = $bd->query("select evento_id_evento from evento_fotos where id_fotos = $id");
                $res = $query2->fetch_array();
                $evento = $res['evento_id_evento'];

                $query2 = $bd->query("select caminho from evento_fotos where id_fotos = $id");
                $res = $query2->fetch_array();
                if($res['caminho'] > "")
                    unlink("../arquivos/eventos/".$res['caminho']);

                $query = $bd->query("delete from evento_fotos where id_fotos = $id");
                break;
            default:
                break;
        }

        $bd->close();

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                if(($op == "upload_foto") || ($op == "excluir_foto")){
                    echo "<script>location.href='?pagina=form_evento_foto&evento=$evento';</script>";
                }else{
                    echo "<script>location.href='?pagina=lista_evento';</script>";
                }

        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
                if(($op == "upload_foto") || ($op == "excluir_foto") ){
                        echo "<script>location.href='?pagina=form_evento_foto&id=$evento';</script>";
                }else{
                       echo "<script>location.href='?pagina=lista_evento';</script>";
                }
        }
    }

?>

