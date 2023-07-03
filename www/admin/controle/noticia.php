<?php
    if(isset($_GET["op"])){

        require "conexao.php";

        $query = "";
        $op = $_GET["op"];
        switch($op){
            case "cadastrar":
                $titulo = $_POST["title"];
                $texto = $_POST["texto"];
                $fonte = $_POST["fonte"];
                $municipio = $_POST["municipio"];
                $data = date("Y-m-d");

                $destaque = 0;
                if(isset($_POST["destaque"])){
                      if($_POST["destaque"] == "on"){
                           $destaque = 1;
                      }else{
                           $destaque = 0;
                      }
                }

                $caminho = "";

                require "upload_foto.php";
                $caminho = upload("../arquivos/noticias/");

                $query = $bd->query("insert into noticia(titulo,fonte ,texto, data, imagem, usuario_id_usuario, municipio_id_municipio, destaque) value('$titulo', '$fonte', '$texto', '$data', '$caminho', $id_logado, $municipio, $destaque)"); 

                break;
            case "editar":
                $titulo = $_POST["title"];
                $texto = $_POST["texto"];
                $fonte = $_POST["fonte"];
                $id = $_POST['id'];
                $data = date("Y-m-d");
                $municipio = $_POST["municipio"];

                if(isset($_GET["foto"])){
                    $imagem = $_POST["foto"];
                }else{
                    $imagem = "";
                }
                $query = $bd->query("update noticia set titulo = '$titulo', fonte = '$fonte' , texto = '$texto', imagem = '$imagem', municipio_id_municipio = $municipio where id_noticia = $id");                
                break;
            case "excluir":
                $id = $_GET['id'];
                $query = $bd->query("delete from noticia where id_noticia = $id");
                break;
            default:
                break;
        }

         

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                echo "<script>location.href='?pagina=lista_noticia';</script>";
        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
               echo "<script>location.href='?pagina=lista_noticia';</script>";
        }

    }

?>
