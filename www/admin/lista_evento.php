<fieldset>
    <span class="box_titulo"><label>Lista de eventos<label></span>
     <div id="botao_novo">
        <a href="?pagina=form_evento">Novo</a>
     </div>

     <?php

         $query = $bd->query("select * from evento order by data desc");

     ?>

     <table id="tablesorter">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($linha = $query->fetch_array()){
                        echo "<tr>";
                            echo "<td>$linha[id_evento]</td>";
                            echo "<td>$linha[titulo]</td>";
                            echo "<td>".substr($linha['descricao'],0,50)."</td>";
                            echo "<td><a href='?pagina=form_edit_evento&id=$linha[id_evento]'><img id='table-icon' src='img/edit.png' alt='edita' title='editar'></a></td>";
                            echo "<td><a href='?pagina=controle/evento&op=excluir&id=$linha[id_evento]' onClick='return confirm(\" Deseja apagar este evento? \")' ><img id='table-icon' src='img/delete.png' alt='apagar' title='apagar'></a></td>";
                        echo "</tr>";
                    }
                ?>
            

            </tbody>
      </table>
</fieldset>
