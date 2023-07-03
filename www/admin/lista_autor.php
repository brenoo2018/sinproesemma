<fieldset>
    <span class="box_titulo"><label>Lista de autores<label></span>
    <div id="botao_novo">
        <a href="?pagina=form_autor">Novo</a>
     </div>

     <?php

         $query = mysql_query("select * from articulista order by nome");

     ?>

     <table id="tablesorter">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Perfil</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($linha = mysql_fetch_array($query)){
                        echo "<tr>";
                            echo "<td>$linha[id_articulista]</td>";
                            echo "<td><img src='../arquivos/autores/$linha[foto]' width='150'  ></td>";
                            echo "<td>$linha[nome]</td>";
                            echo "<td>$linha[perfil]</td>";
                            echo "<td><a href='?pagina=form_edit_autor&id=$linha[id_articulista]'>Editar</a></td>";
                            echo "<td><a href='?pagina=controle/autor&op=excluir&id=$linha[id_articulista]' onClick='return confirm(\" Deseja apagar este autor? \")' >Excluir</a></td>";
                        echo "</tr>";
                    }
                ?>
            

            </tbody>
      </table>
</fieldset>
