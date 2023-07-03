<fieldset>
    <span class="box_titulo"><label>Lista de convênios<label></span>
     <div id="botao_novo">
        <a href="?pagina=form_convenio">Novo</a>
     </div>

     <?php

         $query = $bd->query("select * from convenios order by titulo");

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
                            echo "<td>$linha[id_convenio]</td>";
                            echo "<td>$linha[titulo]</td>";
                            echo "<td>".strip_tags(substr($linha['descricao'],0,50))."</td>";
                            echo "<td><a href='?pagina=form_edit_convenio&id=$linha[id_convenio]'><img id='table-icon' src='img/edit.png' alt='edita' title='editar'></a></td>";
                            echo "<td><a href='?pagina=controle/convenio&op=excluir&id=$linha[id_convenio]' onClick='return confirm(\" Deseja apagar este convenio? \")' ><img id='table-icon' src='img/delete.png' alt='apagar' title='apagar'></a></td>";
                        echo "</tr>";
                    }
                ?>
            

            </tbody>
      </table>
</fieldset>
