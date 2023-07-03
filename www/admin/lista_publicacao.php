<fieldset>
    <span class="box_titulo"><label>Lista de notícia<label></span>
    <div id="botao_novo">
        <a href="?pagina=form_publicacao">Novo</a>
     </div>

     <div id="botao_novo">
        <a href="?pagina=lista_autor">Autores</a>
     </div>

     <?php
         $query = mysql_query("select * from publicacao, articulista where articulista_id_articulista = id_articulista order by data");
     ?>

     <table id="tablesorter">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Autor</th>
                    <th>Titulo</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
                <?php
                    while($linha = mysql_fetch_array($query)){
                        echo "<tr>";
                            echo "<td>$linha[id_publicacao]</td>";
                            echo "<td>$linha[nome]</td>";
                            echo "<td>$linha[titulo]</td>";
                            echo "<td><a href='?pagina=form_edit_publicacao&id=$linha[id_publicacao]'>Editar</a></td>";
                            echo "<td><a href='?pagina=controle/publicacao&op=excluir&id=$linha[id_publicacao]' onClick='return confirm(\" Deseja apagar esta publicação? \")' >Excluir</a></td>";
                        echo "</tr>";
                    }
                ?>
            <tbody>

            </tbody>
      </table>
</fieldset>
