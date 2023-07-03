<?php
    if(isset($_GET["op"])){
        $op = $_GET["op"];
        switch($op){
            case "cadastrar":
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $login = $_POST['login'];
                $senha = '12345678';

                $query = mysql_query("insert into aluno(nome, email, login, senha) values('$nome', '$email', '$login', '$senha')");

                break;
            case "editar":
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $login = $_POST['login'];
                $id = $_POST['id'];

                $query = mysql_query("update aluno set nome = '$nome', email = '$email', login = '$login' where id_aluno = $id");

                break;
            case "excluir":
                $id = $_GET['id'];
                $query = mysql_query("delete from aluno where id_aluno = $id");
                break;
            case "resetar":
                $id = $_GET['id'];
                $query = mysql_query("update aluno set senha = '12345678' where id_aluno = $id");
                break;
            default:
                break;
        }

        mysql_close($conecta);

        if($query){
                echo "<script>alert('Operação realizada com sucesso!');</script>";
                echo "<script>location.href='http://localhost/ipae/admin/?pagina=lista_aluno';</script>";
        }else{
                echo "<script>alert('Houve um erro na operação. Entre em contato com o desenvolvedor');</script>";
                echo "<script>location.href='http://localhost/ipae/admin/?pagina=lista_aluno';</script>";
        }

    }

?>