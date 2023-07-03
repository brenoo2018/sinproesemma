<?php
    if(isset($_GET["op"])){
        $op = $_GET["op"];
        switch($op){
            case "cadastrar":
                $nomeU = $_POST['nomeU'];
                $loginU = $_POST['loginU'];
                $senhaU = $_POST['senhaU'];
                $senha2U = $_POST['senha2U'];

                if($senhaU <> $senha2U){
                    echo "<script>alert('As senhas digitadas não são iguais. Por favor, tente outra vez.');</script>";
                    echo "<script>location.href='http://localhost/ipae/admin/?pagina=form_usuario';</script>";
                }else{
                    $senhacriptografada = md5($senhaU);
                    $query = $bd->query("insert into usuario(nome, login, senha) values('$nomeU', '$loginU', '$senhacriptografada')");
                }
                break;
            case "editar":
                $nomeU = $_POST['nomeU'];
                $loginU = $_POST['loginU'];
                $id = $_POST['id'];

                $query = $bd->query("update usuario set nome = '$nomeU', login = '$loginU' where id_usuario = $id");

                break;
            case "excluir":
                $id = $_GET['id'];
                $query = $bd->query("update usuario set status = 'excluido' where id_usuario = $id");
                break;
            default:
                break;
        }

        $bd->close;

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                echo "<script>location.href='?pagina=lista_usuario';</script>";
        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
                echo "<script>location.href='?pagina=lista_usuario';</script>";
        }

    }

?>