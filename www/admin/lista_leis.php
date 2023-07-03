<fieldset>
    <span class="box_titulo"><label>Leis e estatutos<label></span>
    <div id="botao_novo">
        <a href="?pagina=form_leis">Novo</a>
     </div>

     <?php

         $query = $bd->query("select * from leis order by data desc");

     ?>

     <table id="tablesorter">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($linha = $query->fetch_array()){
                        echo "<tr>";
                            echo "<td>$linha[id_leis]</td>";
                            echo "<td>$linha[titulo]</td>";
                            $dt = $linha['data'];

                            $ano = substr($dt, 0, 4);
                            $mes = substr($dt, 5, 2);
                            $dia = substr($dt, 8, 2);
                            $dt = "$dia/$mes/$ano";

                            echo "<td>$dt</td>"; 

                            echo "<td><a href='../arquivos/leis/$linha[caminho]'><img src='img/down.png' alt='visualizar' title='visualizar'></a></td>";
                            echo "<td><a href='?pagina=controle/leis&op=excluir&id=$linha[id_leis]' onClick='return confirm(\" Deseja apagar este arqvuio? \")' ><img id='table-icon' src='img/delete.png' alt='apagar' title='apagar'></a></td>";
                        echo "</tr>";
                    }
                ?>
            

            </tbody>
      </table>
</fieldset>
