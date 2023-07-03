<?php
    $id = $_GET['id'];

    $query = mysql_query("select * from noticia,municipio where id_noticia = $id and municipio_id_municipio = id_municipio");

    $noticia = mysql_fetch_array($query);

?>

<fieldset>
        <span class="box_titulo"><label>Visualisar notícia<label></span>

        <div id="mostracurso">
            <span style="font-weight: bold">Município: </span> <p><?php echo $noticia['nome']?></p>
            <span style="font-weight: bold">Título: </span> <p><?php echo $noticia['titulo']?></p>
            <span style="font-weight: bold">Fonte: </span> <p><?php echo $noticia['fonte']?></p>
            <span style="font-weight: bold">Imágem: </span> <p><img src = '../arquivos/noticias/<?php echo $noticia['imagem']?>'></p>
            <span style="font-weight: bold">Texto: </span> <p><?php echo $noticia['texto']?></p>
        </div>

        <div id="botao_novo">
            <a href="?pagina=controle/noticia&op=excluir&id=<?php echo $noticia['id_noticia']?>" onClick='return confirm(" Deseja apagar este curso? ")'  >Excluir</a>
        </div>

        <div id="botao_novo">
            <a href="?pagina=form_edit_noticia&id=<?php echo $noticia['id_noticia']?>">Editar</a>
        </div>

        <div id="botao_novo">
            <a href="?pagina=lista_noticia">Voltar</a>
        </div>

</fieldset>