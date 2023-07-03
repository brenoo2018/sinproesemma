<fieldset>
    <span class="box_titulo"><label>Lista de usuários<label></span>
    <div id="botao_novo">
        <a href="?pagina=form_usuario">Novo</a>
     </div>

     <?php

         $query = $bd->query("select * from usuario where status <> 'excluido' order by nome");

     ?>

     <table id="tablesorter">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Login</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
                <?php
                    while($linha = $query->fetch_array()){
                        echo "<tr>";
                            echo "<td>$linha[id_usuario]</td>";
                            echo "<td>$linha[nome]</td>";
                            echo "<td>$linha[login]</td>";
                            echo "<td><a href='?pagina=form_edit_usuario&id=$linha[id_usuario]'><img id='table-icon' src='img/edit.png' alt='edita' title='editar'></a></td>";
                            echo "<td><a href='?pagina=controle/usuario&op=excluir&id=$linha[id_usuario]' onClick='return confirm(\" Deseja apagar este usuario? \")' ><img id='table-icon' src='img/delete.png' alt='apagar' title='apagar'></a></td>";
                        echo "</tr>";
                    }
                ?>
            <tbody>

            </tbody>
      </table>
</fieldset>
