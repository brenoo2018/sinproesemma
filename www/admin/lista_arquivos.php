<fieldset>
    <span class="box_titulo"><label>Lista de arquivos publicados<label></span>
    <div id="botao_novo">
        <a href="?pagina=form_arquivo">Novo</a>
     </div>

     <?php

         $query = mysql_query("select * from arquivos order by nome");

     ?>

     <table id="tablesorter">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Aunto</th>
                    <th>titulo</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
                <?php
                    while($linha = mysql_fetch_array($query)){
                        echo "<tr>";
                            echo "<td>$linha[id_arquivo]</td>";
                            echo "<td>$linha[nome]</td>";

                            $dt = $linha['data'];

                            $ano = substr($dt, 0, 4);
                            $mes = substr($dt, 5, 2);
                            $dia = substr($dt, 8, 2);
                            $dt = "$dia/$mes/$ano";

                            echo "<td>$dt</td>";

                            if($linha['visivel']){
                                  echo "<td>Sim</td>";
                            }else{
                                 echo "<td>Não</td>";
                            }

                            echo "<td><a href='$linha[caminho]'>Visualizar</a></td>";
                            echo "<td><a href='?pagina=form_edit_arquivos&id=$linha[id_arquivo]'>Editar</a></td>";
                            echo "<td><a href='?pagina=controle/arquivos&op=excluir&id=$linha[id_arquivo]' onClick='return confirm(\" Deseja apagar este arqvuio? \")' >Excluir</a></td>";
                        echo "</tr>";
                    }
                ?>
            <tbody>

            </tbody>
      </table>
</fieldset>
