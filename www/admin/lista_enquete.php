<fieldset>
    <span class="box_titulo"><label>Lista de enquetes<label></span>
     <div id="botao_novo">
        <a href="?pagina=form_enquete">Novo</a>
     </div>

     <?php

         $query = $bd->query("select * from enquete order by id_enquete desc");

     ?>

     <table id="tablesorter">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Pergunta</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
                <?php
                    while($linha = $query->fetch_array()){
                        echo "<tr>";
                            echo "<td>$linha[id_enquete]</td>";
                            echo "<td>$linha[pergunta]</td>";
                            echo "<td><a href='?pagina=visualiza_enquete&id=$linha[id_enquete]'><img src='img/graphic.png' alt='ver resultado' title='ver resultado'></a></td>";
                            echo "<td><a href='?pagina=controle/enquete&op=excluir&id=$linha[id_enquete]' onClick='return confirm(\" Deseja apagar esta enquete? \")' ><img id='table-icon' src='img/delete.png' alt='apagar' title='apagar'></a></td>";
                        echo "</tr>";
                    }
                ?>
            <tbody>

            </tbody>
      </table>
</fieldset>

