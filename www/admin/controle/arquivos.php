<?php
    if(isset($_GET["op"])){

        require "conexao.php";

        $query = "";
        $op = $_GET["op"];
        switch($op){
            case "cadastrar":
                $titulo = $_POST["title"];
                $data = date("Y-m-d");

                $visivel = 0;
                if(isset($_POST["visivel"])){
                      if($_POST["visivel"] == "on"){
                           $visivel = 1;
                      }else{
                           $visivel = 0;
                      }
                }

                require "upload.php";
                $caminho = upload('../arquivos/publicados/');
                if($caminho)
                    $query = mysql_query("insert into arquivos(nome,caminho,visivel, data) value('$titulo', '$caminho', '$visivel', '$data')");
                break;
            case "editar":
                $nome = $_POST['nome'];
                $visivel = 0;
                if(isset($_POST["visivel"])){
                      if($_POST["visivel"] == "on"){
                           $visivel = 1;
                      }else{
                           $visivel = 0;
                      }
                }
                $id = $_POST['id'];
                $query = mysql_query("update arquivos set nome = '$nome', visivel = $visivel where id_arquivo = $id");
                break;
            case "excluir":
                $id = $_GET['id'];
                $query2 = mysql_query("select * from arquivos where id_arquivo = $id");
                $res = mysql_fetch_array($query2);
                if($res['caminho'] > "")
                        unlink($res['caminho']);
                $query = mysql_query("delete from arquivos where id_arquivo = $id");
                break;
            default:
                break;
        }

         mysql_close($conecta);

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                echo "<script>location.href='http://localhost/ipae/admin/?pagina=lista_arquivos';</script>";
        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
                echo "<script>location.href='http://localhost/ipae/admin/?pagina=lista_arquivos';</script>";
        }

    }

?>
